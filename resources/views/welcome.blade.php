<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>තොරතුරු කේන්ද්‍රය</title>  

    <link rel="icon" type="image/png" href="{{ asset('image/sg_info.png') }}" />
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/home.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> 
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    
    <style>
        html, body {
            /*background: url("../image/header2.jpg") !important;*/
            background-repeat: inherit !important;
            background-color: #fff;
            color: #636b6f;

            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            /*top: 18px;*/
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: white;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        .bg-secondary-front{
            background-color:#b3cbcb;
        }
    </style>
</head>
<body>

    <div class="container-fluid bg-light" >
        <div id="app"> 
       
            <header >
                <div class="container-fluid" >
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('image/head1.jpg') }}"  style="width: 100%; height: 100% !important; align:center;">
                        </a>
                </div>
            </header> @include('navbar')
            @include('slider')
            
            <div class="container-fluid middle-content" style="color: black; text-align:justify;">
                <div  style=" color:black;">
                    <div class="col-md-12" style="">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-9" >
                                    <h5 class="text-dark" style="margin-top: 10px; font-size:2em; font-weight:bold;">සබරගමුව උපකාරක කවුළුව : වෘත්තීය මංපෙත</h5>
                                    <hr>
                                    <p style="font-size:0.9em;">සබරගමුව පළාතේ තිරසාර සංවර්ධනයත්, ජනතාවගේ උසස් ජීවන මට්ටමත් ළඟාකරගැනීමේ අරමුණ පෙරදැරිව, 
                                        පවතින සම්පත් කාර්‍යක්ෂමව හා සඵලමත්ව යොදාගැනීම උදෙසා ක්‍රමවත් ක්‍රමසම්පාදන ක්‍රියාවලියක් තුළින් ප්‍රතිපත්ති තීරකයන්ට 
                                        සහ සියළු ආයතනයවලට අවශ්‍ය මඟපෙන්වීම හා පසුබල සහාය සැපයීම මෙහෙවර කරගත් සබරගමුව පළාත් 
                                    නියෝජ්‍ය ලේකම් (ක්‍රමසම්පාදන) කාර්යාලය විසින් ක්‍රියාත්මක සුවිශේෂී සේවාවක් ලෙස මෙම සේවාව ක්‍රියාත්මකයි.</p>
                                    <p style="font-size:0.9em;">සබරගමුව පළාතෙන් බිහිවන මානව සම්පත සඵලදායී ලෙස පළාතේ සහ රටේ සංවර්ධනයට දායක කරවීමත්, 
                                        පළාතෙහි ගොඩනැගුණු ව්‍යවසායයින් හඳුන්වාදීමත්. එමගින් වෙළඳපලක් නිර්මාණය කිරීමත් මෙහි ස්විශේෂී පර්මාර්ථයන් වන්නේය..
                                    </p>
                                </div>
                                <div class="col-md-3" style="padding: 30px; vertical-align:middle !important; text-align: center;" >
                                    <img src="{{ asset('image/title_logo.png') }}" style="width: 255px; height: 200px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="container-fluid">
                <div class="col-md-12" style="">
                    <div class="row">
                        <div class="col-md-3 left-menus bg-secondary-front" style="padding: 2%; color: black;">

                            <h4 align="center" class="bg-info" style="border-radius:5px;">නිවේදන</h4>

                            <ul style="list-style-type:square; padding-left:4%;" class="list-group list-group-flush">
                                <marquee style="" direction="up" height="100%" scrollamount="1">
                                    <li class="">industry's standard</li></marquee>
                                    <marquee style="" direction="up" height="200%" scrollamount="1">
                                    <li class="">only five centuries</li></marquee>
                                    <li class="">It was in the 1960s</li>
                                    <li class="">simply random text</li>
                                 
                            </ul>

                        </div>
                        <div class="col-md-9">
                            
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

                            <hr>
                            <p>සබරගමුව පළාතේ තිරසාර සංවර්ධනයත්, ජනතාවගේ උසස් ජීවන මට්ටමත් ළඟාකරගැනීමේ අරමුණ පෙරදැරිව, 
                                පවතින සම්පත් කාර්‍යක්ෂමව හා සඵලමත්ව යොදාගැනීම උදෙසා ක්‍රමවත් ක්‍රමසම්පාදන ක්‍රියාවලියක් තුළින් ප්‍රතිපත්ති තීරකයන්ට 
                                සහ සියළු ආයතනයවලට අවශ්‍ය මඟපෙන්වීම හා පසුබල සහාය සැපයීම මෙහෙවර කරගත් සබරගමුව පළාත් 
                            නියෝජ්‍ය ලේකම් (ක්‍රමසම්පාදන) කාර්යාලය විසින් ක්‍රියාත්මක සුවිශේෂී සේවාවක් ලෙස මෙම සේවාව ක්‍රියාත්මකයි.</p>
                            <p>සබරගමුව පළාතෙන් බිහිවන මානව සම්පත සඵලදායී ලෙස පළාතේ සහ රටේ සංවර්ධනයට දායක කරවීමත්, 
                                පළාතෙහි ගොඩනැගුණු ව්‍යවසායයින් හඳුන්වාදීමත්. එමගින් වෙළඳපලක් නිර්මාණය කිරීමත් මෙහි ස්විශේෂී පර්මාර්ථයන් වන්නේය..
                            </p>
                        </div>
                        </div>
                </div>     
            </div>
        </div>
@include('footer')
</div>
</body>
</html>