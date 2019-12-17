@extends('layouts.app')
@section('pageTitle', 'සැකසුම් - පාඨමාලා නාම ඇතුලත් කිරීම')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div style="font-size:1.5em;">{{ __('පාඨමාලා නාම ලියාපදිංචිය') }}</div>
            <form name="frmCollegeStore" id="registration-form" style="font-size:0.8em !important;">
                <div class="container-fluid">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="cos_title">Course Title</label><span id="cos_title-error" class="registration-error"></span>
                            <div><input type="text" name="cos_title" id="cos_title" class="form-control" length="250" placeholder="Course Title" required/></div>
                        </div>  
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="cos_type">Course Type</label><span id="cos_type-error" class="registration-error"></span>
                            <div>
                                <select class="form-control" name="cos_type" id="cos_type" required>
                                   <option value="None" disabled selected>Select type</option>
                                   <option value="Degree">Degree</option>
                                   <option value="Diploma">Diploma</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div>
                                <input class="btnAction store" type="button" name="cos_title_store" id="cos_title_store" value="Store Course Titles" >
                            </div>
                        </div>  
                    </div>
                     
                </div>
               
            </form>
        </div>  
    </div>
</div>
@endsection