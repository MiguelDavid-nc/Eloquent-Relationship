<?php

namespace App\Http\Controllers;

use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::with('user')->get(); 
        return view('profiles.index', compact('profiles'));
    }

    public function show($id)
    {
        $profiles = Profile::with('user')->get();

        return view('profile.index', ['profiles' => $profiles]);
    }
}