@extends('layouts.app')
@section('pageTitle', 'Admin Dashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div style="font-size:1.5em;">{{ __('Admin Dashboard') }}</div>
            <hr/>
            <div class="container-fluid">
                <span>Daily Updates</span>
                <hr class="hrlines"/>
                <div class="row">
                    <div class="col-md-4">
                        <a type="button" class="btn btn-labeled btn-success" href="/admin/pending/degree/">
                            <span class="btn-labeling"><i class="fas fa-graduation-cap"></i></span>
                            Pending - Degree
                            <span class="btn-labeling btn-right">0</span>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a type="button" class="btn btn-labeled btn-success" href="/admin/pending/diploma/">
                            <span class="btn-labeling"><i class="fas fa-certificate"></i></span>
                            Pending - Diploma
                            <span class="btn-labeling btn-right">0</span>
                        </a>
                    </div>
                    <div class="col-md-4">
                       
                    </div>
                </div>
                <hr class="hrlines"/>
                <span>Data Insert</span>
                <hr class="hrlines"/>
                <div class="row">
                    <div class="col-md-3">
                        <a type="button" class="btn btn-labeled btn-success" href="/admin/masterdata/college/">
                            <span class="btn-labeling"><i class="fas fa-school"></i></span>
                                College
                            <span class="btn-labeling btn-right">0</span>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a type="button" class="btn btn-labeled btn-success" href="/admin/masterdata/course/">
                            <span class="btn-labeling"><i class="fas fa-certificate"></i></span>
                                Course
                            <span class="btn-labeling btn-right">0</span>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a type="button" class="btn btn-labeled btn-success" href="/admin/masterdata/special/">
                            <span class="btn-labeling"><i class="fas fa-certificate"></i></span>
                                Speciality
                            <span class="btn-labeling btn-right">0</span>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <a type="button" class="btn btn-labeled btn-success" href="/admin/masterdata/collegecourse">
                            <span class="btn-labeling"><i class="fas fa-certificate"></i></span>
                                Course by University or Institute
                            <span class="btn-labeling btn-right">0</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection