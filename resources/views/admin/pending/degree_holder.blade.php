@extends('layouts.app')
@section('pageTitle', 'සැකසුම් - උපාධිදාරී විස්තරාත්මක අයදුම්පත්')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div style="font-size:1.5em;">{{ __('උපාධිදාරී ලියාපදිංචිය අයදුම් - විස්තරාත්මක') }}</div>
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
                        <lable>{{ $degreeholders->stu_name}}</lable>
                        <input type="hidden" name="stu_id" id="stu_id" value="{{ $degreeholders->stu_id }}"/>
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>N.I.C:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ $degreeholders->nic}}</lable>
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Address:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ $degreeholders->stu_address}}</lable>
                    </div>
                </div>
                <input type="hidden" name="cos_id" id="cos_id" value="{{ $degreeholders->cos_id }}"/>
                <input type="hidden" name="spc_id" id="spc_id" value="{{ $degreeholders->spc_id }}"/>
                @if($degreeholders->spc_name == 'General')
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Degree:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ $degreeholders->cos_title}} ({{$degreeholders->spc_name}})</lable>
                        
                    </div>
                </div>
                @else
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Degree:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ $degreeholders->cos_title}} (Special) in {{$degreeholders->spc_name}}</lable>
                    </div>
                </div>
                @endif

                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>University:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ $degreeholders->clg_name}}</lable>
                        <input type="hidden" name="clg_id" id="clg_id" value="{{ $degreeholders->clg_id }}"/>
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Medium:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ $degreeholders->medium}}</lable>
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Result:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ $degreeholders->degree_class}}</lable>
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Effective Date:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ $degreeholders->effective_date}}</lable>
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Registered Date:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ Carbon\Carbon::parse($degreeholders->created_at)->format('Y-m-d')}}</lable>
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Register Number:</lable>
                    </div>
                    <div class="col-md-9">
                    <input type="text" name="g_reg_no" id="g_reg_no" class="form-control" />
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-4" >
                        <div>
                            <input class="btnAction" type="button" name="g_reg_app" id="g_reg_app" value="Approve" >
                        </div>
                    </div>
                    <div class="col-md-4" >
                        <div>
                            <input class="btnAction" type="button" name="g_reg_rej" id="g_reg_rej" value="Reject" >
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