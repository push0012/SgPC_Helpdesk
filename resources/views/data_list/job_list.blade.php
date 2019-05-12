@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <h4>රැකියා අවස්ථා</h4>
      <hr>
      <h5>
          
      </h5>
      <hr>
      <div class="table-responsive">
        <table id="mytable" class="table-bordred table-striped data-list">
         
         <thead>           
           <th>ආයතනය</th>
           <th>තනතුර</th>
           <th>පුරප්පාඩු ගණන</th>
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