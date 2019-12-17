<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\StudentRegister;
use App\College;
use App\Student;
use App\StudentEducationDegree;
use App\StudentProfessional;
use App\StudentLanguage;
use App\StudentConfirmDegree;
use App\CollegeCourse;
use App\Course;
use App\DegreeSpecial;
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
        DB::beginTransaction();
  
        try 
        {
                $student = Student::create($request->all());
                $request->request->add(['stu_id' => $student->stu_id]);
                
                if(($request->cos_id == 0) && ($request->spc_id == 0))
                {
                    $newCourse = Course::create(['cos_title'=> $request->new_cos,'cos_type' =>'Degree']);
                    $newSpecial = DegreeSpecial::create(['spc_name'=>$request->speciality_in_word]);
                    CollegeCourse::create(['clg_id'=>$request->clg_id,'cos_id'=>$newCourse->cos_id,'spc_id'=>$newSpecial->spc_id,]);
                    $request->merge(['cos_id' => $newCourse->cos_id,'spc_id'=>$newSpecial->spc_id,]);
                }
                elseif($request->cos_id == 0)
                {
                    $newCourse = Course::create(['cos_title'=> $request->new_cos,'cos_type' =>'Degree']);
                    CollegeCourse::create(['clg_id'=>$request->clg_id,'cos_id'=>$newCourse->cos_id,'spc_id'=>$request->spc_id,]);
                    $request->merge(['cos_id' => $newCourse->cos_id]);

                }elseif($request->spc_id == 0)
                {
                    $newSpecial = DegreeSpecial::create(['spc_name'=>$request->speciality_in_word]);
                    CollegeCourse::create(['clg_id'=>$request->clg_id,'cos_id'=>$request->cos_id,'spc_id'=>$newSpecial->spc_id,]);
                    $request->merge(['spc_id'=>$newSpecial->spc_id,]);
                }
                

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
        $refs = $student->stu_id."".$request->clg_id."".$request->cos_id."".$request->spc_id;
        $date = $student->created_at;
        DB::commit();
        return response()->json(['ref'=>$refs,'date'=>$date], 201);
        } catch (\Exception $e) {

        // Rollback Transaction
        DB::rollback();
        return response()->json($e, 500);
        }
        //return response()->json($studentss, 201);
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
        DB::beginTransaction();
  
        try 
        {
        $degreeholder = DB::table('degreestudentlist')->where('stu_id', $request->stu_id)->first();    
        $confirm = StudentConfirmDegree::create($request->all());

        $go = Student::where('stu_id', $request->stu_id)->update(array('stu_confirm_data' => '1'));
        $gos = StudentEducationDegree::where('stu_id', $request->stu_id)
                                        ->where('clg_id', $request->clg_id)
                                        ->where('cos_id', $request->cos_id)
                                        ->where('spc_id', $request->spc_id)
                                        ->update(array('srg_confirm_data' => '1'));
        $go = StudentProfessional::where('stu_id', $request->stu_id)->update(array('sp_confirm_data' => '1'));
        $goss = StudentLanguage::where('stu_id', $request->stu_id)->update(array('sl_confirm_data' => '1'));

        

        $result = collect([
                'email'=> $request->stu_email,
                'mobile'=>$request->stu_mobile,
                'reg_no'=>$request->degree_reg_no,
                'reg_date'=>$request->reg_date,
                'clg_name'=>$degreeholder->clg_name,
                'cos_title'=>$degreeholder->cos_title,
                'spc_name'=>$degreeholder->spc_name,
        ]);

        Mail::send(new StudentRegister($result));

        DB::commit();
        return response()->json("Data Saved Successfully", 201);
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
        $gos = StudentEducationDegree::where('stu_id', $request->stu_id)
                                        ->where('clg_id', $request->clg_id)
                                        ->where('cos_id', $request->cos_id)
                                        ->where('spc_id', $request->spc_id)
                                        ->update(array('srg_confirm_data' => '2'));
        $go = StudentProfessional::where('stu_id', $request->stu_id)->update(array('sp_confirm_data' => '2'));
        $goss = StudentLanguage::where('stu_id', $request->stu_id)->update(array('sl_confirm_data' => '2'));
        DB::commit();
        return response()->json("data Saved Successfully", 201);
        } catch (\Exception $e) {

        // Rollback Transaction
        DB::rollback();
        return response()->json($e, 500);
        }
        //return response()->json($goss, 201);
    }
}
