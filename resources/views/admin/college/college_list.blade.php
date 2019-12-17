@extends('layouts.app')
@section('pageTitle', 'සැකසුම් - විද්‍යාල විස්තර')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="form-group row">
            <div style="font-size:1.5em;">{{ __('විද්‍යාල විස්තර') }}</div>
            </div>
            <div class="form-group row">
                <div class="col-md-12" style="font-size:0.8em;">
                    <a type="button" class="btn btn-outline-success btn-sm float-right" href="college/create" id="addCollege">
                        <span class="btn-label"><i class="fas fa-plus"></i></span>
                    </a>
                    <table id="collegelistTable" class="table table-striped table-bordered display collegelistTable" style="width:105%">
                        <thead>
                            <tr>
                                <th style="min-width:160px !important;">Colege Name</th>
                                <th style="max-width:125px !important;">Address</th>
                                <th style="max-width:125px !important;">Telephone</th>
                                <th style="max-width:125px !important;">Email</th>
                                <th style="max-width:125px !important;">Website</th>
                                <th style="max-width:25px !important;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($colleges as $college)
                            <tr>
                                <td>{{ $college->clg_name}}</td>
                                <td>{{$college->clg_address}}</td>
                                <td>{{$college->clg_telephone}}</td>
                                <td>{{$college->clg_email}}</td>
                                <td>{{$college->clg_website}}</td>
                                <td><a href="college/{{$college->clg_id}}/edit"><i class="fas fa-edit"></a></i></td>
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