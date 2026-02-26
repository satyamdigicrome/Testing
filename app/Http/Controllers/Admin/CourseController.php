<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::query()
            ->latest('id')
            ->paginate(15);

        return view('admin.courses.index', compact('courses'));
    }

    public function create()
    {
        $course = new Course();
        return view('admin.courses.create', compact('course'));
    }

    public function store(Request $request)
    {
        $validated = $this->validateCourse($request);

        $validated['slug'] = $this->uniqueSlug($validated['slug'] ?? null, $validated['title']);
        $validated['status'] = $request->boolean('status');

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('uploads/courses', 'public');
        }
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('uploads/courses', 'public');
        }
        if ($request->hasFile('instructor_image')) {
            $validated['instructor_image'] = $request->file('instructor_image')->store('uploads/courses', 'public');
        }

        $validated['created_by'] = Auth::id();
        $validated['updated_by'] = Auth::id();

        $course = Course::create($validated);

        $this->syncReviews($request, $course);

        return redirect()
            ->route('admin.courses.index')
            ->with('success', 'Course created successfully.');
    }

    public function edit(Course $course)
    {
        $course->load('reviews');
        return view('admin.courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $validated = $this->validateCourse($request, $course->id);

        $validated['slug'] = $this->uniqueSlug(
            $validated['slug'] ?? null,
            $validated['title'],
            $course->id
        );
        $validated['status'] = $request->boolean('status');

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('uploads/courses', 'public');
        }
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('uploads/courses', 'public');
        }
        if ($request->hasFile('instructor_image')) {
            $validated['instructor_image'] = $request->file('instructor_image')->store('uploads/courses', 'public');
        }

        $validated['updated_by'] = Auth::id();

        $course->update($validated);

        $this->syncReviews($request, $course);

        return redirect()
            ->route('admin.courses.index')
            ->with('success', 'Course updated successfully.');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()
            ->route('admin.courses.index')
            ->with('success', 'Course deleted successfully.');
    }

    private function validateCourse(Request $request, ?int $ignoreId = null): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => [
                'nullable',
                'string',
                'max:255',
                Rule::unique('courses', 'slug')->ignore($ignoreId),
            ],
            'thumbnail' => ['nullable', 'image', 'max:4096'],
            'image' => ['nullable', 'image', 'max:6144'],
            'start_date' => ['nullable', 'date'],
            'duration' => ['nullable', 'string', 'max:255'],
            'lectures' => ['nullable', 'integer', 'min:0'],
            'fees' => ['nullable', 'integer', 'min:0'],
            'short_description' => ['nullable', 'string', 'max:500'],
            'long_description' => ['nullable', 'string'],
            'instructor_name' => ['nullable', 'string', 'max:255'],
            'instructor_position' => ['nullable', 'string', 'max:255'],
            'instructor_image' => ['nullable', 'image', 'max:4096'],
            'rating' => ['nullable', 'integer', 'between:1,5'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string'],
            'meta_keywords' => ['nullable', 'string', 'max:255'],
            'status' => ['nullable', 'boolean'],
        ], [], [
            'fees' => 'fees (in Rs)',
        ]);
    }

    private function uniqueSlug(?string $slug, string $title, ?int $ignoreId = null): string
    {
        $base = Str::slug($slug ?: $title);
        $base = $base !== '' ? $base : Str::random(8);

        $candidate = $base;
        $i = 2;

        while (
            Course::query()
                ->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))
                ->where('slug', $candidate)
                ->exists()
        ) {
            $candidate = $base.'-'.$i;
            $i++;
        }

        return $candidate;
    }

    private function syncReviews(Request $request, Course $course): void
    {
        // We rebuild reviews from submitted rows (keeps existing image if not re-uploaded).
        $names = $request->input('review_name', []);
        $texts = $request->input('review_text', []);
        $ratings = $request->input('review_rating', []);
        $existingImages = $request->input('review_existing_image', []);
        $images = $request->file('review_image', []);

        $course->reviews()->delete();

        $rows = max(count($names), count($texts), count($ratings), count($existingImages), is_array($images) ? count($images) : 0);

        for ($idx = 0; $idx < $rows; $idx++) {
            $name = $names[$idx] ?? null;
            $text = $texts[$idx] ?? null;
            $rating = $ratings[$idx] ?? null;

            $imagePath = $existingImages[$idx] ?? null;
            if (is_array($images) && array_key_exists($idx, $images) && $images[$idx]) {
                $imagePath = $images[$idx]->store('uploads/courses/reviews', 'public');
            }

            if (!($name || $text || $rating || $imagePath)) {
                continue;
            }

            $course->reviews()->create([
                'name' => $name,
                'text' => $text,
                'rating' => $rating ? (int) $rating : null,
                'image' => $imagePath,
            ]);
        }
    }
}

