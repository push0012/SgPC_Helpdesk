@extends('layouts.app')
@section('pageTitle', 'තොරතුරු පනත')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h4 class="h1-responsive font-weight-bold my-4">තොරතුරු දැන ගැනීමේ අයිතිවාසිකම</h4>
        <div class="container">
            <div class="row bg-danger" style="height: 40px; color: white; padding-top: 6px; margin-bottom: 20px;">
                <div class="col-md-2" style="">
                    #
                </div>
                <div class="col-md-10">
                    ලේඛන නාම
                </div>
            </div>
            <div class="row" style="height: 40px;">
                <div class="col-md-2">
                    01
                </div>
                <div class="col-md-10">
                    <a href="{{ asset('file/rti_act.pdf') }}" target="_blank">
                        තොරතුරු දැන ගැනීමේ අයිතිවාසිකම පිළිබඳ පනත
                    </a>
                </div>
            </div>
            <div class="row" style="height: 40px;">
                <div class="col-md-2">
                    02
                </div>
                <div class="col-md-10">
                    <a href="{{ asset('file/rti_act_order.pdf') }}" target="_blank">
                        තොරතුරු දැන ගැනීමේ අයිතිවාසිකම පිළිබඳ පනතේ නියෝග
                    </a>
                </div>
            </div>
            <div class="row" style="height: 40px;">
                <div class="col-md-2">
                    03
                </div>
                <div class="col-md-10">
                    <a href="{{ asset('file/RTI_01.pdf') }}" target="_blank">
                        තොරතුරු ලබාගැනීමේ අයදුම් පත්‍රය (RTI 01)
                    </a>
                </div>
            </div>
            <div class="row" style="height: 40px;">
                <div class="col-md-2">
                    04
                </div>
                <div class="col-md-10">
                    <a href="{{ asset('file/RTI_10.pdf') }}" target="_blank">
                        නම් කල නිලධාරියා වෙත යවන අභියාචනා අයදුම් පත්‍රය (RTI 10)
                    </a>
                </div>
            </div>
            </div>
            <br/>
            <h5 style="font-size: 1.1em;">ක්ෂණික විමසීම් සඳහා පහතින් ඔබේ පණිවුඩය අප වෙත යොමු කරන්න.</h5>
            
            <div class="accordion" id="accordionExample">
            <div class="card border-0" >
                <div class="card-header border-0" id="headingOne" >
                <h2 class="mb-0">
                    <button class="btn btn-link-collapsed show" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <span>Click Here..</span>
                    </button>
                </h2>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body border-0">
                <form id="contact-form" name="contact-form" action="{{ url('sendinquiry') }}" method="POST">
            @csrf
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">ඔබගේ සම්පූර්ණ නම</label>
                        </div>
                    </div>
                    </div>

                    <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="address" name="address" class="form-control">
                            <label for="name" class="">ඔබගේ ලිපිනය</label>
                        </div>
                    </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="row">
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">ඔබගේ ඊ තැපැල් ලිපිනය</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="phone" name="phone" class="form-control">
                            <label for="email" class="">ඔබගේ දුරකථන අංකය</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
                <hr>
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
                            <textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea"></textarea>
                            <label for="message">ඔබගේ පණිවුඩය</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>
            <div class="text-center text-md-right">
                <a class="btn btn-primary text-white" onclick="document.getElementById('contact-form').submit();">පණිවුඩය යවන්න</a>
            </div>
            <div class="status"></div>
                </div>
                </div>
            </div>
            </div>
        </div>  
    </div>
</div>
@endsection