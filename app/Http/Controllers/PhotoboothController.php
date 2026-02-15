<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhotoboothFrame;
class PhotoboothController extends Controller
{
    public function index()
    {
       $frames = PhotoboothFrame::all();
       return view('layout.photobooth', compact('frames'));
    }
}
