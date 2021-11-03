<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function overview()
    {
        return view('app.settings.overview');
    }

    public function email(Request $request)
    {
        if($request->isMethod('post')) {

        }

        return view('app.settings.email');
    }

    public function password(Request $request)
    {
        if($request->isMethod('post')) {

        }

        return view('app.settings.password');
    }
}
