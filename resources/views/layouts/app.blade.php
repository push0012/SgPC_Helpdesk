<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'තොරතුරු කේන්ද්‍රය') }}</title>

    <!-- Scripts -->
    

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="{{ asset('image/sg_info.png') }}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> 
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <style>
        .left-menus{
            display: none !important;
        }
        .bg-secondarys{
            background-color:#b3cbcb;
        }
    </style>
    <script type="text/JavaScript">
            window.onscroll = function() {myFunction()};
            var header = document.getElementById("myHeader");
            var sticky = header.offsetTop;
            
            function myFunction() {
                if (window.pageYOffset > sticky) {
                    header.classList.add("sticky");
                    document.getElementById("nav-brand").style.fontSize = "20px";
                } else {
                    header.classList.remove("sticky");
                    document.getElementById("nav-brand").style.fontSize = "30px";
                }
            }
        </script>
</head>
<body>
    <div class="container bg-light">
    <div id="app"> 
     
            <div>
                <div class="container" >
                    <div class="row" style="height: 50%; background-color: black !important;">
                        <div class="col-md-3 d-flex align-items-center justify-content-center">
                            <img src="{{ asset('image/flag.jpg') }}"  style="height: 65px; margin: 10px 0 10px 0;">
                        </div>
                        <div class="col-md-9 align-self-center" >
                            <h3 style="float: left !important; color: white;">සබරගමුව උපකාරක කවුළුව : වෘත්තීය මංපෙත</h3>
                            <h5 style="float: left !important; color: white;">සබරගමුව පළාත් සභාව</h5>
                        </div>
                    </div>
                    <!--<a href="{{ url('/') }}">
                        <img src="{{ asset('image/head1.jpg') }}"  style="width: 100%; height: 100% !important; align:center;">
                    </a>-->
                </div>
            </div> 
            <div class="header">
                @include('navbar')
            </div>
        
        <div class="container" style="">
        <div class="col-md-12" style="">
            <div class="row" style="margin-bottom: -15px;">
                
                <div class="col-md-12 col-xs-12">
                    <main class="py-4">
                        @yield('content')
                    </main>
                </div>
            </div>
            </div>
        </div>
        @include('footer')
    </div>
</body>

</html>
