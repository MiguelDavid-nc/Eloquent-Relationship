<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $request)
    {
        $user = User::with('profile')->find($request->id);

        return view('users.show', ['user' => $user]);
    }

    public function courses(Request $request)
    {
        $user = User::with('courses')->find($request->id);
        return view('users.courses', ['user' => $user]);
    }
}