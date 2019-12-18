@extends('layouts.app')
@section('pageTitle', 'සැකසුම් - පාඨමාලා විස්තර')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div style="font-size:1.5em;">{{ __('පාඨමාලා විස්තර') }}</div>
            <form name="frmCollegeStore" id="registration-form" style="font-size:0.8em !important;">
                <div class="container-fluid">
                    <div class="form-group row">
                        <div class="col-md-12 float-right">
                            <a type="button" class="btn btn-outline-success btn-sm float-right" href="collegecourse/create" id="addProgram">
                                <span class="btn-label"><i class="fas fa-plus"></i></span>
                            </a>
                        </div>  
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="show_clg_id">University or Insitute</label><span id="show_clg_id-error" class="registration-error"></span>
                            <div>
                                <select class="form-control" name="show_clg_id" id="show_clg_id">
                                    <option value="None" disabled selected>Select...</option>
                                    @foreach($colleges as $college)
                                        <option value="{{ $college->clg_id}}">{{ $college->clg_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>   
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="show_cos_id">Degree or Diploma</label><span id="show_cos_id-error" class="registration-error"></span>
                            <div>
                                <select class="form-control" name="show_cos_id" id="show_cos_id">
                                    <option value="None" disabled selected>Select...</option>
                                </select>
                            </div>
                        </div>  
                    </div> 
                    <div class="form-group row">
                        <div class="col-md-10">
                            <label for="cos_id">Speciality</label>
                        </div>  
                        
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <table id="programlistTable" class="table table-striped table-bordered display programlistTable" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="max-width:200px !important;">Speciality</th>
                                        <th style="max-width:200px !important;">Type</th>
                                        <th style="max-width:125px !important;">Duration</th>
                                        <th style="max-width:25px !important;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>  
                    </div>
                </div>
            </form>
        </div>  
    </div>
</div>
@endsection