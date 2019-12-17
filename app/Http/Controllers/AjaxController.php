<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class AjaxController extends Controller
{
    public function Get_Degree_Courses()
    {
        $course = Course::where('cos_type','Degree')->get();
        return response()->json($course, 201);
    }
}
