@extends('layouts.app')
@section('pageTitle', 'සැකසුම් - විද්‍යාල වෙනස් කිරීම')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div style="font-size:1.5em;">{{ __('විද්‍යාල වෙනස් කිරීම')}}</div>
            <form name="frmCollegeStore" id="registration-form" style="font-size:0.8em !important;">
            @csrf
                <div class="container-fluid">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="clg_name">College Name</label><span id="clg_name-error" class="registration-error"></span>
                            <div><input type="text" name="clg_name" id="clg_name" class="form-control" length="250" placeholder="College Name" value="{{ $college->clg_name }}" required/></div>
                        </div>  
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="clg_address">Address</label><span id="clg_address-error" class="registration-error"></span>
                            <div><input type="text" name="clg_address" id="clg_address" class="form-control" length="250" placeholder="College Address" value="{{ $college->clg_address }}" required/></div>
                        </div>    
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="clg_telephone">Telephone</label><span id="clg_telephone-error" class="registration-error"></span>
                            <div>
                            <input type="text" name="clg_telephone" id="clg_telephone" class="form-control numberonly" length="250" placeholder="College Telephone" value="{{ $college->clg_telephone }}" required/>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <label for="clg_email">Email</label><span id="clg_email-error" class="registration-error"></span>
                            <div><input type="email" name="clg_email" id="clg_email" class="form-control" length="250" placeholder="College Email" value="{{ $college->clg_email }}" required/></div>
                        </div>    
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="clg_website">Website</label><span id="clg_website-error" class="registration-error"></span>
                            <div><input type="text" name="clg_website" id="clg_website" class="form-control" length="250" placeholder="College Website" value="{{ $college->clg_website }}" required/></div>
                        </div>  
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div>
                                <input type="hidden" id="clg_id" name="clg_id" value="{{ $college->clg_id}}"/>
                                <input class="btnAction store" type="button" name="clg_rdit" id="clg_edit" value="Edit College" >
                            </div>
                        </div>  
                    </div>
                     
                </div>
               
            </form>
        </div>  
    </div>
</div>
@endsection