<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class LandingController extends Controller
{
    public function index()
    {
        $banners = Banner::orderBy('created_at', 'desc')->get()->take(3);
        return view('user.index', compact('banners'));
    }
}
