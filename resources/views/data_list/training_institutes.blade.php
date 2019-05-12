@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-6"><h4>පුහුණු අවස්ථා සපයන ආයතනයන්</h4></div>
        <div class="col-md-6">
        
        </div>
      </div>
      <hr>
      <div class="table-responsive">
        <table id="mytable" class="table-bordred table-striped link-list" style="text-align: left !important; padding-left: 5% !important;">
         <tbody>
            <tr>
                <td>
                <a href="#">
                තෘතියික අධ්‍යාපන හා වෘත්තීය අධ්‍යාපන ‍‍‍‍කොමිෂන් සභා‍‍ව  (TVEC)
                </a>
                </td>  
            </tr>
            <tr>
                <td>
                <a href="#">
                ජාතික ආධුනිකත්ව සහ කාර්මික පුහුණු කිරීම් අධිකාරිය (NAITA)
                </a>
                </td>
            </tr>
            <tr>
                <td>
                <a href="#">
                කාර්මික අධ්‍යාපන හා පුහුණු කිරීමේ දෙපාර්තමේන්තුව (DTET)
                </a>
                </td>
            </tr>
            <tr>
                <td>
                <a href="#">
                ශ්‍රී ලංකා වෘත්තීය පුහුණු අධිකාරිය (VTA)
                </a>
                </td>
            </tr>
            <tr>
                <td>
                <a href="#">
                ජාතික තරුණ සේවා සභාව (NYSC)
                </a>
                </td>
            </tr>
            <tr>
                <td>
                <a href="#">
                ලංකා-ජර්මන් කාර්මික අභ්‍යාස ආයතනය
                </a>
                </td>
            </tr>
            <tr>
                <td>
                <a href="#">
                ජාතික යොවුන් සේනාංකය
                </a>
                </td>
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