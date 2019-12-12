<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DsDivision;
use App\College;
use App\Student;
use App\StudentEducationDegree;
use App\StudentProfessional;
use App\StudentLanguage;
use App\StudentConfirmDegree;
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

    public function detail_pending($id)
    {
        $degreeholder = DB::table('degreestudentlist')->where('stu_id', $id)->first();
        return view('admin.pending.degree_holder')->with('degreeholders',$degreeholder);
    }

    public function approving(Request $request)
    {
        $confirm = StudentConfirmDegree::create($request->all());

        $go = Student::where('stu_id', $request->stu_id)->update(array('stu_confirm_data' => '1'));
        $gos = StudentEducationDegree::where('stu_id', $request->stu_id)
                                        ->where('clg_id', $request->clg_id)
                                        ->where('cos_id', $request->cos_id)
                                        ->where('spc_id', $request->spc_id)
                                        ->update(array('srg_confirm_data' => '1'));
        $go = StudentProfessional::where('stu_id', $request->stu_id)->update(array('sp_confirm_data' => '1'));
        $goss = StudentLanguage::where('stu_id', $request->stu_id)->update(array('sl_confirm_data' => '1'));
        return response()->json($goss, 201);
    }

    public function rejecting(Request $request)
    {
        
        $go = Student::where('stu_id', $request->stu_id)->update(array('stu_confirm_data' => '2'));
        $gos = StudentEducationDegree::where('stu_id', $request->stu_id)
                                        ->where('clg_id', $request->clg_id)
                                        ->where('cos_id', $request->cos_id)
                                        ->where('spc_id', $request->spc_id)
                                        ->update(array('srg_confirm_data' => '1'));
        $go = StudentProfessional::where('stu_id', $request->stu_id)->update(array('sp_confirm_data' => '2'));
        $goss = StudentLanguage::where('stu_id', $request->stu_id)->update(array('sl_confirm_data' => '2'));
        return response()->json($goss, 201);
    }
}
