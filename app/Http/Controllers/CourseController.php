<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $query = Course::query()->where('status', true)->latest('id');

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('short_description', 'like', "%{$search}%");
            });
        }

        $courses = $query->paginate(8)->withQueryString();

        return view('pages.courses', compact('courses'));
    }

    public function show(string $slug)
    {
        $course = Course::where('slug', $slug)
            ->where('status', true)
            ->with('reviews')
            ->firstOrFail();

        $relatedCourses = Course::where('status', true)
            ->where('id', '!=', $course->id)
            ->latest('id')
            ->take(3)
            ->get();

        return view('pages.course-details', compact('course', 'relatedCourses'));
    }
}
