@extends('layouts.app')
@section('pageTitle', 'සැකසුම් - විශේෂථා නාම වෙනස් කිරීම')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div style="font-size:1.5em;">{{ __('විශේෂථා නාම වෙනස් කිරීම')}}</div>
            <form name="frmCollegeStore" id="registration-form" style="font-size:0.8em !important;">
            @csrf
                <div class="container-fluid">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="spc_name">Speciality Name</label><span id="spc_name-error" class="registration-error"></span>
                            <div><input type="text" name="spc_name" id="spc_name" class="form-control" length="250" placeholder="Speciality Name" value="{{ $speciality->spc_name }}" required/></div>
                        </div>  
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div>
                                <input type="hidden" id="spc_id" name="spc_id" value="{{ $speciality->spc_id}}"/>
                                <input class="btnAction store" type="button" name="spc_edit" id="spc_edit" value="Edit Speciality" >
                            </div>
                        </div>  
                    </div>
                </div>
            </form>
        </div>  
    </div>
</div>
@endsection