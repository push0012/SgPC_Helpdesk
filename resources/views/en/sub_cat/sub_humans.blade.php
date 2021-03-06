@extends('en.layouts.app')
@section('pageTitle', '‍‍Human Resource')
@section('content')
<div class="container">
    <div class="row">
        <h3>Human Resource</h3>    
    </div>
    <hr>
    <div class="row justify-content-center">
        <div class="containers">
            <a href="{{ url('en/resource/job')}}" class="img4 box bg-info">
                <div class="row">
                    <div class="col-md-4">
                        <img  src="{{ asset('image/job.png') }}" style="border-radius: 18px; width: 100px; height: 100px; ">
                    </div>
                    <div class="col-md-8">
                        <h5 class="box-head">Job Opportunity</h5>
                        <img  src="{{ asset('image/go.png') }}" class="bottomright" style="width: 35px; height: 35px;">
                    </div>
                </div>
            </a>
            <a href="{{ url('en/resource/training')}}" class="img5 box bg-info">
                
                <div class="row">
                    <div class="col-md-4">
                        <img  src="{{ asset('image/training.png') }}" style="border-radius: 18px; width: 100px; height: 100px; ">
                    </div>
                    <div class="col-md-8">
                        <h5 class="box-head">Internship</h5>
                        <img  src="{{ asset('image/go.png') }}" class="bottomright" style="width: 35px; height: 35px;">
                        
                    </div>
                </div>
            </a>
            <a href="{{ url('en/resource/application')}}" class="img6 box bg-warning">
                
                <div class="row">
                    <div class="col-md-4">
                        <img  src="{{ asset('image/register.png') }}" style="border-radius: 18px; width: 100px; height: 100px; ">
                    </div>
                    <div class="col-md-8">
                        <h5 class="box-head">Resitration</h5>
                        <img  src="{{ asset('image/go.png') }}" class="bottomright" style="width: 35px; height: 35px;">
                        
                    </div>
                </div>
            </a>
        </div>
    </div>
    <hr>
</div>
@endsection