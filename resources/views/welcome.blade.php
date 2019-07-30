<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>තොරතුරු කේන්ද්‍රය</title>  

    <link rel="icon" type="image/png" href="{{ asset('image/sg_info.png') }}" />
    
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/style1.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/home.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> 
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

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
                            <img src="{{ asset('image/flag.jpg') }}"  style="height: 65px; margin: 10px 0 10px 0;">
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
                @include('navbar')
            </div>
            <div class="container-fluid">
                <div class="col-md-12" >
                    <div class="row " style="">
                                <div class="col-md-3 left-menus bg-secondary-front" style="padding: 2%; color: black;">
                                    <h4 align="center" class="bg-info" style="border-radius:5px;">නිවේදන</h4>
                                    <ul style="list-style-type:square; padding-left:4%;" class="list-group list-group-flush">
                                        <li class="">industry's standard</li>
                                        <li class="">only five centuries</li>
                                        <li class="">It was in the 1960s</li>
                                        <li class="">simply random text</li>
                                    </ul>
                                </div>
                                <div class="col-md-9" style="padding: unset !important;">
                                    @include('slider')
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
                                            සබරගමුව උපකාරක කවුළුව : වෘත්තීය මංපෙත
                                        </h5>
                                    </div>
                                    <div style="padding: 0 15px; 0 15px;" class="">
                                        <p style="font-size:0.9em;" align="center">සබරගමුව පළාතේ තිරසාර සංවර්ධනයත්, ජනතාවගේ උසස් ජීවන මට්ටමත් ළඟාකරගැනීමේ අරමුණ පෙරදැරිව, 
                                            පවතින සම්පත් කාර්‍යක්ෂමව හා සඵලමත්ව යොදාගැනීම උදෙසා ක්‍රමවත් ක්‍රමසම්පාදන ක්‍රියාවලියක් තුළින් ප්‍රතිපත්ති තීරකයන්ට 
                                            සහ සියළු ආයතනයවලට අවශ්‍ය මඟපෙන්වීම හා පසුබල සහාය සැපයීම මෙහෙවර කරගත් සබරගමුව පළාත් 
                                        නියෝජ්‍ය ලේකම් (ක්‍රමසම්පාදන) කාර්යාලය විසින් ක්‍රියාත්මක සුවිශේෂී සේවාවක් ලෙස මෙම සේවාව ක්‍රියාත්මකයි.</p>
                                        <p style="font-size:0.9em;" align="center">සබරගමුව පළාතෙන් බිහිවන මානව සම්පත සඵලදායී ලෙස පළාතේ සහ රටේ සංවර්ධනයට දායක කරවීමත්, 
                                            පළාතෙහි ගොඩනැගුණු ව්‍යවසායයින් හඳුන්වාදීමත්. එමගින් වෙළඳපලක් නිර්මාණය කිරීමත් මෙහි ස්විශේෂී පර්මාර්ථයන් වන්නේය..
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
                                    <a href="{{ url('/human_reso')}}" class="img1 box bg-info">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="{{ asset('image/hrm.png') }}" style="border-radius: 18px; width: 100px; height: 100px;">
                                            </div>
                                            <div class="col-md-8">
                                                <h5 class="box-head">මානව සම්පත</h5>
                                                <span>උසස්, තෘතීක හා ද්විතීක  අධ්‍යාපන මට්ටම් වල මානව සම්පත සදහා 
                                                    වෘත්තීය අධ්‍යාපනය සඳහා ප්‍රවේශය සැපයීම හා වෘත්තතී මග පෙන්වීම
                                                </span>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="{{ url('/business')}}" class="img2 box bg-info">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="{{ asset('image/empl.png') }}" style="border-radius: 18px; width: 100px; height: 100px; ">
                                            </div>
                                            <div class="col-md-8">
                                                <h5 class="box-head">ව්‍යාසායකත්වය</h5>
                                                <span>මධ්‍යම හා සුළු පරිමාන ව්‍යවසායකයින්, ස්වයං රැකියා නියුක්තිනයින් සඳහා මගපෙන්වීම හා 
                                                ප්‍රචාරණයක් ලබාදීම</span>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="img3 box bg-info">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img  src="{{ asset('image/guid.png') }}" style="border-radius: 18px; width: 100px; height: 100px; ">
                                            </div>
                                            <div class="col-md-8">
                                                <h5 class="box-head">මාර්ගොපදේශනය</h5>
                                                <span>වෘත්තීය අධ්‍යාපනය හා ව්‍යාවසාකයින් සඳහා මාර්ගෝපදේශණය</span>
                                            </div>
                                        </div>
                                    </a>
                                </div> 
                            </div>
                        </div>     
                    </div>
                </div>
                <hr>
                @include('footer')
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