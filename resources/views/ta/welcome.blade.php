<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>சபரமுவவின் உதவிக் கவுன்டர்</title>  

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
                                        <h3 style="float: left !important; color: white; font-size: 1.35em;">சபரமுவவின் உதவிக் கவுன்டர் -  தொழில் வழிகாட்டல்</h3>
                                    </div>
                                    <div class="col-md-12">
                                        <h4 style="float: left !important; color: white; font-size: 1.2em;">பிரதிப் பிரதான செயலாளர் (திட்டமிடல்) அலுவலகம்</h4>
                                    </div>
                                    <div class="col-md-12">
                                        <h5 style="float: left !important; color: white; font-size: 1em;">சபரகமுவ மாகாண சபை</h5>
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
                @include('ta.navbar')
            </div>
            <div class="container-fluid">
                <div class="col-md-12" >
                    <div class="row " style="">
                                <div class="col-md-3 left-menus bg-secondary-front" style="padding: 2%; color: black; max-height:300px !important;">
                                    <h4 align="center" class="bg-info" style="border-radius:5px; font-size: 1.25em;" >செய்திகள்</h4>
                                    <marquee direction = "up" scrollamount="3">
                                    <ul style="list-style-type:square; padding-left:5%; font-size:0.7em;" class="list-group list-group-flush">
                                        
                                        <li class="">
                                        இலங்கை பாராளுமன்ற கணக்காய்வுச் சபையின் 2017 
                                        நிதியாண்டுக்கான  தெளிவான நிதி முகாமைத்துவம் 
                                        மற்றும் செயற்றிறன் மிக்க காரிய சாதனைக்கான தங்க 
                                        விருது வழங்கப்பட்டமை.
                                        </li>
                                        <li class="">
                                        ----------------
                                        </li>
                                        <br/><br/><br/>
                                        <li class="">
                                        இப்போது உங்களுடைய வசதிக்காக பட்டதாரிகள் / 
                                        டிப்ளோமாதாரிகள்  சபரகமுவ மாகாண சபையில் 
                                        பதிவு செய்வதனை  இணையத்தின் மூலம் மேற் கொள்ளலாம். 
                                         <a href="{{ url('/resource/application/')}}">go</a>
                                        </li>
                                        
                                    </ul>
                                    </marquee>
                                </div>
                                <div class="col-md-9" style="padding: unset !important;">
                                    @include('si.slider')
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
                                            style="font-size:1.2em; font-weight:bold; padding: 5px 0 5px 0; font-size:1em;">
                                            சபரகமுவ உதவிக் கவுன்டர் -தொழில் வழிகாட்டல்
                                            </h5>
                                        </div>
                                    <div style="padding: 0 15px; 0 15px;" class="">
                                        <p style="font-size:0.8em;" align="justify">சபரகமுவ மாகாணத்தின் 
                                        நிலையான அபிவிருத்தியையும்,  மக்களின் உயர் வாழ்க்கை 
                                        மட்டத்தையும் ஏற்படுத்தும் நோக்கை முதன்மையாகக் கொண்டு 
                                        காணப்படுகின்ற வளங்களை செயற்றிறன் மிக்கதாகவும் ,  
                                        பயன்தரக்கூடிய விதத்திலும் உபயோகிப்பதற்காக  முறையான 
                                        திட்டமிடல் நடவடிக்கை ஒன்றின் மூலம்  கொள்கைத் 
                                        தீர்மானிப்போருக்கும் மற்றும்  சகல நிறுவனங்களுக்கும் 
                                        அவசியமான  வழிகாட்டுதலையும் , பிற்புலத்தையும்  
                                        வழங்குவதனை பணியாகக் கொண்ட சபரகமுவ மாகாண 
                                        (திட்டமிடல்) அலுவலகத்தினால் நிறைவேற்றப்படும் மிக முக்கிய 
                                        சேவையாக  இச் சேவை விளங்குகின்றது.</p>
                                        <p style="font-size:0.8em;" align="justify">சபரகமுவ மாகாணத்திலிருந்து  
                                        உருவாகும் மனித வளத்தை பயனுள்ளதாக  மாகாணத்தின் 
                                        மற்றும் நாட்டின்  அபிவிருத்திக்கு பயன்படுத்துதல்  மற்றும் 
                                        மாகாணத்தில் உருவாகிய தொழில் முயற்சியாளர்களை 
                                        அறிமுகப்படுத்துதல்  மூலம் தொழிற் சந்தையொன்றை  
                                        நிர்மாணிப்பது   இதன் விசேட நோக்கமாகும்..
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

                                    <a href="{{ url('/ta/resource')}}" class="img1 box bg-info">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="{{ asset('image/hrm.png') }}" style="border-radius: 18px; width: 100px; height: 100px;">
                                            </div>
                                            <div class="col-md-8">
                                                <h5 class="box-head" style="font-size:1em;">மனித வளங்கள்</h5>
                                                <span style="font-size:0.6em;">உயர் , மூன்றாம் , இரண்டாம் நிலை கல்வித் தரம் கொண்ட  மனித வளத்தை தொழிற் 
                                                கல்விக்கு பிரவேசிக்கச் செய்தல் மற்றும் தொழில் ரீதியிலான வழிகாட்டலை வழங்குதல்.
                                                </span>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="{{ url('/ta/humanresource')}}" class="img2 box bg-info">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="{{ asset('image/empl.png') }}" style="border-radius: 18px; width: 100px; height: 100px; ">
                                            </div>
                                            <div class="col-md-8">
                                                <h5 class="box-head" style="font-size:0.8em;">வள பங்களிப்பு குளம்</h5>
                                                <span style="font-size:0.6em;">சிறிய அளவிலான தொழில் முயற்சியாளர்களுக்கும் , சுயதொழிலில் ஈடுபடுபவர்களுக்கும் 
                                                வழிகாட்டல் மற்றும் விழிப்புணர்வு வழங்குதல்.</span>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="img3 box bg-info">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img  src="{{ asset('image/guid.png') }}" style="border-radius: 18px; width: 100px; height: 100px; ">
                                            </div>
                                            <div class="col-md-8">
                                                <h5 class="box-head" style="font-size:1em;">வழிகாட்டல்கள்</h5>
                                                <span style="font-size:0.6em;">தொழிற் கல்வி மற்றும் தொழில் முயற்சியாளர்களுக்கான வழிகாட்டல்</span>
                                            </div>
                                        </div>
                                    </a>

                                </div> 
                            </div>
                        </div> 
                    </div>
                    <!--- newly added section in 2020.01.21 -->
                    <hr>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12" style="padding: unset;">
                                <div class="" style="margin:5px;">
                                    <h5 class="align-self-center bg-info text-black" align="center" 
                                        style="font-size:1em; font-weight:bold; padding: 5px 0 5px 0;">
                                        அறிக்கைகள் மற்றும் அம்சங்கள்
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
                    </div>
                    <!-- newly added section over-->

                </div>
                <hr>
                @include('ta.footer')
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