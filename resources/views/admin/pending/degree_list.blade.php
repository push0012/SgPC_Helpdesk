@extends('layouts.app')
@section('pageTitle', 'සැකසුම් - උපාධිදාරී ලියාපදිංචිය අයදුම්')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div style="font-size:1.5em;">{{ __('උපාධිදාරී ලියාපදිංචිය අයදුම්') }}</div>
        </div>
    </div>
    <br/>
    <div class="row justify-content-center">
        <div class="col-md-3">
            Student Name
        </div>  
        <div class="col-md-3">
            NIC
        </div>
        <div class="col-md-3">
            Degree
        </div>
        <div class="col-md-3">
            View
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-3">
            Student Name
        </div>  
        <div class="col-md-3">
            NIC
        </div>
        <div class="col-md-3">
            Degree
        </div>
        <div class="col-md-3">
            View
        </div>
    </div>
</div>
@endsection