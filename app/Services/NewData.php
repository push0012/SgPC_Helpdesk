<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\College;
use App\CollegeCourse;
use App\Course;
use App\DegreeSpecial;

class NewData {

    public function GraduateNewData(Request $request){

        if(($request->clg_id == 0) /*&& ($request->cos_id == 0) && ($request->spc_id == 0)*/)
        {
            $newCollege = $this->addNewCollege($request);
            /*$newCourse = $this->addNewCourse($request);
            $newSpecial = $this->addNewSpeciality($request);*/
            /*CollegeCourse::create([
                'clg_id'=>$newCollege->clg_id,
                'cos_id'=>$newCourse->cos_id,
                'spc_id'=>$newSpecial->spc_id,
                ]);*/
            $request->merge([
                'clg_id' => $newCollege->clg_id,
               /* 'cos_id' => $newCourse->cos_id,
                'spc_id'=>$newSpecial->spc_id,*/
                ]);
        }
        /*elseif(($request->clg_id == 0) && ($request->cos_id == 0))
        {
            $newCollege = $this->addNewCollege($request);
            $newCourse = $this->addNewCourse($request);
            CollegeCourse::create([
                'clg_id'=>$newCollege->clg_id,
                'cos_id'=>$newCourse->cos_id,
                'spc_id'=>$request->spc_id,
                ]);
            $request->merge([
                'clg_id' => $newCollege->clg_id,
                'cos_id' => $newCourse->cos_id,
                ]);
        }
        elseif(($request->clg_id == 0) && ($request->spc_id == 0))
        {
            $newCollege = $this->addNewCollege($request);
            $newSpecial = $this->addNewSpeciality($request);
            CollegeCourse::create([
                'clg_id'=>$newCollege->clg_id,
                'cos_id'=>$request->cos_id,
                'spc_id'=>$newSpecial->spc_id,
                ]);
            $request->merge([
                'clg_id' => $newCollege->clg_id,
                'spc_id' => $newCourse->cos_id,
                ]);
        }
        elseif(($request->cos_id == 0) && ($request->spc_id == 0))
        {
            $newCourse = $this->addNewCourse($request);
            $newSpecial = $this->addNewSpeciality($request);
            CollegeCourse::create([
                'clg_id'=>$request->clg_id,
                'cos_id'=>$newCourse->cos_id,
                'spc_id'=>$newSpecial->spc_id,
                ]);
            $request->merge([
                'cos_id' => $newCourse->cos_id,
                'spc_id'=>$newSpecial->spc_id,]);
        }
        elseif($request->clg_id == 0)
        {
            $newCollege = $this->addNewCollege($request);
            CollegeCourse::create([
                'clg_id'=>$newCollege->clg_id,
                'cos_id'=>$request->cos_id,
                'spc_id'=>$request->spc_id,
                ]);
            $request->merge(['clg_id' => $newCollege->clg_id]);
        }
        elseif($request->cos_id == 0)
        {
            $newCourse = $this->addNewCourse($request);
            CollegeCourse::create([
                'clg_id'=>$request->clg_id,
                'cos_id'=>$newCourse->cos_id,
                'spc_id'=>$request->spc_id,
                ]);
            $request->merge(['cos_id' => $newCourse->cos_id]);
        }
        elseif($request->spc_id == 0)
        {
            $newSpecial = $this->addNewSpeciality($request);
            CollegeCourse::create([
                'clg_id'=>$request->clg_id,
                'cos_id'=>$request->cos_id,
                'spc_id'=>$newSpecial->spc_id,
                ]);
            $request->merge(['spc_id'=>$newSpecial->spc_id,]);
        }*/
        return $request;
    }

    public function addNewCollege(Request $request)
    {
        $getspec = College::where('clg_name','like','%'.$request->new_clg.'%')->count();
        if($getspec == 0){
            $college = College::create([
                'clg_name' => $request->new_clg,
            ]);
        }else{
            $college = College::where('clg_name','like','%'.$request->new_clg.'%')->first();
        }
        return $college;
    }
    /*public function addNewCourse(Request $request)
    {
        $getspec = Course::where('cos_title','like','%'.$request->new_cos.'%')->count();
        if($getspec == 0){
            $course = Course::create([
                'cos_title' => $request->new_cos,
                'cos_type' =>'Degree'
            ]);
        }else{
            $course = Course::where('cos_title','like','%'.$request->new_cos.'%')->first();
        }
        return $course;
    }
    public function addNewSpeciality(Request $request)
    {
        $getspec = DegreeSpecial::where('spc_name','like','%'.$request->speciality_in_word.'%')->count();
        if($getspec == 0){
            $special = DegreeSpecial::create([
                'spc_name' => $request->speciality_in_word,
            ]);
        }else{
            $special = DegreeSpecial::where('spc_name','like','%'.$request->speciality_in_word.'%')->first();
        }
        return $special;
    }*/

    public function DiplomaNewData(Request $request){

        if(($request->clg_id == 0) /*&& ($request->cos_id == 0)*/)
        {
            $newCollege = $this->addNewCollege($request);
            /*$newCourse = $this->addNewCourseDiploma($request);
            CollegeCourse::create([
                'clg_id'=>$newCollege->clg_id,
                'cos_id'=>$newCourse->cos_id,
                'spc_id'=>2,
                ]);*/
            $request->merge([
                'clg_id' => $newCollege->clg_id,
                /*'cos_id' => $newCourse->cos_id,*/
                ]);
        }
       /* elseif($request->clg_id == 0)
        {
            $newCollege = $this->addNewCollege($request);
            CollegeCourse::create([
                'clg_id'=>$newCollege->clg_id,
                'cos_id'=>$request->cos_id,
                'spc_id'=>2,
                ]);
            $request->merge(['clg_id' => $newCollege->clg_id]);
        }
        elseif($request->cos_id == 0)
        {
            $newCourse = $this->addNewCourseDiploma($request);
            CollegeCourse::create([
                'clg_id'=>$request->clg_id,
                'cos_id'=>$newCourse->cos_id,
                'spc_id'=>2,
                ]);
            $request->merge(['cos_id' => $newCourse->cos_id]);
        }*/

        return $request;
    }

    /*public function addNewCourseDiploma(Request $request)
    {
        $getspec = Course::where('cos_title','like','%'.$request->new_cos.'%')->count();
        if($getspec == 0){
            $course = Course::create([
                'cos_title' => $request->new_cos,
                'cos_type' =>'Diploma'
            ]);
        }else{
            $course = Course::where('cos_title','like','%'.$request->new_cos.'%')->first();
        }
        return $course;
    }*/

}