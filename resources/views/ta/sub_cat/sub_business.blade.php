@extends('ta.layouts.app')
@section('pageTitle', '‍‍ව්‍යපාර කාණ්ඩය')
@section('content')
<div class="container">
    <div class="row">
        <h3>ව්‍යාපාර කාණ්ඩය</h3>    
    </div>
    <div class="row justify-content-center">
        <div class="containers">
            <a href="{{ url('/business_list')}}" class="imgs1 box bg-secondary">
                <div class="row">
                    <div class="col-md-4">
                        <img  src="{{ asset('image/agriculture.png') }}" style="border-radius: 18px; width: 100px; height: 100px; ">
                    </div>
                    <div class="col-md-8">
                        <h5 class="box-head">කෘෂිකාර්මික 20</h5>
                        <span></span>
                        <img  src="{{ asset('image/go.png') }}" class="bottomright" style="width: 35px; height: 35px;">
                    </div>
                </div>
            </a>
            <a href="" class="imgs2 box bg-secondary">
                <div class="row">
                    <div class="col-md-4">
                        <img  src="{{ asset('image/printing.png') }}" style="border-radius: 18px; width: 100px; height: 100px; ">
                    </div>
                    <div class="col-md-8">
                        <h5 class="box-head">මුූද්‍රණ 15</h5>
                        <img  src="{{ asset('image/go.png') }}" class="bottomright" style="width: 35px; height: 35px;">
                    </div>
                </div>
            </a>
            
            <a href="" class="imgs3 box bg-secondary">
                <div class="row">
                    <div class="col-md-4">
                        <img  src="{{ asset('image/communication.png') }}" style="border-radius: 18px; width: 100px; height: 100px; ">
                    </div>
                    <div class="col-md-8">
                        <h5 class="box-head">සංන්නිවේදන 2</h5>
                        <img  src="{{ asset('image/go.png') }}" class="bottomright" style="width: 35px; height: 35px;">
                    </div>
                </div>
            </a>
            <a href="" class="imgs4 box bg-secondary">
                <div class="row">
                    <div class="col-md-4">
                        <img  src="{{ asset('image/drugs.png') }}" style="border-radius: 18px; width: 100px; height: 100px; ">
                    </div>
                    <div class="col-md-8">
                        <h5 class="box-head">ඹෟෂධ 15</h5>
                        <img  src="{{ asset('image/go.png') }}" class="bottomright" style="width: 35px; height: 35px;">
                    </div>
                </div>
            </a>
            <a href="" class="imgs5 box bg-secondary">
                <div class="row">
                    <div class="col-md-4">
                        <img  src="{{ asset('image/law.png') }}" style="border-radius: 18px; width: 100px; height: 100px; ">
                    </div>
                    <div class="col-md-8">
                        <h5 class="box-head">නීති උපදෙස් 5</h5>
                        <img  src="{{ asset('image/go.png') }}" class="bottomright" style="width: 35px; height: 35px;">
                    </div>
                </div>
            </a>

            <a href="{{ url('/business_ins')}}" class="imgs6 box bg-warning">
                <div class="row">
                    <div class="col-md-4">
                        <img  src="{{ asset('image/register.png') }}" style="border-radius: 18px; width: 100px; height: 100px; ">
                    </div>
                    <div class="col-md-8">
                        <h5 class="box-head">ව්‍යාපාර ලියාපදිංචිය</h5>
                        
                        <img  src="{{ asset('image/go.png') }}" class="bottomright" style="width: 35px; height: 35px;">
                    </div>
                </div>
            </a>
        </div>
        
    </div>
</div>
@endsection