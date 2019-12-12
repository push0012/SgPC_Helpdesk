<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DsDivision;
use App\College;
use App\Student;
use App\StudentEducationDegree;
use App\StudentProfessional;
use App\StudentLanguage;
use DB;


class GraduationController extends Controller
{
    public function index()
    {
        $universities = College::where('clg_type','university')->get();
        return view('insert_form.graduate')->with('colleges',$universities);
    }
    public function store(Request $request)
    {
        $student = Student::create($request->all());
        $request->request->add(['stu_id' => $student->stu_id]);
        $students = StudentEducationDegree::create($request->all());
        $studentss = StudentProfessional::create($request->all());

        $languages = $request->language;

        foreach ($languages as $language){ 
            StudentLanguage::create([
                'language_name' => $language['language_name'],
                'write_skill' => $language['write_skill'],
                'read_skill' => $language['read_skill'],
                'speech_skill' => $language['speech_skill'],
                'stu_id' => $student->stu_id
                ]);
        }

        return response()->json($studentss, 201);
    }

    public function pending()
    {
        $degree_list = DB::table('degreestudentlist')->get();
        return view('admin.pending.degree_list')->with('degree_lists',$degree_list);
    }
}
