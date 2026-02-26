<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::query()->latest('id')->paginate(15);

        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        $blog = new Blog();

        return view('admin.blogs.create', compact('blog'));
    }

    public function store(Request $request)
    {
        $validated = $this->validateBlog($request);
        $validated['slug'] = $this->uniqueSlug($validated['slug'] ?? null, $validated['name']);
        $validated['status'] = $request->boolean('status');

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('uploads/blogs', 'public');
        }
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('uploads/blogs', 'public');
        }
        if ($request->hasFile('author_image')) {
            $validated['author_image'] = $request->file('author_image')->store('uploads/blogs', 'public');
        }

        $validated['created_by'] = Auth::id();
        $validated['updated_by'] = Auth::id();

        Blog::create($validated);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully.');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $this->validateBlog($request, $blog->id);
        $validated['slug'] = $this->uniqueSlug(
            $validated['slug'] ?? null,
            $validated['name'],
            $blog->id
        );
        $validated['status'] = $request->boolean('status');

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('uploads/blogs', 'public');
        }
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('uploads/blogs', 'public');
        }
        if ($request->hasFile('author_image')) {
            $validated['author_image'] = $request->file('author_image')->store('uploads/blogs', 'public');
        }

        $validated['updated_by'] = Auth::id();

        $blog->update($validated);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully.');
    }

    private function validateBlog(Request $request, ?int $ignoreId = null): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => [
                'nullable',
                'string',
                'max:255',
                Rule::unique('blogs', 'slug')->ignore($ignoreId),
            ],
            'thumbnail' => ['nullable', 'image', 'max:4096'],
            'image' => ['nullable', 'image', 'max:6144'],
            'status' => ['nullable', 'boolean'],
            'short_description' => ['nullable', 'string', 'max:500'],
            'long_description' => ['nullable', 'string'],
            'author_name' => ['nullable', 'string', 'max:255'],
            'author_image' => ['nullable', 'image', 'max:4096'],
            'author_description' => ['nullable', 'string'],
            'tags' => ['nullable', 'string', 'max:255'],
        ]);
    }

    private function uniqueSlug(?string $slug, string $name, ?int $ignoreId = null): string
    {
        $base = Str::slug($slug ?: $name);
        $base = $base !== '' ? $base : Str::random(8);

        $candidate = $base;
        $i = 2;

        while (
            Blog::query()
                ->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))
                ->where('slug', $candidate)
                ->exists()
        ) {
            $candidate = $base.'-'.$i;
            $i++;
        }

        return $candidate;
    }
}

