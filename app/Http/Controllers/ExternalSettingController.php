<?php

namespace App\Http\Controllers;

use App\Models\ExternalSetting;
use Illuminate\Http\Request;


class ExternalSettingController extends Controller
{
    //
    public function index()
    {
        $external_setting = ExternalSetting::firstOrFail();
        return view('user.layanan', compact('external_setting'));
    }
}
