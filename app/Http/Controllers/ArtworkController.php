<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artwork;

class ArtworkController extends Controller
{
    public function index()
    {
        $artworks = Artwork::all();
        return view('user.karya', compact('artworks'));
    }

    public function show($slug)
    {
        // ambil data artwork berdasarkan slug
        $artwork = Artwork::where('slug', $slug)->firstOrFail();

        // lempar data ke view
        return view('user.showartwork', compact('artwork'));
    }
}
