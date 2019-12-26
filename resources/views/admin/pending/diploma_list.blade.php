@extends('layouts.app')
@section('pageTitle', 'සැකසුම් - ඩිප්ලෝමාධාරී ලියාපදිංචි අයදුම්')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div style="font-size:1.5em;">{{ __('ඩිප්ලෝමාධාරී ලියාපදිංචි අයදුම්') }}</div>
        </div>
    </div>
    <br/>
    <div class="row justify-content-center">
    <div class="table-responsive">
        <table id="mytable" class="table-bordred table-striped data-list" >
         
         <thead>           
           <th >Name</th>
           <th>NIC</th>
           <th>Diploma</th>
           <th>Institute</th>
           <th></th>
         </thead>
         <tbody>
         @if($diploma_lists->count() > 0 )
            @foreach($diploma_lists as $diploma_list)
              <tr style="font-size:0.85em !important;">
                <td>{{ $diploma_list->stu_name}}</td>
                <td>{{ $diploma_list->nic}}</td>
                <td>{{ $diploma_list->cos_title}} </td>
                <td>{{ $diploma_list->clg_name}}</td>
                <td><a class="btn btn-transparent" href="{{ url('admin/pending/diploma/views/'.$diploma_list->stu_id.'') }}" ><i class="fas fa-bars"></i></a></td>
              </tr>
              @endforeach
          @else
            <tr height="150">
              <td colspan="5"><i class="fas fa-bars"></i> No Results Found</td>
            </tr>
          @endif
          </tbody>
          </table>
        </div>
    </div>
</div>
@endsection