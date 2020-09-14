@extends('si.layouts.app')
@section('pageTitle', 'සංකල්ප පත්‍රිකා සහ සංවර්ධන සැලසුම්')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h4 class="h1-responsive font-weight-bold my-4">සංකල්ප පත්‍රිකා සහ සංවර්ධන සැලසුම්</h4>
            <p></p>
        
                <div class="card-body border-0">
                    <ul style="list-style-type: circle;">

                        <a href="{{ asset('file/publications/Conceptpapers/Ape gedara.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">අපේ ගෙදර</li>
                        </a>
                        <a href="{{ asset('file/publications/Conceptpapers/Pinnawala Iparanigama Stage II.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">පින්නවල ඉපැරණිගම තේමා උද්‍යානය සංවර්ධනය කිරීම අදියර 2</li>
                        </a>
                        <!--<a href="{{ asset('file/publications/ActionPlans/Action Plan-2020.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">ක්‍රියාත්මක සැලසුම් - 2020</li>
                        </a>
                        <a href="{{ asset('file/publications/ActionPlans/FiveyearVisionOrientedIntegratedDevelopmentPlan.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">Five year Vision Oriented Integrated Development Plan</li>
                        </a>
                        <a href="{{ asset('file/publications/ActionPlans/Persormance Improvement Stategic Plan for the Office 2019-2023.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">කාර්යසාධනාභිවර්ධන උපායමාර්ගික සැලැස්ම 2019-2023</li>
                        </a>-->
                    </ul>
                </div>
        </div>  
    </div>
</div>
@endsection