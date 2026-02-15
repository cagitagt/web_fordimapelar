<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutCabinet;
use App\Models\Department;

class AboutCabinetController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        $aboutcabinet = AboutCabinet::firstOrFail();
        return view('user.tentang', compact('aboutcabinet', 'departments'));
    }
}
