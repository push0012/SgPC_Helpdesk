@extends('layouts.app')
@section('pageTitle', 'සැකසුම් - විශේෂථා විස්තර')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="form-group row">
            <div style="font-size:1.5em;">{{ __('විශේෂථා විස්තර') }}</div>
            </div>
            <div class="form-group row">
                <div class="col-md-12" style="font-size:0.8em;">
                    <a type="button" class="btn btn-outline-success btn-sm float-right" href="special/create" id="addSpeciality">
                        <span class="btn-label"><i class="fas fa-plus"></i></span>
                    </a>
                    <table id="specialitylistTable" class="table table-striped table-bordered display specialitylistTable" style="width:105%">
                        <thead>
                            <tr>
                                <th style="min-width:160px !important;">Speciality Name</th>
                                <th style="max-width:25px !important;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($specialities as $speciality)
                            <tr>
                                <td>{{ $speciality->spc_name}}</td>
                                <td><a href="{{$speciality->spc_id}}/edit"><i class="fas fa-edit"></a></i></td>
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