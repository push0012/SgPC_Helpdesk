<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\College;
use App\CollegeCourse;
use App\Course;
use App\DegreeSpecial;

class AdminController extends Controller
{
    public function OpenDashboard()
    {
        $diploma = DB::table('diplomastudentlist')->count();
        $degree = DB::table('degreestudentlist')->count();
        $college = College::count();
        $program = CollegeCourse::count();
        $speciality = DegreeSpecial::count();
        $course = Course::count();
        return view('admin.admin_dashboard', 
        compact(['diploma', 'degree','college','course','program','speciality']));
    }
}
