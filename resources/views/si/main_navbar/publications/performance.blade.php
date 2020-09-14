@extends('si.layouts.app')
@section('pageTitle', 'කාර්යසාධන වාර්තා')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h4 class="h1-responsive font-weight-bold my-4">කාර්යසාධන වාර්තා</h4>
            <p></p>
        
                <div class="card-body border-0">
                    <ul style="list-style-type: circle;">

                        <a href="{{ asset('file/publications/PerformanceReports/2018 ආයතනික කාර්යසාධනය.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">2018 ආයතනික කාර්යසාධනය</li>
                        </a>
                        <a href="{{ asset('file/publications/PerformanceReports/2019 ආයතනික නිමැවුම් කාර්යසාධනය.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">2019 ආයතනික නිමැවුම් කාර්යසාධනය</li>
                        </a>
                        <a href="{{ asset('file/publications/PerformanceReports/2019 ප්‍රතිඵල සහ බලපෑම් පිළිබඳ ආයතනික කාර්යසාධනය.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">ප්‍රතිඵල සහ බලපෑම් පිළිබඳ ආයතනික කාර්යසාධනය - 2019</li>
                        </a>
                        <a href="{{ asset('file/publications/PerformanceReports/පළාත් කාර්යසාධන වාර්තාව 2018.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">පළාත් කාර්යසාධන වාර්තාව 2018</li>
                        </a>
                        <a href="{{ asset('file/publications/PerformanceReports/පළාත් කාර්යසාධන වාර්තාව 2019.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">පළාත් කාර්යසාධන වාර්තාව 2019</li>
                        </a>
                        <a href="{{ asset('file/publications/PerformanceReports/පළාත් පාලන ආයතනයන්හි කාර්යසාධනය 2019.pdf') }}" target="_blank" class="page_links">
                            <li style="padding-top:1%;">පළාත් පාලන ආයතනයන්හි කාර්යසාධනය 2019</li>
                        </a>
                    </ul>
                </div>
        </div>  
    </div>
</div>
@endsection