@extends('layouts.app')
@section('pageTitle', 'සැකසුම් - පාඨමාලා නාම විස්තර වෙනස් කිරීම')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div style="font-size:1.5em;">{{ __('පාඨමාලා නාම විස්තර වෙනස් කිරීම') }}</div>
            <form name="frmCollegeStore" id="registration-form" style="font-size:0.8em !important;">
            @csrf
                <div class="container-fluid">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="cos_title">Course Title</label><span id="cos_title-error" class="registration-error"></span>
                            <div><input type="text" name="cos_title" id="cos_title" class="form-control textonly" length="250" placeholder="Course Title" value="{{ $course->cos_title }}" required/></div>
                        </div>  
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="cos_type">Course Type</label><span id="cos_type-error" class="registration-error"></span>
                            <div>
                                <select class="form-control" name="cos_type" id="cos_type" required>
                                   <option value="None" disabled>Select type</option>
                                @if( $course->cos_type == 'Degree')
                                   <option value="Degree" selected>Degree</option>
                                   <option value="Diploma">Diploma</option>
                                @else
                                    <option value="Degree" >Degree</option>
                                   <option value="Diploma" selected>Diploma</option>
                                @endif
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div>
                                <input type="hidden" name="cos_id" id="cos_id" value="{{ $course->cos_id}}"/>
                                <input class="btnAction store" type="button" name="cos_title_edit" id="cos_title_edit" value="Edit Course Titles" >
                            </div>
                        </div>  
                    </div>
                     
                </div>
               
            </form>
        </div>  
    </div>
</div>
@endsection