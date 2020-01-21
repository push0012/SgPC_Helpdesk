@extends('layouts.app')
@section('pageTitle', '')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
                <div class="" style="font-size:1.5em;">{{ __('උපාධිදාරී ලියාපදිංචිය සදහා උපදෙස්') }}</div>

                <div class="container-fluid" >
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                        </div>
                        <div class="col-md-2">
                            <a class="btn btnAction" href="{{ url('resource/application/graduate/form')}}" style="">Go to Form</a>
                        </div>
                    </div>
                </div>
            
        </div>  
    </div>
</div>
@endsection