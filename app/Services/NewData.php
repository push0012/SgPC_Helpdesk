<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\College;
use App\CollegeCourse;
use App\Course;
use App\DegreeSpecial;

class NewData {

    public function GraduateNewData(Request $request){

        if(($request->clg_id == 0) && ($request->cos_id == 0) && ($request->spc_id == 0))
        {
            $newCollege = College::create(['clg_name'=> $request->new_clg]);
            $newCourse = Course::create(['cos_title'=> $request->new_cos,'cos_type' =>'Degree']);
            $newSpecial = DegreeSpecial::create(['spc_name'=>$request->speciality_in_word]);
            CollegeCourse::create([
                'clg_id'=>$newCollege->clg_id,
                'cos_id'=>$newCourse->cos_id,
                'spc_id'=>$newSpecial->spc_id,
                ]);
            $request->merge([
                'clg_id' => $newCollege->clg_id,
                'cos_id' => $newCourse->cos_id,
                'spc_id'=>$newSpecial->spc_id,
                ]);
        }
        elseif(($request->clg_id == 0) && ($request->cos_id == 0))
        {
            $newCollege = College::create(['clg_name'=> $request->new_clg]);
            $newCourse = Course::create(['cos_title'=> $request->new_cos,'cos_type' =>'Degree']);
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
            $newCollege = College::create(['clg_name'=> $request->new_clg]);
            $newSpecial = DegreeSpecial::create(['spc_name'=>$request->speciality_in_word]);
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
            $newCourse = Course::create(['cos_title'=> $request->new_cos,'cos_type' =>'Degree']);
            $newSpecial = DegreeSpecial::create(['spc_name'=>$request->speciality_in_word]);
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
            $newCollege = College::create(['clg_name'=> $request->new_clg]);
            CollegeCourse::create([
                'clg_id'=>$newCollege->clg_id,
                'cos_id'=>$request->cos_id,
                'spc_id'=>$request->spc_id,
                ]);
            $request->merge(['clg_id' => $newCollege->clg_id]);
        }
        elseif($request->cos_id == 0)
        {
            $newCourse = Course::create(['cos_title'=> $request->new_cos,'cos_type' =>'Degree']);
            CollegeCourse::create([
                'clg_id'=>$request->clg_id,
                'cos_id'=>$newCourse->cos_id,
                'spc_id'=>$request->spc_id,
                ]);
            $request->merge(['cos_id' => $newCourse->cos_id]);
        }
        elseif($request->spc_id == 0)
        {
            $newSpecial = DegreeSpecial::create(['spc_name'=>$request->speciality_in_word]);
            CollegeCourse::create([
                'clg_id'=>$request->clg_id,
                'cos_id'=>$request->cos_id,
                'spc_id'=>$newSpecial->spc_id,
                ]);
            $request->merge(['spc_id'=>$newSpecial->spc_id,]);
        }
        return $request;
    }

    public function DiplomaNewData(Request $request){

        if(($request->clg_id == 0) && ($request->cos_id == 0))
        {
            $newCollege = College::create(['clg_name'=> $request->new_clg]);
            $newCourse = Course::create(['cos_title'=> $request->speciality_in_word,'cos_type' =>'Diploma']);
            CollegeCourse::create([
                'clg_id'=>$newCollege->clg_id,
                'cos_id'=>$newCourse->cos_id,
                'spc_id'=>2,
                ]);
            $request->merge([
                'clg_id' => $newCollege->clg_id,
                'cos_id' => $newCourse->cos_id,
                ]);
        }
        elseif($request->clg_id == 0)
        {
            $newCollege = College::create(['clg_name'=> $request->new_clg]);
            CollegeCourse::create([
                'clg_id'=>$newCollege->clg_id,
                'cos_id'=>$request->cos_id,
                'spc_id'=>2,
                ]);
            $request->merge(['clg_id' => $newCollege->clg_id]);
        }
        elseif($request->cos_id == 0)
        {
            $newCourse = Course::create(['cos_title'=> $request->speciality_in_word,'cos_type' =>'Diploma']);
            CollegeCourse::create([
                'clg_id'=>$request->clg_id,
                'cos_id'=>$newCourse->cos_id,
                'spc_id'=>2,
                ]);
            $request->merge(['cos_id' => $newCourse->cos_id]);
        }

        return $request;
    }

}