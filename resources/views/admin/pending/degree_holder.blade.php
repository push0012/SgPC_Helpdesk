@extends('layouts.app')
@section('pageTitle', 'සැකසුම් - උපාධිදාරී විස්තරාත්මක අයදුම්පත්')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div style="font-size:1.5em;">{{ __('උපාධිදාරී ලියාපදිංචිය අයදුම් - විස්තරාත්මක') }}</div>
        </div>
    </div>
    <hr/>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="container-fluid" style="font-size:0.85em !important;">
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Student Name:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ $degreeholders->stu_name}}</lable>
                        <input type="hidden" name="stu_id" id="stu_id" value="{{ $degreeholders->stu_id }}"/>
                        <input type="hidden" name="stu_mobile" id="stu_mobile" value="{{ $degreeholders->stu_mobile }}"/>
                        <input type="hidden" name="stu_email" id="stu_email" value="{{ $degreeholders->stu_email }}"/>
                        
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>N.I.C:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ $degreeholders->nic}}</lable>
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Address:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ $degreeholders->stu_address}}</lable>
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Mobile:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ $degreeholders->stu_mobile}}</lable>
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Email:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ $degreeholders->stu_email}}</lable>
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Degree Type:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ $degreeholders->dig_type}}</lable>
                        
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Stream:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ $degreeholders->stream}}</lable>
                        
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Degree Title:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ $degreeholders->cos_title}}</lable>
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>University:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ $degreeholders->clg_name}}</lable>
                        <input type="hidden" name="clg_id" id="clg_id" value="{{ $degreeholders->clg_id }}"/>
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Medium:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ $degreeholders->medium}}</lable>
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Result:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ $degreeholders->degree_class}}</lable>
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Effective Date:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable>{{ $degreeholders->effective_date}}</lable>
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Registered Date:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable name="reg_date" id="reg_date">{{ Carbon\Carbon::parse($degreeholders->created_at)->format('Y-m-d')}}</lable>
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Last Registered Number:</lable>
                    </div>
                    <div class="col-md-9">
                        <lable name="last_reg_no" id="last_reg_no">{{ $last_degree->last_degree }}</lable>
                    </div>
                </div>

                <div class="row digdetail">
                    <div class="col-md-3">
                        <lable>Register Number:</lable>
                    </div>
                    <div class="col-md-9">
                    <input type="text" name="g_reg_no" id="g_reg_no" class="form-control" />
                    </div>
                </div>
                <div class="row digdetail">
                    <div class="col-md-4" >
                        <div>
                            <input class="btnAction" type="button" name="g_reg_app" id="g_reg_app" value="Approve" >
                        </div>
                    </div>
                    <div class="col-md-4" >
                        <div>
                            <input class="btnAction" type="button" name="g_reg_rej" id="g_reg_rej" value="Reject" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" >
            <div class="slideshow-container">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach ( json_decode($imagesave->img_url) as $picture )
                            <li data-target="#carouselExampleIndicators" data-slide-to=""></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach ( json_decode($imagesave->img_url) as $picture )
                            <div class="carousel-item  {{ $loop->first ? ' active' : '' }}">
                                <a href="{{ asset($picture) }}" data-toggle="lightbox" data-gallery="gallery-name">
                                    <img class="d-block w-100" src="{{ asset($picture) }}" >
                                </a>
                            </div>
                        @endforeach
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
            </div>
        </div>
    </div>
</div>
@endsection
<!-- Push a style dynamically from a view -->
@push('styles')
<style>
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
      height:100% !important;
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
    .carousel-control-next,
    .carousel-control-prev {
        filter: invert(100%);
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {font-size: 11px}
    }
    </style>
@endpush

<!-- Push a script dynamically from a view -->
@push('scripts')
<script type="text/javaScript">

</script>
@endpush