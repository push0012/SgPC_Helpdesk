<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Helpdesk</title>  

    <link rel="icon" type="image/png" href="{{ asset('image/sg_info.png') }}" />
    
    <link type="text/css" href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link type="text/css" href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <link type="text/css" href="{{ asset('css/style1.css') }}" rel="stylesheet"> 
    <link type="text/css" href="{{ asset('css/home.css') }}" rel="stylesheet"> 
    <link type="text/css" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> 
    <link type="text/css" rel="stylesheet" href="css/fontawesome/css/all.css">
    <link type="text/css" rel="dns-prefetch" href="//fonts.gstatic.com">

    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
</head>
<body>
    <div class="container bg-light" >
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
                                        <h3 style="float: left !important; color: white;">Sabaragamuwa Help Desk: Career Path</h3>
                                    </div>
                                    <div class="col-md-12">
                                        <h4 style="float: left !important; color: white;">Office of the Deputy Chief Secretary (Planning)</h4>
                                    </div>
                                    <div class="col-md-12">
                                        <h5 style="float: left !important; color: white;">Sabaragamuwa Provincial Council</h5>
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
                @include('en.navbar')
            </div>
            <div class="container-fluid">
                <div class="col-md-12" >
                    <div class="row " style="">
                                <div class="col-md-3 left-menus bg-secondary-front" style="padding: 2%; color: black; max-height:300px !important;">
                                    <h4 align="center" class="bg-info" style="border-radius:5px;">Announcements</h4>
                                    <marquee direction = "up" scrollamount="3">
                                    <ul style="list-style-type:square; padding-left:4%;" class="list-group list-group-flush">
                                        
                                        <li class="">
                                        We won the Gold Award of web based financial performance evaluation 
                                        programme - 2018 held by Sri Lanka Parliamentary Committee on Public 
                                        Accounts
                                        </li>
                                        <li class="">
                                        ----------------
                                        </li>
                                        <br/><br/><br/>
                                        <li class="">
                                        Online registration is now available here for you as Degree /Diploma holders 
                                        in Sabaragamuwa Province. 
                                         <a href="{{ url('/en/resource/application/')}}">Please Click here to Page.</a>
                                        </li>
                                        
                                    </ul>
                                    </marquee>
                                </div>
                                <div class="col-md-9" style="padding: unset !important;">
                                    @include('en.slider')
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container middle-content" style="color: black; text-align:justify;">
                        <div  style=" color:black;">
                            
                            <div class="container-fluid ">
                                <div class="row ">
                                    <div class="col-md-12 bg-info" style="padding: unset;">
                                        <div class="" style="margin:10px;">
                                            <h5 class="align-self-center box-head" align="center" 
                                            style="font-size:1.2em; font-weight:bold; padding: 5px 0 5px 0;">
                                            Sabaragamuwa Help Desk: The Career Path
                                            </h5>
                                        </div>
                                    <div style="padding: 0 15px; 0 15px;" class="">
                                        <p style="font-size:0.9em;" align="center">This special facility is offered to 
                                        reach our mission of Providing guidance and assistance to the policymakers and 
                                        all institutions through a systematic planning process in order to utilize 
                                        resources efficiently and effectively with the aim of achieving sustainable 
                                        development and living standard of the people in the Sabaragamuwa province.</p>
                                        <p style="font-size:0.9em;" align="center">Special Objectives of this project are, 
                                            - Effective contribution of human resources in the Sabaragamuwa Province for the development of the province and the country,
                                            - Introduction of established enterprises in the province and creating a market.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <hr>
                    <div class="container-fluid">
                        <div class="row" >
                            <div class="contents" align="center">
                                <div class="containers-dashboard" >

                                    <a href="{{ url('/en/resource')}}" class="img1 box bg-info">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="{{ asset('image/hrm.png') }}" style="border-radius: 18px; width: 100px; height: 100px;">
                                            </div>
                                            <div class="col-md-8">
                                                <h5 class="box-head" style="font-size:0.85em;">Graduates/Diploma Registration</h5>
                                                <span>Support to have the access to vocational education and provide career guidance 
                                                for human resources at higher, tertiary and secondary education levels
                                                </span>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="{{ url('/en/business')}}" class="img2 box bg-info">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="{{ asset('image/empl.png') }}" style="border-radius: 18px; width: 100px; height: 100px; ">
                                            </div>
                                            <div class="col-md-8">
                                                <h5 class="box-head">Entrepreneurship</h5>
                                                <span>Providing the guidance and market opportunities for medium and small scale 
                                                entrepreneurs and self-employers.</span>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="img3 box bg-info">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img  src="{{ asset('image/guid.png') }}" style="border-radius: 18px; width: 100px; height: 100px; ">
                                            </div>
                                            <div class="col-md-8">
                                                <h5 class="box-head">Guidance</h5>
                                                <span>Guidance for vocational education and entrepreneurs</span>
                                            </div>
                                        </div>
                                    </a>

                                </div> 
                            </div>
                        </div> 
                    </div>
                    <!--- newly added section in 2020.01.21 -->
                    <hr>
                    <!--<div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12" style="padding: unset;">
                                <div class="" style="margin:5px;">
                                    <h5 class="align-self-center bg-info text-black" align="center" 
                                        style="font-size:1.2em; font-weight:bold; padding: 5px 0 5px 0;">
                                        වාර්තා හා විශේෂාංග
                                    </h5>
                                </div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-3" style="text-align:center;">
                                        
                                            <a href="{{ asset('file/sabaragamuplan.pdf') }}" target="_blank" class="page_links">
                                                <img src="{{ asset('image/sabaragamuplancover.jpg') }}" style="width: 75%;">
                                                <p>Sabaragamuwa Plan <br/>2019-2023</p>
                                            </a>
                                    
                                        </div>
                                        <div class="col-md-3" style="margin:auto;"></div>
                                        <div class="col-md-3" style="margin:auto;"></div>
                                        <div class="col-md-3" style="margin:auto;"></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <!-- newly added section over-->

                </div>
                <hr>
                @include('en.footer')
            </div>
        </body>
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
        </html>