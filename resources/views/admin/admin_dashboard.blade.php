@extends('layouts.app')
@section('pageTitle', 'Admin Dashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10">
                        <div style="font-size:1.5em;">{{ __('Admin Dashboard') }}</div>
                    </div>
                    <div class="col-md-2">
                            <a type="button" class="btn btn-labeled btn-primary" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <span class="btn-labeling"><i class="fas fa-sign-out-alt"></i></span>
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    </div>
                </div>
                <hr/>
                
                <span>Daily Updates</span>
                <hr class="hrlines"/>
                <div class="row">
                    <div class="col-md-4">
                        <a type="button" class="btn btn-labeled btn-success" href="/admin/pending/degree/">
                            <span class="btn-labeling"><i class="fas fa-graduation-cap"></i></span>
                            Pending - Degree
                            <span class="btn-labeling btn-right">{{ $degree }}</span>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a type="button" class="btn btn-labeled btn-info" href="/admin/pending/diploma/">
                            <span class="btn-labeling"><i class="fas fa-certificate"></i></span>
                            Pending - Diploma
                            <span class="btn-labeling btn-right">{{ $diploma }}</span>
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
                        <a type="button" class="btn btn-labeled btn-danger" href="/admin/masterdata/college/">
                            <span class="btn-labeling"><i class="fas fa-school"></i></span>
                                College
                            <span class="btn-labeling btn-right">{{ $college }}</span>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a type="button" class="btn btn-labeled btn-danger" href="/admin/masterdata/course/">
                            <span class="btn-labeling"><i class="fas fa-shapes"></i></span>
                                Course
                            <span class="btn-labeling btn-right">{{ $course }}</span>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a type="button" class="btn btn-labeled btn-danger" href="/admin/masterdata/special/">
                            <span class="btn-labeling"><i class="fas fa-adjust"></i></span>
                                Speciality
                            <span class="btn-labeling btn-right">{{ $speciality }}</span>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <a type="button" class="btn btn-labeled btn-secondary" href="/admin/masterdata/collegecourse">
                            <span class="btn-labeling"><i class="fa fa-chalkboard-teacher"></i></span>
                                Course by University or Institute
                            <span class="btn-labeling btn-right">{{ $program }}</span>
                        </a>
                    </div>
                </div>
                @if(Auth::user()->role_rank < 3 )
                <hr class="hrlines"/>
                <span>Reporting</span>
                <hr class="hrlines"/>
                    <div class="row">
                        <div class="col-md-4">
                            <a type="button" class="btn btn-labeled btn-success" href="/admin/users">
                                <span class="btn-labeling"><i class="fas fa-user-plus"></i></span>
                                    Register User
                            </a>
                        </div>
                        <div class="col-md-8">
                            <a type="button" class="btn btn-labeled btn-success" href="/admin/report/student/degree">
                                <span class="btn-labeling"><i class="fas fa-user-friends"></i></span>
                                    All Students
                                <span class="btn-labeling btn-right"></span>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>  
    </div>
</div>
@endsection