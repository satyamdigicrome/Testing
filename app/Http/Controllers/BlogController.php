<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = Blog::query()->where('status', true)->latest('id');

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('short_description', 'like', "%{$search}%")
                  ->orWhere('tags', 'like', "%{$search}%");
            });
        }

        $blogs = $query->paginate(6)->withQueryString();

        $recentPosts = Blog::where('status', true)
            ->latest('id')
            ->take(3)
            ->get(['id', 'name', 'slug', 'thumbnail', 'created_at']);

        $allTags = Blog::where('status', true)
            ->whereNotNull('tags')
            ->pluck('tags')
            ->flatMap(fn($t) => array_map('trim', explode(',', $t)))
            ->filter()
            ->unique()
            ->values();

        return view('pages.blogs', compact('blogs', 'recentPosts', 'allTags'));
    }

    public function show(string $slug)
    {
        $blog = Blog::where('slug', $slug)->where('status', true)->firstOrFail();

        $recentPosts = Blog::where('status', true)
            ->where('id', '!=', $blog->id)
            ->latest('id')
            ->take(3)
            ->get(['id', 'name', 'slug', 'thumbnail', 'created_at']);

        $allTags = Blog::where('status', true)
            ->whereNotNull('tags')
            ->pluck('tags')
            ->flatMap(fn($t) => array_map('trim', explode(',', $t)))
            ->filter()
            ->unique()
            ->values();

        return view('pages.blog-details', compact('blog', 'recentPosts', 'allTags'));
    }
}
