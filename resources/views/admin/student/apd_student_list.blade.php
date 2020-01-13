@extends('layouts.app')
@section('pageTitle', 'ඩිප්ලෝමාධාරී ශිෂ්‍ය ලියාපදිංචි විස්තර')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div style="font-size:1.5em;">{{ _('ඩිප්ලෝමාධාරී ලියාපදිංචි විස්තර') }}</div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12" style="font-size:0.8em;">
                    <table id="studentlistTable" class="table table-striped table-bordered display studentlistTable" style="width:105%">
                        <thead>
                            <tr>
                                <th style="max-width:125px !important;">Name</th>
                                <th style="max-width:125px !important;">Address</th>
                                <th style="max-width:125px !important;">NIC</th>
                                <th style="max-width:125px !important;">Birthday</th>
                                <th style="max-width:125px !important;">Reg No</th>
                                <th style="max-width:25px !important;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                            <tr>
                                <td>{{ $student->stu_name}}</td>
                                <td>{{$student->stu_address}}</td>
                                <td>{{$student->nic}}</td>
                                <td>{{$student->dob}}</td>
                                <td>{{$student->diploma_reg_no}}</td>
                                <td><a href="{{ url('admin/report/student/diploma/'.$student->stu_id) }}"><i class="fas fa-eye"></a></i></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>  
            </div>
        </div>  
    </div>
</div>
@endsection