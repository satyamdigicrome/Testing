<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Course;
use App\Models\TeamMember;
use App\Models\Testimonial;

class AboutController extends Controller
{
    public function index()
    {
        $teamMembers  = TeamMember::where('status', true)->orderBy('order')->orderBy('id')->get();
        $testimonials = Testimonial::where('status', true)->latest('id')->get();
        $recentBlogs  = Blog::where('status', true)->latest('id')->take(3)->get();
        $featuredCourses = Course::where('status', true)->latest('id')->take(4)->get();

        return view('pages.about', compact('teamMembers', 'testimonials', 'recentBlogs', 'featuredCourses'));
    }
}
