<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
       $galleries = Gallery::latest()->paginate(20);
        return view('user.galeri', compact('galleries'));
    }
}
