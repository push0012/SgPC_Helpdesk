@extends('en.layouts.app')
@section('pageTitle', '‍‍Registration')
@section('content')
<div class="container">
    <div class="row ">
        <h3>‍‍Registration</h3>    
    </div>
    <hr>
    <div class="row justify-content-center align-items-center" >
        <div class="containers" align="center">
            <a href="{{ url('/en/resource/application/graduate')}}" class="img7 box bg-warning">
                <div class="row">
                    <div class="col-md-4">
                        <img  src="{{ asset('image/graduate.png') }}" style="border-radius: 18px; width: 100px; height: 100px; ">
                    </div>
                    <div class="col-md-8">
                        <h5 class="box-head">Graduate</h5>
                        <span></span>
                        <img  src="{{ asset('image/go.png') }}" class="bottomright" style="width: 35px; height: 35px;">
                    </div>
                </div>
            </a>
            <a href="{{ url('/en/resource/application/diploma')}}" class="img8 box bg-warning">
                <div class="row">
                    <div class="col-md-4">
                        <img  src="{{ asset('image/diploma.png') }}" style="border-radius: 18px; width: 100px; height: 100px; ">
                    </div>
                    <div class="col-md-8">
                        <h5 class="box-head">Diploma Holder</h5>
                        <span></span>
                        <img  src="{{ asset('image/go.png') }}" class="bottomright" style="width: 35px; height: 35px;">
                    </div>
                </div>
            </a>
            <!--<a href="{{ url('/stu_regi')}}" class="img9 box bg-warning">
                <div class="row">
                    <div class="col-md-4">
                        <img  src="{{ asset('image/nvq.png') }}" style="border-radius: 18px; width: 100px; height: 100px; ">
                    </div>
                    <div class="col-md-8">
                        <h5 class="box-head">NVQ සහතිකපත්ලාභීන්</h5>
                        <span></span>
                        <img  src="{{ asset('image/go.png') }}" class="bottomright" style="width: 35px; height: 35px;">
                    </div>
                </div>
            </a>
            <a href="{{ url('/stu_regi')}}" class="img10 box bg-warning">
                <div class="row">
                    <div class="col-md-4">
                        <img  src="{{ asset('image/untrained.png') }}" style="border-radius: 18px; width: 100px; height: 100px; ">
                    </div>
                    <div class="col-md-8">
                        <h5 class="box-head">නුපුහුණු</h5>
                        <span></span>
                        <img  src="{{ asset('image/go.png') }}" class="bottomright" style="width: 35px; height: 35px;">
                    </div>
                </div>
            </a>-->
        </div>
    </div>
</div>
@endsection