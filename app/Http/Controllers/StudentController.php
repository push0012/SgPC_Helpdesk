<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_degree()
    {
        //$students = Student::where('stu_confirm_data',1)->get();
        $students = DB::table('degreestudentreport')->get();
        return view('admin.student.apg_student_list', compact(['students']));
    }
    public function index_diploma()
    {
        $students = DB::table('diplomastudentreport')->get();
        return view('admin.student.apd_student_list', compact(['students']));
    }
    public function detail_degree($id)
    {
        //$students = Student::where('stu_confirm_data',1)->get();
        $students = DB::table('degreestudentreport')->where('stu_id',$id)->first();
        return view('admin.student.apg_student_detail', compact(['students']));
    }
    public function detail_diploma($id)
    {
        //$students = Student::where('stu_confirm_data',1)->get();
        $students = DB::table('diplomastudentreport')->where('stu_id',$id)->first();
        return view('admin.student.apd_student_detail', compact(['students']));
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
        $student = Student::create($request->all());

        return response()->json($student, 201);
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
