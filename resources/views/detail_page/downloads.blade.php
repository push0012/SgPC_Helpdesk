@extends('layouts.app')
@section('pageTitle', 'බාගත කිරීම්')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="accordion" id="accordionExample">
            <div class="card border-0" >
                <div class="card-header border-0" id="headingOne" >
                <h2 class="mb-0">
                    <button class="btn btn-link-collapsed show" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h5>අයදුම්පත්‍ර</h5>
                    </button>
                </h2>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body border-0">
                    <ul style="list-style-type: none;">
                        <li style="padding-top:1%;">උපාධීධාරී ලියාපදිංචිය (සිංහල)</li>
                        <li style="padding-top:1%;">උපාධීධාරී ලියාපදිංචිය (ඉංග්‍රීසි)</li>
                        <li style="padding-top:1%;">ඩිප්ලෝමාධාරී ලියාපදිංචිය (සිංහල)</li>
                        <li style="padding-top:1%;">ඩිප්ලෝමාධාරී ලියාපදිංචිය (ඉංග්‍රීසි)</li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="card border-0">
                <div class="card-header border-0" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link-collapsed show" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h5>චක්‍රලේඛ</h5>
                    </button>
                </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body border-0">
                    නැත
                </div>
                </div>
            </div>
            <div class="card border-0">
                <div class="card-header border-0" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link-collapsed show" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h5>ටෙන්ඩර් දැන්වීම්</h5>
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
                    <h5>අත්පොත්</h5>
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