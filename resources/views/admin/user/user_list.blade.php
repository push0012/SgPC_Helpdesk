@extends('layouts.app')
@section('pageTitle', 'සැකසුම් - User Information')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-11">
                    <div style="font-size:1.5em;">{{ __('User Information') }}</div>
                </div>
                <div class="col-md-1 float-right">
                    <a type="button" alt="Add New College" class="btn btn-outline-success btn-sm float-right" href="{{ url('/admin/register') }}" id="addUser">
                        <span class="btn-label"><i class="fas fa-plus"></i></span>
                    </a>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12" style="font-size:0.8em;">
                    <table id="userlistTable" class="table table-striped table-bordered display userlistTable" style="width:100%">
                        <thead>
                            <tr>
                                <th style="max-width:75px !important;">Name</th>
                                <th style="max-width:75px !important;">Email</th>
                                <th style="max-width:50px !important;">Role</th>
                                <th style="max-width:100px !important;">Created Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name}}</td>
                                <td>{{$user->email}}</td>

                                @if($user->role_rank == 1)
                                    <td>Developper</td>
                                @elseif($user->role_rank == 2)
                                    <td>Administrator</td>
                                @else
                                    <td>Manager</td>
                                @endif

                                <td>{{$user->created_at}}</td>
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