<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function users($id)
    {
        $courses = Course::with('users')->get();
        return view('courses.users', ['courses' => $courses]);
    }
    
}