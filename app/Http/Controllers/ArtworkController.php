<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artwork;
use App\Models\ArtworkCategory;

class ArtworkController extends Controller
{
    public function index(Request $request)
    {
        $query = Artwork::with('artworkCategory')
            ->orderBy('created_at', 'desc');
        
        // search
        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        // filter
        if ($request->filled('category')) {
            $query->where('artwork_category_id', $request->category);
        }

        $artworks = $query->paginate(21)->withQueryString();
        $categories = ArtworkCategory::orderBy('title')->get();

        return view('user.karya', compact('artworks', 'categories'));

    }

    public function show($slug)
    {
        // ambil data artwork berdasarkan slug
        $artwork = Artwork::where('slug', $slug)->firstOrFail();

        // lempar data ke view
        return view('user.showartwork', compact('artwork'));
    }
}
