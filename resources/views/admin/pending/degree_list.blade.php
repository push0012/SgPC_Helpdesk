@extends('layouts.app')
@section('pageTitle', 'සැකසුම් - උපාධිදාරී ලියාපදිංචි අයදුම්')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div style="font-size:1.5em;">{{ __('උපාධිදාරී ලියාපදිංචි අයදුම්') }}</div>
        </div>
    </div>
    <br/>
    <div class="row justify-content-center">
    <div class="table-responsive">
        <table id="mytable" class="table table-striped table-bordered display data-list mytable" >
         
         <thead>           
           <th >Name</th>
           <th>NIC</th>
           <th>Degree</th>
           <th>University</th>
           <th></th>
         </thead>
         <tbody>
         
            @foreach($degree_lists as $degree_list)
            <tr style="font-size:0.85em !important;">
              <td>{{ $degree_list->stu_name}}</td>
              <td>{{ $degree_list->nic}}</td>
              @if($degree_list->spc_name == 'General')
              <td>{{ $degree_list->cos_title}} ({{$degree_list->spc_name}}) </td>
              @else
              <td>{{ $degree_list->cos_title}}(Special) in {{$degree_list->spc_name}}</td>
              @endif
              <td>{{ $degree_list->clg_name}}</td>
              <td><a class="btn btn-transparent" href="{{ url('admin/pending/degree/views/'.$degree_list->stu_id.'') }}" ><i class="fas fa-bars"></i></a></td>
            </tr>
            @endforeach
          
          </tbody>
          </table>
        </div>
    </div>
</div>
@endsection