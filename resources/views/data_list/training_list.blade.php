@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-6"><h4>පුහුණු අවස්ථා</h4></div>
        <div class="col-md-6">
        <a href="{{ url('/training_institutes')}}" >
        <img src="{{ asset('image/sp-links.png') }}" style="width: 25%; float: right;">
        </a>
        </div>
      </div>
      <hr>
      <h5>
          
      </h5>
      <hr>
      <div class="table-responsive">
        <table id="mytable" class="table-bordred table-striped data-list">
         
         <thead>           
           <th>ආයතනය</th>
           <th>පාඨමාලාව</th>
           <th>මූලික සුදුසුකම්</th>
           <th>සම්බන්ධීකරණය</th>
           <th></th>
           <th></th>
           <th>Edit</th>
           <th>Delete</th>
         </thead>
         <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><a href="#">More</a></td>
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