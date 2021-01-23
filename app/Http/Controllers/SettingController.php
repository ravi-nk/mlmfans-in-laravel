<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\setting;

class SettingController extends Controller
{
    public function settinglist() {
        $sitesetting = setting::all();
            return view('layouts.site_app',compact('sitesetting'));
    }
}
