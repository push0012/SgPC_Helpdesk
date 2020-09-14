@extends('ta.layouts.app')
@section('pageTitle', 'தரவு மற்றும் தகவல்')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h4 class="h1-responsive font-weight-bold my-4">தரவு மற்றும் தகவல்</h4>
        <p></p>
        
        <div class="card-body border-0">
                    <ul style="list-style-type: circle;">

                        <a href="{{ asset('file/publications/Data&Information/Sabaragamuwa Provincial Statistical pocket Book 2018.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">Sabaragamuwa Provincial Statistical Pocket Book - 2018</li>
                        </a>

                        <a href="{{ asset('file/publications/Data&Information/Sabaragamuwa Provincial Statistical Pocket Book - 2019.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">Sabaragamuwa Provincial Statistical Pocket Book - 2019</li>
                        </a>

                    </ul>
                </div>
        </div>  
    </div>
</div>
@endsection