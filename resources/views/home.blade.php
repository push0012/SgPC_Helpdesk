<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>තොරතුරු කේන්ද්‍රය</title>  

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
<body class="index-bg">
        <div class="container" >
            <div class="row" style="padding-top:50px !important; padding-bottom:50px !important;">
                <div class="col-md-4" style="text-align:center;">
                    
                </div>
                <div class="col-md-4" style="text-align:center;">
                    <img src="{{ asset('image/sabaraflag.png') }}" style="width: 50%;">
                </div>
                <div class="col-md-4" style="text-align:center;">
                    
                </div>
            </div>
            <div class="row" >
                <div class="col-md-4" style="text-align:center;">
                    <img src="{{ asset('image/sinhalahead.png') }}" style="width: 100%;">
                </div>
                <div class="col-md-4" style="text-align:center;">
                    <img src="{{ asset('image/tamilhead.png') }}" style="width: 100%;">
                </div>
                <div class="col-md-4" style="text-align:center;">
                    <img src="{{ asset('image/englishhead.png') }}" style="width: 100%;">
                </div>
            </div>
            
                    <div class="row" style="padding-top:50px !important; padding-bottom:50px !important;">
                        <div class="col-md-4" style="text-align:center;">
                            <a href="{{ url('/si/')}}">
                                <img src="{{ asset('image/sinhalabutton.png') }}" style="width: 100%;">
                            </a> 
                        </div>
                        
                        <div class="col-md-4" style="text-align:center;">
                            <a href="{{ url('/ta/')}}">
                            <img src="{{ asset('image/tamilbutton.png') }}" style="width: 100%;">
                            </a>  
                        </div>
                        
                        <div class="col-md-4" style="text-align:center;">
                            <a href="{{ url('/en/')}}">
                                <img src="{{ asset('image/englishbutton.png') }}" style="width: 100%;">
                            </a>    
                        </div>
                    </div>

        </div>

</body>
<script type="text/JavaScript">
      
</script>
</html>