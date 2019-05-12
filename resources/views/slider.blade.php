<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('css/bootstrap-4.3.1.min.css') }}" rel="stylesheet" type="text/css"> 
  <script src="{{asset('js/bootstrap-4.3.1.min.js')}}" type="text/javaScript"></script>
  
  <style>
    {box-sizing: border-box;}
    .mySlides {display: none;}
    img {vertical-align: middle;}

    /* Slideshow container */
    .slideshow-container {
      /*padding-top:2.6%;*/
      max-width: 100%;
      height: 300px;
      position: relative;
      margin: auto;
    }
    .carousel-item img{
      height:300px !important;
      width: 100% !important;
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* The dots/bullets/indicators */
    .dot {
      height: 15px;
      width: 15px;
      margin: 25px 10px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active {
      background-color: #717171;
    }


    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {font-size: 11px}
    }
  </style>
</head>
<body>

  <div class="slideshow-container">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{ asset('image/slide1.jpg') }}" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Agriculturel Support</h5>
            <p>Agriculturul fkjasfkjafk</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('image/slide2.jpg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('image/slide3.jpg') }}" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
<!--
<div class="mySlides carousel-fade">
  <div class="numbertext">1 / 3</div>
  <img src="{{ asset('image/slide1.jpg') }}" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides carousel-fade">
  <div class="numbertext">2 / 3</div>
  <img src="{{ asset('image/slide2.jpg') }}" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides carousel-fade">
  <div class="numbertext">3 / 3</div>
  <img src="{{ asset('image/slide3.jpg') }}" style="width:100%">
  <div class="text">Caption Three</div>
</div>
-->
</div>

<script>
  $('.carousel').carousel({
    interval: 4000
  })
</script>

</body>
</html> 
