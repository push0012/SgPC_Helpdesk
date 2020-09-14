@extends('si.layouts.app')
@section('pageTitle', 'දත්ත සහ තොරතුරු')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h4 class="h1-responsive font-weight-bold my-4">දත්ත සහ තොරතුරු</h4>
        <p></p>
        
        <div class="card-body border-0">
                    <ul style="list-style-type: circle;">

                        <a href="{{ asset('file/publications/Data&Information/සබරගමුව පළාත් සංඛ්‍යාන අත්පොත - 2018.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">සබරගමුව පළාත් සංඛ්‍යාන අත්පොත - 2018</li>
                        </a>

                        <a href="{{ asset('file/publications/Data&Information/සබරගමුව පළාත් සංඛ්‍යාන අත්පොත - 2019.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">සබරගමුව පළාත් සංඛ්‍යාන අත්පොත - 2019</li>
                        </a>

                    </ul>
                </div>
        </div>  
    </div>
</div>
@endsection