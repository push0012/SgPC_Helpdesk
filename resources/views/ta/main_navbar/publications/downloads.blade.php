@extends('si.layouts.app')
@section('pageTitle', 'බාගත කිරීම්')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h4 class="h1-responsive font-weight-bold my-4">බාගත කිරීම්</h4>
            <p></p>
        
                <div class="card-body border-0">
                    <ul style="list-style-type: circle;">

                        <a href="{{ asset('file/application/2020/grs.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">උපාධීධාරී ලියාපදිංචිය (සිංහල)</li>
                        </a>

                        <a href="{{ asset('file/application/2020/gre.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">උපාධීධාරී ලියාපදිංචිය (ඉංග්‍රීසි)</li>
                        </a>

                        <a href="{{ asset('file/application/2020/drs.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">ඩිප්ලෝමාධාරී ලියාපදිංචිය (සිංහල)</li>
                        </a>

                        <a href="{{ asset('file/application/2020/dre.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">ඩිප්ලෝමාධාරී ලියාපදිංචිය (ඉංග්‍රීසි)</li>
                        </a>

                    </ul>
                </div>
        </div>  
    </div>
</div>
@endsection