@extends('ta.layouts.app')
@section('pageTitle', 'தரவிறக்கங்கள்')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h4 class="h1-responsive font-weight-bold my-4">தரவிறக்கங்கள்</h4>
        <p>எமது நிறுவனத்தினால் நிறைவேற்றப்படும் எல்லா செயற்பாடுகளுக்குமான பதிவுகளை  இங்கு தரவிறக்கம் செய்யலாம்.</p>
        
        <div class="accordion" id="accordionExample">
            <div class="card border-0" >
                <div class="card-header border-0" id="headingOne" >
                <h2 class="mb-0">
                    <button class="btn btn-link-collapsed show" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h5 style="font-size: 0.9em;">
                        விண்ணப்பங்கள்
                        <span class="btn" style="font-size:0.5em;">Click Here...</span>
                    </h5>
                    </button>
                </h2>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body border-0">
                    <ul style="list-style-type: none;">

                        <a href="{{ asset('file/application/2020/grs.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%; font-size: 0.75em;">வேலையற்ற பட்டதாரிகள் தொடர்பான ஆய்வுகள் (சீ)</li>
                        </a>

                        <a href="{{ asset('file/application/2020/gre.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%; font-size: 0.75em;">வேலையற்ற பட்டதாரிகள் தொடர்பான ஆய்வுகள் (E)</li>
                        </a>

                        <a href="{{ asset('file/application/2020/drs.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%; font-size: 0.75em;">வேலையற்ற டிப்ளோமாதாரிகள்  தொடர்பான ஆய்வுகள் (சீ)</li>
                        </a>

                        <a href="{{ asset('file/application/2020/dre.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%; font-size: 0.75em;">வேலையற்ற டிப்ளோமாதாரிகள்  தொடர்பான ஆய்வுகள் (E)</li>
                        </a>

                    </ul>
                </div>
                </div>
            </div>
            <div class="card border-0">
                <div class="card-header border-0" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link-collapsed show" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h5 style="font-size: 0.9em;">
                        சுற்றறிக்கைகள்
                        <span class="btn" style="font-size:0.5em;">Click Here...</span>
                    </h5>
                    </button>
                </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body border-0" style="font-size: 0.75em;">
                    නැත
                </div>
                </div>
            </div>
            <div class="card border-0">
                <div class="card-header border-0" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link-collapsed show" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h5 style="font-size: 0.9em;">
                        விலைமனுக் கோரல்
                        <span class="btn" style="font-size:0.5em;">Click Here...</span>
                    </h5>
                    </button>
                </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body border-0">
                   නැත
                </div>
                </div>
            </div>

            <div class="card border-0">
                <div class="card-header border-0" id="headingFour">
                <h2 class="mb-0">
                    <button class="btn btn-link-collapsed show" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <h5 style="font-size: 0.9em;">
                        புள்ளி விபரத் தரவுகள்
                        <span class="btn" style="font-size:0.5em;">Click Here...</span>
                    </h5>
                    </button>
                </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body border-0">
                   නැත
                </div>
                </div>
            </div>
            </div>
        </div>  
    </div>
</div>
@endsection