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
<body>
    <div class="container bg-light" >
        <div id="app">
            <a href="{{ url('/si/')}}">සිංහල</a> 
            <a href="{{ url('/en/')}}">English</a>  
            <a href="{{ url('/ta/')}}">தமிழ்</a>    
        </div>
    </div>
</body>
<script type="text/JavaScript">
      
</script>
</html>