@extends('layouts.app')
@section('pageTitle', 'තොරතුරු පනත')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h4 class="h1-responsive font-weight-bold my-4">තොරතුරු දැන ගැනීමේ අයිතිවාසිකම</h4>
        <h5 style="font-size: 1.1em;">තොරතුරු පනත හරහා තොරතුරු ලබාගැනීමේ ලේඛන.</h5>
        <div class="container">
            <div class="row bg-dark" style="height: 30px; color: white; padding-top: 4px; margin-bottom: 20px;">
                <div class="col-md-2" style="">
                    #
                </div>
                <div class="col-md-10">
                    ලේඛන නාම
                </div>
            </div>
            <div class="row" style="height: 40px;">
                <div class="col-md-2">
                    01
                </div>
                <div class="col-md-10">
                    <a href="{{ asset('file/rti_act.pdf') }}" target="_blank">
                        තොරතුරු දැන ගැනීමේ අයිතිවාසිකම පිළිබඳ පනත
                    </a>
                </div>
            </div>
            <div class="row" style="height: 40px;">
                <div class="col-md-2">
                    02
                </div>
                <div class="col-md-10">
                    <a href="{{ asset('file/rti_act_order.pdf') }}" target="_blank">
                        තොරතුරු දැන ගැනීමේ අයිතිවාසිකම පිළිබඳ පනතේ නියෝග
                    </a>
                </div>
            </div>
            <div class="row" style="height: 40px;">
                <div class="col-md-2">
                    03
                </div>
                <div class="col-md-10">
                    <a href="{{ asset('file/RTI_01.pdf') }}" target="_blank">
                        තොරතුරු ලබාගැනීමේ අයදුම් පත්‍රය (RTI 01)
                    </a>
                </div>
            </div>
            <div class="row" style="height: 40px;">
                <div class="col-md-2">
                    04
                </div>
                <div class="col-md-10">
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
        </div>  
    </div>
</div>
@endsection