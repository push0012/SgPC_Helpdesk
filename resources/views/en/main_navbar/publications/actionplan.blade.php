@extends('si.layouts.app')
@section('pageTitle', 'ක්‍රියාත්මක සැලසුම්')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h4 class="h1-responsive font-weight-bold my-4">ක්‍රියාත්මක සැලසුම්</h4>
            <p></p>
        
                <div class="card-body border-0">
                    <ul style="list-style-type: circle;">

                        <a href="{{ asset('file/publications/ActionPlans/Action Plan-2018.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">ක්‍රියාත්මක සැලසුම් - 2018</li>
                        </a>
                        <a href="{{ asset('file/publications/ActionPlans/Action Plan -2019.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">ක්‍රියාත්මක සැලසුම් - 2019</li>
                        </a>
                        <a href="{{ asset('file/publications/ActionPlans/Action Plan-2020.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">ක්‍රියාත්මක සැලසුම් - 2020</li>
                        </a>
                        <a href="{{ asset('file/publications/ActionPlans/FiveyearVisionOrientedIntegratedDevelopmentPlan.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">Five year Vision Oriented Integrated Development Plan</li>
                        </a>
                        <a href="{{ asset('file/publications/ActionPlans/Persormance Improvement Stategic Plan for the Office 2019-2023.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">කාර්යසාධනාභිවර්ධන උපායමාර්ගික සැලැස්ම 2019-2023</li>
                        </a>
                    </ul>
                </div>
        </div>  
    </div>
</div>
@endsection