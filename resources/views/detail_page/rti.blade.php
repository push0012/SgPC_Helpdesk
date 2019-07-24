@extends('layouts.app')
@section('pageTitle', 'තොරතුරු පනත')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h4 class="h1-responsive font-weight-bold my-4">තොරතුරු දැන ගැනීමේ අයිතිවාසිකම</h4>
        <div class="container">
            <div class="row bg-danger" style="height: 40px; color: white; padding-top: 6px; margin-bottom: 20px;">
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
                    <a href="{{ asset('file/hirechi.pdf') }}" target="_blank">
                        තොරතුරු දැන ගැනීමේ අයිතිවාසිකම පිළිබඳ පනත
                    </a>
                </div>
            </div>
            <div class="row" style="height: 40px;">
                <div class="col-md-2">
                    02
                </div>
                <div class="col-md-10">
                    <a href="{{ asset('file/hirechi.pdf') }}" target="_blank">
                        තොරතුරු දැන ගැනීමේ අයිතිවාසිකම පිළිබඳ පනතේ නියෝග
                    </a>
                </div>
            </div>
            <div class="row" style="height: 40px;">
                <div class="col-md-2">
                    03
                </div>
                <div class="col-md-10">
                    <a href="{{ asset('file/hirechi.pdf') }}" target="_blank">
                        තොරතුරු නිලධාරියා පිළිබඳ විස්තර
                    </a>
                </div>
            </div>
            <div class="row" style="height: 40px;">
                <div class="col-md-2">
                    04
                </div>
                <div class="col-md-10">
                    <a href="{{ asset('file/hirechi.pdf') }}" target="_blank">
                        තොරතුරු වලට ප්‍රවේශ වීමේ පටිපාටිය
                    </a>
                </div>
            </div>
            <div class="row" style="height: 40px;">
                <div class="col-md-2">
                    05
                </div>
                <div class="col-md-10">
                    <a href="{{ asset('file/hirechi.pdf') }}" target="_blank">
                        තොරතුරු වලට ප්‍රවේශ වීමේ පටිපාටිය
                    </a>
                </div>
            </div>
            <div class="row" style="height: 40px; margin-bottom: 20px;">
                <div class="col-md-2">
                    06
                </div>
                <div class="col-md-10">
                    <a href="{{ asset('file/hirechi.pdf') }}" target="_blank">
                        2016 අංක 12 දරණ තොරතුරු දැනගැනීමේ අයිතිවාසිකම් පිළිබඳ පනත 8වන වගන්තිය යටතේ ප්‍රකාශයට පත් කළ යුතු අර්ධ වාර්ෂික වාර්තාව
                    </a>
                </div>
            </div>
        </div>
        </div>  
    </div>
</div>
@endsection