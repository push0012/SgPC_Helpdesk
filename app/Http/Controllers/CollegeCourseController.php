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
        return view('admin.programs.program_list', compact(['colleges']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colleges = College::all();
        $courses = Course::all();
        return view('admin.programs.insert_program', compact(['colleges', 'courses']));
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
            
            $getspec = DegreeSpecial::where('spc_name','like','%'.$speciality['spc_name'].'%')->count();
            if($getspec == 0){
                $special = DegreeSpecial::create([
                    'spc_name' => $speciality['spc_name'],
                ]);
            }else{
                $special = DegreeSpecial::where('spc_name','like','%'.$speciality['spc_name'].'%')->first();
            }

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
    public function edit($spc_id,$cos_id,$clg_id)
    {
        $program = DB::table('collegecoursespecialview')
            ->where('clg_id', $clg_id)
            ->where('cos_id', $cos_id)
            ->where('spc_id',$spc_id)
            ->first();
        return view('admin.programs.edit_program', compact(['program']));
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
        DB::beginTransaction();
  
        try 
        {

        $updated = CollegeCourse::where('spc_id', $id)
        ->where('clg_id', $request->clg_id)
        ->where('cos_id',$request->cos_id)
        ->update($request->all());
        
        // Commit Transaction
        DB::commit();
        return response()->json($updated, 201);
        } catch (\Exception $e) {

        // Rollback Transaction
        DB::rollback();
        return response()->json($e, 500);
        }
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
