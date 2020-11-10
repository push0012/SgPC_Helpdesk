@extends('si.layouts.app')
@section('pageTitle', 'සම්පත් දායක සංචිතය')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h4 class="h1-responsive font-weight-bold my-4">සම්පත් දායක සංචිතය</h4>
            <p></p>
        
                <div class="card-body border-0">
                    <ul style="list-style-type: circle;">

                        <a href="{{ asset('file/humanresource/Mr. Prakrama Piyasena.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">Mr. Prakrama Piyasena</li>
                        </a>
                        <a href="{{ asset('file/humanresource/Mr. Jagath Godage.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">Mr. Jagath Godage</li>
                        </a>
                        <a href="{{ asset('file/humanresource/Mr. Anurudha Bandara.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">Mr. Anurudha Bandara</li>
                        </a>
                        <a href="{{ asset('file/humanresource/Mrs. N.M. Maraliya.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">Mrs. N.M. Maraliya</li>
                        </a>
                        <a href="{{ asset('file/humanresource/Mr. D.W. Upali Rajapaksha.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">Mr. D.W. Upali Rajapaksha</li>
                        </a>
                        <a href="{{ asset('file/humanresource/Mr. P.L. Susantha Dharmakeerthi.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">Mr. P.L. Susantha Dharmakeerthi</li>
                        </a>
                        <a href="{{ asset('file/humanresource/Mrs. K.M. Hemali Bandara.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">Mrs. K.M. Hemali Bandara</li>
                        </a>
                        <a href="{{ asset('file/humanresource/Mr. M.S.K. Premarathna.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">Mr. M.S.K. Premarathna</li>
                        </a>
                        <a href="{{ asset('file/humanresource/Mr. Pushpamal Gunasena.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">Mr. Pushpamal Gunasena</li>
                        </a>

                    </ul>
                </div>
        </div>  
    </div>
</div>
@endsection