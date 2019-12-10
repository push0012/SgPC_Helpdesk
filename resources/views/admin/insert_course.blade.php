@extends('layouts.app')
@section('pageTitle', 'සැකසුම් - පාඨමාලා ඇතුලත් කිරීම')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div style="font-size:1.5em;">{{ __('පාඨමාලා ලියාපදිංචිය') }}</div>
            <form name="frmCollegeStore" id="registration-form" style="font-size:0.8em !important;">
                <div class="container-fluid">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="e_clg_id">College</label><span id="e_clg_id-error" class="registration-error"></span>
                            <div>
                                <select class="form-control" name="e_clg_id" id="e_clg_id">
                                    <option value="None" disabled selected>Select University</option>
                                    @foreach($colleges as $college)
                                        <option value="{{ $college->clg_id}}">{{ $college->clg_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>   
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="cos_id">College</label><span id="cos_id-error" class="registration-error"></span>
                            <div>
                                <select class="form-control" name="cos_id" id="cos_id">
                                    <option value="None" disabled selected>Select Course</option>
                                    @foreach($courses as $course)
                                        <option value="{{ $course->cos_id}}">{{ $course->cos_title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>  
                    </div> 
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="cos_id">Speciality Degrees</label>
                        </div>  
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-outline-success btn-sm float-right" id="addSPC">
                                <span class="btn-label"><i class="fas fa-plus"></i></span>
                            </button>
                            <button type="button" class="btn btn-outline-danger btn-sm float-right" id="removeSPC">
                                <span class="btn-label"><i class="fas fa-times"></i></span>
                            </button>
                            <table id="courseTable" class="display courseTable" style="width:900px">
                                <thead>
                                    <tr>
                                        <th style="max-width:125px !important;">Speciality</th>
                                        <th style="min-width:125px !important;">Duration</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>  
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div>
                                <input class="btnAction store" type="button" name="cos_store" id="cos_store" value="Store Courses" >
                            </div>
                        </div>  
                    </div> 
                </div>
            </form>
        </div>  
    </div>
</div>
@endsection