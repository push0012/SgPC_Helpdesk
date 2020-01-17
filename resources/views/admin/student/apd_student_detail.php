@extends('layouts.app')
@section('pageTitle', 'ඩිප්ලෝමාධාරී විස්තරාත්මක වාර්තා')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div style="font-size:1.5em;">{{ __('ඩිප්ලෝමාධාරී ලියාපදිංචිය විස්තරාත්මක වාර්තා') }}</div>
        </div>
    </div>
    <hr/>
    <div style="font-size:0.8em !important;">
    <h5>Registration Information</h5>
    <div class="container">
        <div class="row form-group">
            <div class="col-md-2 bg-success">
                <lable >Registration No:</lable>
            </div>
            <div class="col-md-10">
                <lable>{{$students->diploma_reg_no }}</lable>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-2 bg-success">
                <lable >Requested Date:</lable>
            </div>
            <div class="col-md-4">
                <lable>{{$students->created_at }}</lable>
            </div>
            <div class="col-md-2 bg-success">
                <lable >Approved Date:</lable>
            </div>
            <div class="col-md-4">
                <lable>{{$students->updated_at }}</lable>
            </div>
        </div>
    </div>
    <hr/>
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
                <lable >Institute:</lable>
            </div>
            <div class="col-md-10">
                <lable>{{$students->clg_name }}</lable>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-2 bg-success">
                <lable>Diploma:</lable>
            </div>
            <div class="col-md-10">
                <lable>{{ $students->cos_title}}</lable>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-2 bg-success">
                <lable>Medium:</lable>
            </div>
            <div class="col-md-4">
                <lable>{{$students->medium }}</lable>
            </div>
            <div class="col-md-2 bg-success">
                <lable>Effective Date:</lable>
            </div>
            <div class="col-md-4">
                <lable>{{$students->effective_date }}</lable>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-2 bg-success">
                <lable>Certificate:</lable>
            </div>
            <div class="col-md-10">
                <lable>Click Here</lable>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-2 bg-success">
                <lable>Other Details:</lable>
            </div>
            <div class="col-md-10">
                <lable>{{ }}</lable>
            </div>
        </div>
        </div>
        <hr/>
        <h5>Professional Information</h5>
        <div class="container">
            <div class="row form-group">
                <div class="col-md-2 bg-success">
                    <lable>Job Availability:</lable>
                </div>
                <div class="col-md-4">
                    <lable>{{$students->job_availability }}</lable>
                </div>
                <div class="col-md-2 bg-success">
                    <lable>Sector:</lable>
                </div>
                <div class="col-md-4">
                    <lable>{{$students->job_sector }}</lable>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-2 bg-success">
                    <lable>Job Preference:</lable>
                </div>
                <div class="col-md-10">
                    <lable>{{$students->job_preference }}</lable>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-2 bg-success">
                    <lable>IT Knowladge:</lable>
                </div>
                <div class="col-md-4">
                    <lable>{{$students->it_skill }}</lable>
                </div>
                <div class="col-md-2 bg-success">
                    <lable>Language Skill:</lable>
                </div>
                <div class="col-md-4">
                    <lable>Click Here</lable>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-2 bg-success">
                    <lable>Details:</lable>
                </div>
                <div class="col-md-10">
                    <lable>{{$students->job_sector }}</lable>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-2 bg-success">
                    <lable>Extra Activity:</lable>
                </div>
                <div class="col-md-10">
                    <lable>{{$students->extra_activity }}</lable>
                </div>
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