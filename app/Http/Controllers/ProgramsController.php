<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class ProgramsController extends Controller
{
    public function index()
    {
        $departments = Department::with('departmentProgram')->get();
        return view('user.program-kerja', compact('departments'));
    }
}
