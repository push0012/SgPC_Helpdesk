@extends('ta.layouts.app')
@section('pageTitle', 'எம்மைத் தொடர்பு கொள்ளவும்')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h5 class="h1-responsive font-weight-bold my-4">எம்மைத் தொடர்பு கொள்ளவும்</h5>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5" style="font-size: 0.8em;">
    உங்களுக்கு ஏதாவது பிரச்சினைகள் காணப்படுகின்றதா? தயவுசெய்து நேரடியாக எம்மைத் தொடர்புகொள்ளத் தயங்க வேண்டாம்.
    </p>
    <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="{{ url('sendmail') }}" method="POST">
            @csrf
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="" style="font-size: 0.8em;">உங்களுடைய பெயர்</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="" style="font-size: 0.8em;">உங்களுடைய மின்னஞ்சல் முகவரி</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="" style="font-size: 0.8em;">தலைப்பு</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message" style="font-size: 0.8em;">எமது அலுவலகம் தொடர்பான விமர்சனங்கள்</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();" style="font-size: 0.8em;">அனுப்புக</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p style="font-size:0.75em;">
                        பிரதிப் பிரதான செயலாளர் (திட்டமிடல்) அலுவலகம், சபரகமுவ மாகாண சபை, புதிய நகரம், රත්නපුර  
                    </p>
                </li>
                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+94 45 2222173</p>
                </li>
                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>spcplan@yahoo.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>
        </div>  
    </div>
</div>
@endsection