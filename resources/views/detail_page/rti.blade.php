@extends('layouts.app')
@section('pageTitle', 'තොරතුරු පනත')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h4 class="h1-responsive font-weight-bold my-4">තොරතුරු දැන ගැනීමේ අයිතිවාසිකම</h4>
        <h5 style="font-size: 1.1em;">පත්කල නිලධාරියා</h5>
        <div class="container">
            <div class="row " style="padding-top: 4px; margin-bottom: 20px;">
                <div class="col-md-3" style="">
                    <img src="{{ asset('image/appointofficer.png') }}"  style="height: 150px; margin: 10px 0 10px 0;">
                </div>
                <div class="col-md-9" style="">
                    <p class="image-detail">පරාක්‍රම පියසේන මයා</p>
                    <p class="image-detail">නියෝජ්‍ය ප්‍රධාන ලේකම් (ක්‍රමසම්පාදන)</p>
                    <p class="image-detail"><i class="fas fa-mobile-alt"></i> +94718714270</p>
                    <p class="image-detail"><i class="fas fa-phone-square"></i> +94452223082</p>
                    <p class="image-detail"><i class="fas fa-fax"></i> +94452223082</p>
                    <p class="image-detail"><i class="fas fa-at"></i> parakramage@yahoo.com</p>
                </div>
            </div>
        </div>
        <h5 style="font-size: 1.1em;">තොරතුරු නිලධාරියා</h5>
        <div class="container">
            <div class="row" style="padding-top: 4px; margin-bottom: 20px;">
                <div class="col-md-3" style="">
                    <img src="{{ asset('image/informationofficer.png') }}"  style="height: 150px; margin: 10px 0 10px 0;">
                </div>
                <div class="col-md-9" style="">
                    <p class="image-detail">ජී. ඩී. ජේ. කේ. ගොඩගේ මයා</p>
                    <p class="image-detail">අධ්‍යක්ෂ (ක්‍රමසම්පාදන)</p>
                    <p class="image-detail"><i class="fas fa-mobile-alt"></i> +94718714380</p>
                    <p class="image-detail"><i class="fas fa-phone-square"></i> +94452233779</p>
                    <p class="image-detail"><i class="fas fa-fax"></i> +94452222173</p>
                    <p class="image-detail"><i class="fas fa-at"></i> godagegdjk@yahoo.com</p>
                </div>
            </div>
        </div>
        <hr>
        <h5 style="font-size: 1.1em;">තොරතුරු පනත හරහා තොරතුරු ලබාගැනීමේ ලේඛන.</h5>
        <div class="container">
            <div class="row bg-dark" style="height: 30px; color: white; padding-top: 4px; margin-bottom: 20px;">
                <div class="col-md-1" style="">
                    #
                </div>
                <div class="col-md-11">
                    ලේඛන නාම
                </div>
            </div>
            <div class="row" style="height: 40px;">
                <div class="col-md-1">
                    01
                </div>
                <div class="col-md-11">
                    <a href="{{ asset('file/rti_act.pdf') }}" target="_blank">
                        තොරතුරු දැන ගැනීමේ අයිතිවාසිකම පිළිබඳ පනත
                    </a>
                </div>
            </div>
            <div class="row" style="height: 40px;">
                <div class="col-md-1">
                    02
                </div>
                <div class="col-md-11">
                    <a href="{{ asset('file/rti_act_order.pdf') }}" target="_blank">
                        තොරතුරු දැන ගැනීමේ අයිතිවාසිකම පිළිබඳ පනතේ නියෝග
                    </a>
                </div>
            </div>
            <div class="row" style="height: 40px;">
                <div class="col-md-1">
                    03
                </div>
                <div class="col-md-11">
                    <a href="{{ asset('file/RTI_01.pdf') }}" target="_blank">
                        තොරතුරු ලබාගැනීමේ අයදුම් පත්‍රය (RTI 01)
                    </a>
                </div>
            </div>
            <div class="row" style="height: 40px;">
                <div class="col-md-1">
                    04
                </div>
                <div class="col-md-11">
                    <a href="{{ asset('file/RTI_10.pdf') }}" target="_blank">
                        නම් කල නිලධාරියා වෙත යවන අභියාචනා අයදුම් පත්‍රය (RTI 10)
                    </a>
                </div>
            </div>
            </div>
            <br/>
            <h5 style="font-size: 1.1em;">තොරතුරු පනත සම්බන්ඳ විශේෂ වෙබ් අඩවි.</h5>
            <ul style="list-style:none !important; line-height:200%;">
                <li><a href="https://www.rti.gov.lk" target="_blank">තොරතුරු පනත නිල වෙබ් අඩවිය</a></li>
                <li><a href="http://www.rtiwatch.lk" target="_blank">Transparency International Sri Lanka</a></li>
            </ul>
            <hr>
            <h5 style="font-size: 1.1em;">804 ප්‍රධාන ලේකම් වැය ශීර්ෂ යටතේ ප්‍රාග්ධන ප්‍රතිපාදන වෙන් කරන ලද ව්‍යාපෘති</h5>
            <div class="container">
                
                <div class="row" style="height: 40px;">
                    <div class="col-md-1">
                        01
                    </div>
                    <div class="col-md-11">
                        <a href="{{ asset('file/common01.pdf') }}" target="_blank">
                            නම්‍යශීලී අරමුදල්
                        </a>
                    </div>
                </div>
                <div class="row" style="height: 40px;">
                    <div class="col-md-1">
                        02
                    </div>
                    <div class="col-md-11">
                        <a href="{{ asset('file/common02.pdf') }}" target="_blank">
                            විශේෂ අවශ්‍යතා සහිත ගම්මාන සංවර්ධන වැඩසටහන
                        </a>
                    </div>
                </div>
                <div class="row" style="height: 40px;">
                    <div class="col-md-1">
                        03
                    </div>
                    <div class="col-md-11">
                        <a href="{{ asset('file/common03.pdf') }}" target="_blank">
                            උපමානපාදක අරමුදල්
                        </a>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection