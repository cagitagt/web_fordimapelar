<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'search' => 'nullable|string|max:100',
            'category' => 'nullable|integer|exists:news_categories,id'
        ]);

        $query = News::with('newsCategory')
            ->orderBy('created_at', 'desc');

        // search
        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        // filter
        if ($request->filled('category')) {
            $query->where('news_category_id', $request->category);
        }

        $news = $query->paginate(22)->withQueryString();

        // ambil kategori untuk filter
        $categories = NewsCategory::orderBy('title')->get();

        return view('user.berita', compact('news', 'categories'));
    }

    public function show($slug)
    {
        // ambil data news berdasarkan slug
        $news = News::where('slug', $slug)->firstOrFail();
        $newests = News::orderBy('created_at', 'desc')->take(3)->get();

        // lempar data ke view
        return view('user.shownews', compact('news', 'newests'));
    }
}
