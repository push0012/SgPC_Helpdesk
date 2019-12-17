<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CollegeCourse;
use App\College;
use App\DegreeSpecial;
use App\Course;
use DB;

class CollegeCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colleges = College::all();
        $courses = Course::all();
        return view('admin.insert_course', compact(['colleges', 'courses']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $specialities = $request->speciality;

        DB::beginTransaction();
        try 
        {

        foreach($specialities as $speciality){ 
            $special = DegreeSpecial::create([
                'spc_name' => $speciality['spc_name'],
            ]);

            $request->request->add([
                'spc_id' => $special->spc_id,
                'cos_duration' => $speciality['cos_duration']
                ]);
                
            CollegeCourse::create($request->all());
        }
        DB::commit();
        return response()->json("data Saved Successfully", 201);
        } catch (\Exception $e) {

        // Rollback Transaction
        DB::rollback();
        return response()->json($e, 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
