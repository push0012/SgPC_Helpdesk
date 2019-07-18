@extends('layouts.app')
@section('pageTitle', '‍‍මානව සම්පත')
@section('content')
<div class="container">
    <div class="row">
        <h3>මානව සම්පත</h3>    
    </div>
    <hr>
    <div class="row justify-content-center">
        <div class="containers">
            <a href="{{ url('/job_list')}}" class="img4 box bg-info">
                <div class="row">
                    <div class="col-md-4">
                        <img  src="{{ asset('image/job.png') }}" style="border-radius: 18px; width: 100px; height: 100px; ">
                    </div>
                    <div class="col-md-8">
                        <h5 class="box-head">රැකියා අවස්ථා</h5>
                        <img  src="{{ asset('image/go.png') }}" class="bottomright" style="width: 35px; height: 35px;">
                    </div>
                </div>
            </a>
            <a href="{{ url('/training_list')}}" class="img5 box bg-info">
                
                <div class="row">
                    <div class="col-md-4">
                        <img  src="{{ asset('image/training.png') }}" style="border-radius: 18px; width: 100px; height: 100px; ">
                    </div>
                    <div class="col-md-8">
                        <h5 class="box-head">පුහුණු අවස්ථා</h5>
                        <img  src="{{ asset('image/go.png') }}" class="bottomright" style="width: 35px; height: 35px;">
                        
                    </div>
                </div>
            </a>
            <a href="{{ url('/stu_regi')}}" class="img6 box bg-warning">
                
                <div class="row">
                    <div class="col-md-4">
                        <img  src="{{ asset('image/register.png') }}" style="border-radius: 18px; width: 100px; height: 100px; ">
                    </div>
                    <div class="col-md-8">
                        <h5 class="box-head">ලියාපදිංචි වීම</h5>
                        <img  src="{{ asset('image/go.png') }}" class="bottomright" style="width: 35px; height: 35px;">
                        
                    </div>
                </div>
            </a>
        </div>
    </div>
    <hr>
</div>
@endsection