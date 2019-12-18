@extends('layouts.app')
@section('pageTitle', 'සැකසුම් - පාඨමාලා නාම විස්තර')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="form-group row">
            <div style="font-size:1.5em;">{{ __('පාඨමාලා නාම විස්තර') }}</div>
            </div>
            <div class="form-group row">
                <div class="col-md-12 float-right">
                    <a type="button" class="btn btn-outline-success btn-sm float-right" href="{{ url('admin/masterdata/course/create') }}" id="addCourse">
                        <span class="btn-label"><i class="fas fa-plus"></i></span>
                    </a>
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-md-12" style="font-size:0.8em;">
                    
                    <table id="courseslistTable" class="table table-striped table-bordered display courseslistTable" style="width:100%">
                        <thead>
                            <tr>
                                <th style="min-width:160px !important;">Course Title</th>
                                <th style="max-width:125px !important;">Type</th>
                                <th style="max-width:25px !important;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($courses as $course)
                            <tr>
                                <td>{{ $course->cos_title}}</td>
                                <td>{{$course->cos_type}}</td>
                                <td><a href="{{ url('admin/masterdata/course/'.$course->cos_id.'/edit') }}"><i class="fas fa-edit"></a></i></td>
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