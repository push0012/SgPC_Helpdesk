<?php

namespace App\Http\Controllers;

use App\Services\NewData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\StudentRegister;
use App\College;
use App\Student;
use App\StudentEducationDegree;
use App\StudentProfessional;
use App\StudentLanguage;
use App\StudentConfirmDegree;
use DB;
use App\LastRegNo;


class GraduationController extends Controller
{
    public function index()
    {
        $universities = College::all();
        return view('insert_form.graduate')->with('colleges',$universities);
    }
    public function store(Request $requests)
    {
        DB::beginTransaction();
  
        try 
        {
                $student = Student::create($requests->all());
                $requests->request->add(['stu_id' => $student->stu_id]);

                $graduateNewData = new NewData();
                $request = $graduateNewData->GraduateNewData($requests);

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
        $date = $student->created_at->format('Y-m-d');
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
        $degreeholders = DB::table('degreestudentlist')->where('stu_id', $id)->first();
        $last_degree = LastRegNo::select('last_degree')->first();
        $refs = $degreeholders->stu_id."".$degreeholders->clg_id."".$degreeholders->cos_id."".$degreeholders->spc_id;
        return view('admin.pending.degree_holder', compact(['degreeholders','last_degree', 'refs']));
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

        
        $con = LastRegNo::where('last_reg_id',1)->update(array('last_degree'=> $request->degree_reg_no));

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
