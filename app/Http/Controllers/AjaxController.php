<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\DegreeSpecial;
use DB;


class AjaxController extends Controller
{
    public function get_all_courses($id)
    {
        $cozbycollege = DB::table('collegecourseview')
        ->where('clg_id', $id)
        ->get();
        return response()->json($cozbycollege, 201);
    }

    public function get_degree_courses($id)
    {
        $cozbycollege = DB::table('collegecourseview')
        ->where('clg_id', $id)
        ->where('cos_type','Degree')->get();
        return response()->json($cozbycollege, 201);
    }
    public function get_diploma_courses($id)
    {
        $cozbycollege = DB::table('collegecourseview')
        ->where('clg_id', $id)
        ->where('cos_type','Diploma')->get();
        return response()->json($cozbycollege, 201);
    }

    public function all_specialities()
    {
        $speciality = DegreeSpecial::all();
        return response()->json($speciality, 201);
    }

    public function speciality_by(Request $request)
    {
        $cozbycollege = DB::table('collegecoursespecialview')
            ->where('clg_id', $request['clg_id'])
            ->where('cos_id', $request['cos_id'])->get();

        return response()->json($cozbycollege, 201);
    }
}
