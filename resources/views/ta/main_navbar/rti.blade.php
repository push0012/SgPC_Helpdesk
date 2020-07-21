@extends('ta.layouts.app')
@section('pageTitle', 'தகவல் அறியும் சட்டம்')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h4 class="h1-responsive font-weight-bold my-4">தகவல் அறியும் உரிமை</h4>
            <h5 style="font-size: 0.9em;">பெயர் குறிப்பிட்ட உத்தியோகத்தர்</h5>
            <div class="container">
                <div class="row " style="padding-top: 4px; margin-bottom: 20px;">
                    <div class="col-md-3" style="">
                        <img src="{{ asset('image/appointofficerori.jpg') }}"  style="height: 150px; margin: 10px 0 10px 0;">
                    </div>
                    <div class="col-md-9" style="">
                        <p class="image-detail" style="font-size: 0.75em;">திரு.பராக்கிரம பியசேன</p>
                        <p class="image-detail" style="font-size: 0.75em;">பிரதிப் பிரதான செயலாளர் (திட்டமிடல்)</p>
                        <p class="image-detail"><i class="fas fa-mobile-alt"></i> +94718714270</p>
                        <p class="image-detail"><i class="fas fa-phone-square"></i> +94452223082</p>
                        <p class="image-detail"><i class="fas fa-fax"></i> +94452223082</p>
                        <p class="image-detail"><i class="fas fa-at"></i> parakramage@yahoo.com</p>
                    </div>
                </div>
            </div>
            <h5 style="font-size: 0.9em;">தகவல் உத்தியோகத்தர்</h5>
            <div class="container">
                <div class="row" style="padding-top: 4px; margin-bottom: 20px;">
                    <div class="col-md-3" style="">
                        <img src="{{ asset('image/informationofficer.jpg') }}"  style="height: 150px; margin: 10px 0 10px 0;">
                    </div>
                    <div class="col-md-9" style="">
                        <p class="image-detail" style="font-size: 0.75em;">திரு. பீ. டி.ஜே. கே.கொடகே</p>
                        <p class="image-detail" style="font-size: 0.75em;">பணிப்பாளர் (திட்டமிடல்)</p>
                        <p class="image-detail"><i class="fas fa-mobile-alt"></i> +94718714380</p>
                        <p class="image-detail"><i class="fas fa-phone-square"></i> +94452233779</p>
                        <p class="image-detail"><i class="fas fa-fax"></i> +94452222173</p>
                        <p class="image-detail"><i class="fas fa-at"></i> godagegdjk@yahoo.com</p>
                    </div>
                </div>
            </div>
            <hr>
            <h5 style="font-size: 0.9em;">தகவல் சட்டத்தின் மூலம் தகவல்கள் பெற்றுக் கொள்ளும்  ஆவணங்கள்</h5>
            <div class="container">
                <div class="row bg-dark" style="height: 30px; color: white; padding-top: 4px; margin-bottom: 20px;">
                    <div class="col-md-1" style="">
                        #
                    </div>
                    <div class="col-md-11" style="font-size: 0.9em;">
                        கோவைப் பெயர்கள்
                    </div>
                </div>
                <div class="row" style="height: 40px;">
                    <div class="col-md-1">
                        01
                    </div>
                    <div class="col-md-11">
                        <a href="{{ asset('file/rti_act.pdf') }}" target="_blank" style="font-size: 0.75em;">
                            தகவல் அறியும்  உரிமைகள் தொடர்பான சட்டம்
                        </a>
                    </div>
                </div>
                <div class="row" style="height: 40px;">
                    <div class="col-md-1">
                        02
                    </div>
                    <div class="col-md-11">
                        <a href="{{ asset('file/rti_act_order.pdf') }}" target="_blank" style="font-size: 0.75em;">
                            தகவல் அறியும் உரிமைகள் தொடர்பான சட்டத்தின் கட்டளைகள்
                        </a>
                    </div>
                </div>
                <div class="row" style="height: 40px;">
                    <div class="col-md-1">
                        03
                    </div>
                    <div class="col-md-11">
                        <a href="{{ asset('file/RTI_01.pdf') }}" target="_blank" style="font-size: 0.75em;">
                            தகவல்களைப் பெற்றுக் கொள்வதற்கான விண்ணப்பப்படிவம் (RTI 01)
                        </a>
                    </div>
                </div>
                <div class="row" style="height: 40px;">
                    <div class="col-md-1">
                        04
                    </div>
                    <div class="col-md-11">
                        <a href="{{ asset('file/RTI_10.pdf') }}" target="_blank" style="font-size: 0.75em;">
                            பெயர் குறிப்பிடப்பட்ட உத்தியோகத்தருக்கு அனுப்பும் முறைப்பாட்டு விண்ணப்பப்படிவம் (RTI 10)
                        </a>
                    </div>
                </div>
            </div>
            <br/>
            <h5 style="font-size: 0.9em;">தகவல் சட்டம் தொடர்பான  விசேட  இணையத்தளம்</h5>
            <ul style="list-style:none !important; line-height:200%;">
                <li><a href="https://www.rti.gov.lk" target="_blank" style="font-size: 0.8em;">தகவல் சட்டத்தின் உத்தியோகபூர்வ இணையத்தளம்</a></li>
                <li><a href="http://www.rtiwatch.lk" target="_blank" style="font-size: 0.8em;">Transparency International Sri Lanka</a></li>
            </ul>
            <hr>
            
            
            <h5 style="font-size: 0.9em; padding-bottom:5px !important;">பிரதான செயலாளரின் செலவினத் தலைப்பின் கீழ் மூலதன நிதி ஒதுக்கப்பட்ட கருத்திட்டங்கள் 804</h5>
            
            <div class="container">
                <div class="accordion" id="accordionExample">
                    <ul style="list-style:none !important; line-height:200%;">
                        <li class="btn-link-collapsed show" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <span style="color:#0056b3; font-size: 0.8em;">2018 ஆம் ஆண்டிற்கான கருத்திட்டங்கள் &emsp;
                                <i style="font-size:1.5em; color:black" class="fas fa-sort-down fa-3x"></i>
                            </span>
                        </li>
                        <ul style="list-style:none !important; line-height:200%;">
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <li>
                                    <div class="row" style="height: 40px;">
                                        <div class="col-md-1">
                                            01
                                        </div>
                                        <div class="col-md-11">
                                            <a href="{{ asset('file/common01(2018).pdf') }}" target="_blank" style="font-size: 0.7em;">
                                                நெகிழும் நிதி
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row" style="height: 40px;">
                                        <div class="col-md-1">
                                            02
                                        </div>
                                        <div class="col-md-11">
                                            <a href="{{ asset('file/common02(2018).pdf') }}" target="_blank" style="font-size: 0.7em;">
                                                விசேடதேவையுள்ள கிராமங்களை அபிவிருத்தி செய்யும் நிகழ்ச்சித் திட்டம்
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row" style="height: 40px;">
                                        <div class="col-md-1">
                                            03
                                        </div>
                                        <div class="col-md-11">
                                            <a href="{{ asset('file/common03(2018).pdf') }}" target="_blank" style="font-size: 0.7em;">
                                                உபமான அடிப்படையிலான நிதி
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </ul>

                        <li class="btn-link-collapsed show" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <span style="color:#0056b3; font-size: 0.8em;">2019 ஆம் ஆண்டிற்கான கருத்திட்டங்கள் &emsp;
                                <i style="font-size:1.5em; color:black" class="fas fa-sort-down fa-3x"></i>
                            </span>
                        </li>
                        <ul style="list-style:none !important; line-height:200%;">
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <li>
                                    <div class="row" style="height: 40px;">
                                        <div class="col-md-1">
                                            01
                                        </div>
                                        <div class="col-md-11">
                                            <a href="{{ asset('file/common01.pdf') }}" target="_blank" style="font-size: 0.7em;">
                                                நெகிழும் நிதி
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row" style="height: 40px;">
                                        <div class="col-md-1">
                                            02
                                        </div>
                                        <div class="col-md-11">
                                            <a href="{{ asset('file/common02.pdf') }}" target="_blank" style="font-size: 0.7em;">
                                                விசேடதேவையுள்ள கிராமங்களை அபிவிருத்தி செய்யும் நிகழ்ச்சித் திட்டம்
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row" style="height: 40px;">
                                        <div class="col-md-1">
                                            03
                                        </div>
                                        <div class="col-md-11">
                                            <a href="{{ asset('file/common03.pdf') }}" target="_blank" style="font-size: 0.7em;">
                                                உபமான அடிப்படையிலான நிதி
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection