@extends('layouts.app')
@section('pageTitle', 'සැකසුම් - ඩිප්ලෝමාධාරී විස්තරාත්මක අයදුම්පත්')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div style="font-size:1.5em;">{{ __('ඩිප්ලෝමාධාරී ලියාපදිංචිය අයදුම් - විස්තරාත්මක') }}</div>
        </div>
    </div>
    <hr/>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container-fluid" style="font-size:0.85em !important;">
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Student Name:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ $diplomaholder->stu_name}}</lable>
                        <input type="hidden" name="stu_id" id="stu_id" value="{{ $diplomaholder->stu_id }}"/>
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>N.I.C:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ $diplomaholder->nic}}</lable>
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Address:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ $diplomaholder->stu_address}}</lable>
                    </div>
                </div>
                <input type="hidden" name="cos_id" id="cos_id" value="{{ $diplomaholder->cos_id }}"/>
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Diploma:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ $diplomaholder->cos_title}}</lable>
                        
                    </div>
                </div>

                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Institute:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ $diplomaholder->clg_name}}</lable>
                        <input type="hidden" name="clg_id" id="clg_id" value="{{ $diplomaholder->clg_id }}"/>
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Medium:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ $diplomaholder->medium}}</lable>
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Effective Date:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ $diplomaholder->effective_date}}</lable>
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Registered Date:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ Carbon\Carbon::parse($diplomaholder->created_at)->format('Y-m-d')}}</lable>
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Register Number:</lable>
                    </div>
                    <div class="col-md-9">
                    <input type="text" name="d_reg_no" id="d_reg_no" class="form-control" />
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-4" >
                        <div>
                            <input class="btnAction" type="button" name="d_reg_app" id="d_reg_app" value="Approve" >
                        </div>
                    </div>
                    <div class="col-md-4" >
                        <div>
                            <input class="btnAction" type="button" name="d_reg_rej" id="d_reg_rej" value="Reject" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4" >
        
        </div>
    </div>
</div>
@endsection