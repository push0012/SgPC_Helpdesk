@extends('layouts.app')
@section('pageTitle', 'සැකසුම් - පාඨමාලා විස්තර වෙනස් කිරීම')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div style="font-size:1.5em;">{{ __('පාඨමාලා විස්තර වෙනස් කිරීම') }}</div>
            <form name="frmCollegeStore" id="registration-form" style="font-size:0.8em !important;">
                <div class="container-fluid">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="clg_name">University or Institute</label>
                            <div>
                                <input type="hidden" name="clg_id" id="clg_id" value="{{ $program->clg_id }}"/>
                                <input type="text" name="clg_name" id="clg_name" class="form-control" disabled value="{{ $program->clg_name }}"/>
                            </div>
                        </div>  
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="cos_title">Digree or Diploma</label>
                            <div>
                                <input type="hidden" name="cos_id" id="cos_id" value="{{ $program->cos_id }}"/>
                                <input type="text" name="cos_title" id="cos_title" class="form-control" disabled value="{{ $program->cos_title}}"/>
                            </div>
                        </div> 
                    </div>
                    <div class="form-group row">
                        <div class="col-md-9">
                            <label for="spc_name">Speciality</label>
                            <div>
                                <input type="hidden" name="spc_id" id="spc_id" value="{{ $program->spc_id }}"/>
                                <input type="text" name="spc_name" id="spc_name" class="form-control" disabled value="{{ $program->spc_name}}"/>
                            </div>
                        </div> 
                        <div class="col-md-3">
                            <label for="cos_duration">Duration</label>
                            <div>
                                <input type="text" name="cos_duration" id="cos_duration" class="form-control" value="{{ $program->cos_duration}}"/>
                            </div>
                        </div> 
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="cos_coor_name">Course Coordinator</label>
                            <div>
                                <input type="text" name="cos_coor_name" id="cos_coor_name" class="form-control"  value="{{ $program->cos_coor_name}}"/>
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <label for="cos_coor_name">Course Coordinator Mobile</label>
                            <div>
                                <input type="text" name="cos_coor_mobile" id="cos_coor_mobile" class="form-control" value="{{ $program->cos_coor_mobile}}"/>
                            </div>
                        </div> 
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div>
                                <input class="btnAction store" type="button" name="program_edit" id="program_edit" value="Edit Courses by University or Institute" >
                            </div>
                        </div>  
                    </div>
                     
                </div>
               
            </form>
        </div>  
    </div>
</div>
@endsection