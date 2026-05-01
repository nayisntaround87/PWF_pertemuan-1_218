<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about');
    }

    // 🔥 TAMBAHAN
    public function edit()
    {
        return view('edit-about');
    }
}