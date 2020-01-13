<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\College;
use App\CollegeCourse;
use App\Course;
use App\DegreeSpecial;
use App\Student;

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

        //report section
        $student_g = DB::table('degreestudentreport')->count();
        $student_d = DB::table('diplomastudentreport')->count();

        return view('admin.admin_dashboard', 
        compact(['diploma', 'degree','college','course','program','speciality','student_g','student_d']));
    }
}
