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
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('css/jquery-3.3.1.min.js') }}"></script>
    <style>
        .left-menus{
            display: none !important;
        }
        .bg-secondarys{
            background-color:#b3cbcb;
        }
    </style>
</head>
<body>
    <div class="container-fluid bg-light">
    <div id="app">
     
        <header>
       
            <div class="container-fluid" >
                <a href="{{ url('/') }}">
                    <img src="{{ asset('image/head1.jpg') }}" class="responsives" style=" width: 100%; height: 150px; align:center;">
                </a>
            </div>
        </header> 
        @include('navbar') 
      
        
        <div class="container-fluid" style="">
        <div class="col-md-12" style="">
            <div class="row" style="margin-bottom: -15px;">
                <div class="col-md-2 bg-secondarys"  style=" color: white; padding: 1%;"> 
                    @include('leftmanu')
                </div>
                <div class="col-md-10 col-xs-12">
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
