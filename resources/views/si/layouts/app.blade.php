<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pageTitle')</title>

    <!-- Scripts -->
    

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('image/sg_info.png') }}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">  
    <link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet"> 
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">  
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    @stack('styles')
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js')}}" defer></script>
    <script src="{{ asset('js/bootstrap-notify.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap-notify.min.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js" defer></script>
    <script src="{{ asset('js/commonfield.js') }}" defer></script>
    <script src="{{ asset('js/gcommon.js') }}" defer></script>
    <script src="{{ asset('js/languagetable.js') }}" defer></script>
    <script src="{{ asset('js/datasave.js') }}" defer></script>
    <script src="{{ asset('js/notification.js') }}" defer></script>
    <script src="{{ asset('js/captcha.js') }}" defer></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" defer></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" defer></script>

    <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js" defer></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js" defer></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" defer></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js" defer></script>
    
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
                            <img src="{{ asset('image/flag.jpg') }}"  style="height: 80px; margin: 10px 0 10px 0;">
                        </div>
                        <div class="col-md-9 align-self-center" >
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 style="float: left !important; color: white;">සබරගමුව උපකාරක කවුළුව : වෘත්තීය මංපෙත</h3>
                                    </div>
                                    <div class="col-md-12">
                                        <h4 style="float: left !important; color: white;">නියෝජ්‍ය ප්‍රධාන ලේකම් (ක්‍රමසම්පාදන) කර්යාලය</h4>
                                    </div>
                                    <div class="col-md-12">
                                        <h5 style="float: left !important; color: white;">සබරගමුව පළාත් සභාව</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<a href="{{ url('/') }}">
                        <img src="{{ asset('image/head1.jpg') }}"  style="width: 100%; height: 100% !important; align:center;">
                    </a>-->
                </div>
            </div> 
            <div class="header">
                @include('si.navbar')
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
        @include('si.footer')
    </div>
    @stack('scripts')
</body>

</html>
