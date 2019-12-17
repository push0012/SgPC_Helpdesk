<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\College;
use DB;
class CollegeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colleges = College::all();
        return view('admin.college.college_list', compact(['colleges']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.college.insert_college');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
  
        try 
        {
            
        $college = College::create($request->all());
        
        // Commit Transaction
        DB::commit();
        return response()->json($college, 201);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $college = College::where('clg_id',$id)->first();
        return view('admin.college.edit_college', compact(['college']));
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

        $updated = College::where('clg_id', $id)->update($request->all());
        
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
