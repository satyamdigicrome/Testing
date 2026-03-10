<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Course;
use App\Models\TeamMember;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        // Top Categories - 8 courses, style1 cards
        $topCourses = Course::where('status', true)->latest('id')->take(8)->get();

        // Popular Courses - 4 courses, style2 cards
        $popularCourses = Course::where('status', true)->latest('id')->take(4)->get();

        // Testimonials for slider
        $testimonials = Testimonial::where('status', true)->latest('id')->get();

        // Team members ordered by display order
        $teamMembers = TeamMember::where('status', true)->orderBy('order')->orderBy('id')->get();

        // Recent 3 blogs
        $recentBlogs = Blog::where('status', true)->latest('id')->take(3)->get();

        return view('welcome', compact(
            'topCourses',
            'popularCourses',
            'testimonials',
            'teamMembers',
            'recentBlogs'
        ));
    }
}
