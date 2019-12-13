<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\College;
use App\Student;
use App\Course;
use App\CollegeCourse;
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

        if($request->cos_id == 0)
        {
            $newCourse = Course::create(['cos_title'=> $request->speciality_in_word,'cos_type' =>'Diploma']);
            CollegeCourse::create(['clg_id'=>$request->clg_id,'cos_id'=>$newCourse->cos_id,'spc_id'=>2]);
            $request->merge(['cos_id' => $newCourse->cos_id]);

        }

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
