<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\StudentRegisterDiploma;
use App\College;
use App\Student;
use App\Course;
use App\CollegeCourse;
use App\StudentEducationDiploma;
use App\StudentProfessional;
use App\StudentLanguage;
use DB;
use App\StudentConfirmDiploma;

class DiplomaController extends Controller
{
    public function index()
    {
        $colleges = College::all();
        return view('insert_form.diploma')->with('colleges',$colleges);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
  
        try 
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
        DB::commit();
        return response()->json("Data Saving Completed", 201);
        } catch (\Exception $e) {

        // Rollback Transaction
        DB::rollback();
        return response()->json($e, 500);
        }
        //return response()->json($studentss, 201);
    }

    public function pending()
    {
        $diploma_list = DB::table('diplomastudentlist')->get();
        return view('admin.pending.diploma_list')->with('diploma_lists',$diploma_list);
    }

    public function detail_pending($id)
    {
        $diplomaholder = DB::table('diplomastudentlist')->where('stu_id', $id)->first();
        return view('admin.pending.diploma_holder')->with('diplomaholder',$diplomaholder);
    }

    public function approving(Request $request)
    {
        DB::beginTransaction();
        try 
        {
        $diplomaholder = DB::table('diplomastudentlist')->where('stu_id', $request->stu_id)->first();
        $confirm = StudentConfirmDiploma::create($request->all());

        $go = Student::where('stu_id', $request->stu_id)->update(array('stu_confirm_data' => '1'));
        $gos = StudentEducationDiploma::where('stu_id', $request->stu_id)
                                        ->where('clg_id', $request->clg_id)
                                        ->where('cos_id', $request->cos_id)
                                        ->update(array('sep_confirm_data' => '1'));
        $go = StudentProfessional::where('stu_id', $request->stu_id)->update(array('sp_confirm_data' => '1'));
        $goss = StudentLanguage::where('stu_id', $request->stu_id)->update(array('sl_confirm_data' => '1'));

        $result = collect([
            'email'=> $request->stu_email,
            'mobile'=>$request->stu_mobile,
            'reg_no'=>$request->diploma_reg_no,
            'reg_date'=>$request->reg_date,
            'clg_name'=>$diplomaholder->clg_name,
            'cos_title'=>$diplomaholder->cos_title,
        ]);

        Mail::send(new StudentRegisterDiploma($result));


        DB::commit();
        return response()->json("Data Saving Completed", 201);
        } catch (\Exception $e) {

        // Rollback Transaction
        DB::rollback();
        return response()->json($e, 500);
        }
        //return response()->json($goss, 201);
    }

    public function rejecting(Request $request)
    {
        DB::beginTransaction();
        try 
        {

        $go = Student::where('stu_id', $request->stu_id)->update(array('stu_confirm_data' => '2'));
        $gos = StudentEducationDiploma::where('stu_id', $request->stu_id)
                                        ->where('clg_id', $request->clg_id)
                                        ->where('cos_id', $request->cos_id)
                                        ->update(array('sep_confirm_data' => '2'));
        $go = StudentProfessional::where('stu_id', $request->stu_id)->update(array('sp_confirm_data' => '2'));
        $goss = StudentLanguage::where('stu_id', $request->stu_id)->update(array('sl_confirm_data' => '2'));
        
        DB::commit();
        return response()->json("Data Saving Completed", 201);
        } catch (\Exception $e) {

        // Rollback Transaction
        DB::rollback();
        return response()->json($e, 500);
        }
    }
}
