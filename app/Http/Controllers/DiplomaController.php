<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\NewData;
use Illuminate\Support\Facades\Mail;
use App\Mail\StudentRegisterDiploma;
use App\College;
use App\Student;
use App\StudentEducationDiploma;
use App\StudentProfessional;
use App\StudentLanguage;
use DB;
use Auth;
use App\ImageSave;
use App\StudentConfirmDiploma;
use App\LastRegNo;
use App\Traits\UploadTrait;

class DiplomaController extends Controller
{
    use UploadTrait;
    public function index()
    {
        $colleges = College::all();
        return view('insert_form.diploma')->with('colleges',$colleges);
    }

    public function store(Request $requests)
    {
        DB::beginTransaction();
  
        try 
        {
            $student = Student::create($requests->all());
            $requests->request->add(['stu_id' => $student->stu_id]);
    
            $diplomaNewData = new NewData();
            $request = $diplomaNewData->DiplomaNewData($requests);

            $students = StudentEducationDiploma::create($request->all());
            $studentss = StudentProfessional::create($request->all());

                $languages = $requests->language;
                //return response()->json($language, 200);
                foreach (json_decode($languages) as $language){ 
                    StudentLanguage::create([
                        'language_name' => $language->language_name,
                        'write_skill' => $language->write_skill,
                        'read_skill' => $language->read_skill,
                        'speech_skill' => $language->speech_skill,
                        'stu_id' => $student->stu_id
                        ]);
                }

                $data=array();
                $image_upload = new ImageSave(); 
                $image_upload->stu_id = $request->stu_id;
                $image_upload->clg_id = $request->clg_id;
                $image_upload->cos_id = $request->cos_id;
                $image_upload->spc_id = 2;

                // Check if a profile image has been uploaded
                //echo  $request->file('certificate_image');

                if ($request->hasFile('certificate_image')) {

                    // Get image file
                    foreach($request->file('certificate_image') as $image)
                    {
                    //return view('errors.404');
                    // Make a image name based on user name and current timestamp
                    $name = Str::slug($request->stu_id).'_'.time().'_'. $image->getClientOriginalName();
                    // Define folder path
                    $folder = '/uploads/Diploma/'.$request->stu_id;
                    // Make a file path where image will be stored [ folder path + file name + file extension]
                    $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
                    // Upload image
                    $this->uploadOne($image, $folder, 'public', $name);
                    // Set user profile image path in database to filePath
                    $data[] = $filePath;
                    
                    }
                }
                $image_upload->img_url = json_encode($data);
                $image_upload->save();

        $refs = $student->stu_id."".$request->clg_id."".$request->cos_id;
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
        $diploma_list = DB::table('diplomastudentlist')->get();
        return view('admin.pending.diploma_list')->with('diploma_lists',$diploma_list);
    }

    public function detail_pending($id)
    {
        $diplomaholder = DB::table('diplomastudentlist')->where('stu_id', $id)->first();
        $last_diploma = LastRegNo::select('last_diploma')->first();
        $imagesave = ImageSave::select('img_url')
                                ->where('stu_id', $diplomaholder->stu_id)
                                ->where('clg_id',$diplomaholder->clg_id)
                                ->where('cos_id',$diplomaholder->cos_id)
                                ->first();
        $refs = $diplomaholder->stu_id."".$diplomaholder->clg_id."".$diplomaholder->cos_id;
        return view('admin.pending.diploma_holder', compact(['diplomaholder','last_diploma', 'refs','imagesave']));
    }

    public function approving(Request $request)
    {
        DB::beginTransaction();
        try 
        {
        $diplomaholder = DB::table('diplomastudentlist')->where('stu_id', $request->stu_id)->first();

        $request->request->add(['user_data' => Auth::user()->email]); 

        $confirm = StudentConfirmDiploma::create($request->all());

        $go = Student::where('stu_id', $request->stu_id)->update(array('stu_confirm_data' => '1'));
        $gos = StudentEducationDiploma::where('stu_id', $request->stu_id)
                                        ->where('clg_id', $request->clg_id)
                                        ->where('cos_id', $request->cos_id)
                                        ->update(array('sep_confirm_data' => '1'));
        $go = StudentProfessional::where('stu_id', $request->stu_id)->update(array('sp_confirm_data' => '1'));
        $goss = StudentLanguage::where('stu_id', $request->stu_id)->update(array('sl_confirm_data' => '1'));

        $con = LastRegNo::where('last_reg_id',1)->update(array('last_diploma'=> $request->diploma_reg_no));

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
