@extends('layouts.app')
@section('pageTitle', 'අපව අමතන්න')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h4 class="h1-responsive font-weight-bold my-4">අපව අමතන්න</h4>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">
        ඔබට කිසියම් ප්‍රශ්නයක් තිබේද? කරුණාකර අපව කෙලින්ම සම්බන්ධ කර ගැනීමට පසුබට නොවන්න.
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
                            <label for="name" class="">ඔබගේ නම</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">ඔබගේ ඊ තැපැල් ලිපිනය</label>
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
                            <label for="subject" class="">මාත‍ෘකාව</label>
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
                            <label for="message">අප කාර්යාලය පිලිබඳ චෝදනා හෝ ප්‍රසංශා</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">යවන්න</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p style="font-size:0.75em;">
                    
                    නියෝජ්‍ය ප්‍රධාන ලේකම් (ක්‍රමසම්පාදන) කර්යාලය, සබරගමුව පළාත් සභාව, නවනගරය, රත්නපුර  
                
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