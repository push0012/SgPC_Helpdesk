@extends('layouts.app')
@section('pageTitle', 'ව්‍යාපාර විස්තර')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <h4>ව්‍යාපාර ලේඛනය</h4>
      <hr>
      <h5>
          {{ $category }}
      </h5>
      <hr>
      <div class="table-responsive">

        <table id="mytable" class="table-bordred table-striped data-list">
         
         <thead>
           
           
           <th>ව්‍යාපාරයේ නම</th>
           <th>ව්‍යාපාර ලිපිනය</th>
           <th>දුරකථන අංකය</th>
           <th>අයිතිකරු</th>
           <th></th>
           <th></th>
           <th>Edit</th>
           <th>Delete</th>
         </thead>
         <tbody>
         
          <tr>
            <td>නිමල් පොහොර</td>
            <td>ගනේගම, පැල්මඩුල්ල</td>
            <td>+947145785965</td>
            <td>ජී. එච්. නිමල් කුමාර</td>
            <td><a href="{{ url('business_info')}}">More</a></td>
            <td></td>
            <td><button class="btn btn-primary btn-xs"><i class="fas fa-pencil-alt"></i></button></td>
            <td><button class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></button></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><button class="btn btn-primary btn-xs"><i class="fas fa-pencil-alt"></i></button></td>
            <td><button class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></button></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><button class="btn btn-primary btn-xs"><i class="fas fa-pencil-alt"></i></button></td>
            <td><button class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></button></td>
          </tr>
          
          </tbody>
          </table>
        </div>
        @if(session('message'))
          <span class="badge badge-success">{{session('message')}}</span>
        @endif 
    </div>
</div>
@endsection