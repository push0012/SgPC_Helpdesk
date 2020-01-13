@extends('layouts.app')
@section('pageTitle', 'උපාධිදාරී විස්තරාත්මක වාර්තා')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div style="font-size:1.5em;">{{ __('උපාධිදාරී ලියාපදිංචිය විස්තරාත්මක වාර්තා') }}</div>
        </div>
    </div>
    <hr/>
    <div style="font-size:0.8em !important;">
    <h5>Personal Information</h5>
    <div class="container">
    <div class="row form-group">
        <div class="col-md-2 bg-success">
            <lable >Student Name:</lable>
        </div>
        <div class="col-md-4">
            <lable>{{$students->stu_name }}</lable>
        </div>
        <div class="col-md-2 bg-success">
            <lable>N.I.C Number:</lable>
        </div>
        <div class="col-md-4">
            <lable>{{$students->nic }}</lable>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-2 bg-success">
            <lable>Gender:</lable>
        </div>
        <div class="col-md-4">
            <lable>{{$students->sex }}</lable>
        </div>
        <div class="col-md-2 bg-success">
            <lable>Date of Birth:</lable>
        </div>
        <div class="col-md-4">
            <lable>{{$students->dob }}</lable>
        </div>
        
    </div>
    <div class="row form-group">
        <div class="col-md-2 bg-success">
            <lable>Mobile:</lable>
        </div>
        <div class="col-md-4">
            <lable>{{$students->stu_mobile }}</lable>
        </div>
        <div class="col-md-2 bg-success">
            <lable>Email:</lable>
        </div>
        <div class="col-md-4">
            <lable>{{$students->stu_email }}</lable>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-2 bg-success">
            <lable>Telephone:</lable>
        </div>
        <div class="col-md-4">
            <lable>{{$students->stu_telephone }}</lable>
        </div>
        <div class="col-md-2 bg-success">
            <lable>Address:</lable>
        </div>
        <div class="col-md-4">
            <lable>{{$students->stu_address }}</lable>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-2 bg-success">
            <lable>District:</lable>
        </div>
        <div class="col-md-4">
        @if($students->district == 1)
            <lable>Rathnapura</lable>
        @else
            <lable>Kegalle</lable>
        @endif
        </div>
        <div class="col-md-2 bg-success">
            <lable>DS Division:</lable>
        </div>
        <div class="col-md-4">
            <lable>{{$students->dsa_name }}</lable>
        </div>
    </div>
    </div>
    <hr/>
    <h5>Educational Information</h5>
    <div class="container">
        <div class="row form-group">
            <div class="col-md-2 bg-success">
                <lable >University:</lable>
            </div>
            <div class="col-md-10">
                <lable>{{$students->clg_name }}</lable>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-2 bg-success">
                <lable>Degree:</lable>
            </div>
            @if($students->spc_name == 'General')
                <div class="col-md-10">
                    <lable>{{ $students->cos_title}} ({{$students->spc_name}})</lable>
                </div>
            @else
                <div class="col-md-10">
                    <lable>{{ $students->cos_title}} (Special) in {{$students->spc_name}}</lable>
                </div>
            @endif
        </div>
        <div class="row form-group">
            <div class="col-md-2 bg-success">
                <lable>Result:</lable>
            </div>
            <div class="col-md-4">
                <lable>{{$students->degree_class }}</lable>
            </div>
            <div class="col-md-2 bg-success">
                <lable>Medium:</lable>
            </div>
            <div class="col-md-4">
                <lable>{{$students->medium }}</lable>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
<!-- Push a style dynamically from a view -->
@push('styles')
@endpush

<!-- Push a script dynamically from a view -->
@push('scripts')
<script type="text/javaScript">

</script>
@endpush