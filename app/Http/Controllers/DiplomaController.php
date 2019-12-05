<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\College;
use App\Student;
use App\StudentEducationDiploma;
use App\StudentProfessional;
use App\StudentLanguage;

class DiplomaController extends Controller
{
    public function index()
    {
        $colleges = College::all();
        return view('insert_form.diploma')->with('colleges',$colleges);
    }

    public function store(Request $request)
    {
        $student = Student::create($request->all());
        $request->request->add(['stu_id' => $student->stu_id]);
        $students = StudentEducationDiploma::create($request->all());
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
}
