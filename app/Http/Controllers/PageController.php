<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Project;

class PageController extends Controller
{
    public function home()
    {
        $profile = Profile::first();
        return view('home', compact('profile'));
    }

    public function portfolio()
    {
        $projects = Project::all();
        return view('portfolio', compact('projects'));
    }

    public function gallery()
    {
        $images = \File::files(public_path('galeri')); // Ambil gambar dari folder public/galeri
        return view('gallery', compact('images'));
    }
}
