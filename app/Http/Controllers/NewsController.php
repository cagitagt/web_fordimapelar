<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
      $news = News::orderBy('created_at', 'desc')->get();

      return view('user.berita', compact('news'));
    }

    public function show($slug)
    {
        // ambil data news berdasarkan slug
        $news = News::where('slug', $slug)->firstOrFail();
        $newests = News::orderBy('created_at', 'desc')->get()->take(3);

        // lempar data ke view
        return view('user.shownews', compact('news', 'newests'));
    }
}
