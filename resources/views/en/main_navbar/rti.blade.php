@extends('en.layouts.app')
@section('pageTitle', 'Right To Information')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h4 class="h1-responsive font-weight-bold my-4">Right To Information</h4>
            <h5 style="font-size: 1.1em;">Designated Officer</h5>
            <div class="container">
                <div class="row " style="padding-top: 4px; margin-bottom: 20px;">
                    <div class="col-md-3" style="">
                        <img src="{{ asset('image/appointofficerori.jpg') }}"  style="height: 150px; margin: 10px 0 10px 0;">
                    </div>
                    <div class="col-md-9" style="">
                        <p class="image-detail">Mr. Parakrama Piyasena</p>
                        <p class="image-detail">Deputy Chief Secretary (Planning)</p>
                        <p class="image-detail"><i class="fas fa-mobile-alt"></i> +94718714270</p>
                        <p class="image-detail"><i class="fas fa-phone-square"></i> +94452223082</p>
                        <p class="image-detail"><i class="fas fa-fax"></i> +94452223082</p>
                        <p class="image-detail"><i class="fas fa-at"></i> parakramage@yahoo.com</p>
                    </div>
                </div>
            </div>
            <h5 style="font-size: 1.1em;">Information Officer</h5>
            <div class="container">
                <div class="row" style="padding-top: 4px; margin-bottom: 20px;">
                    <div class="col-md-3" style="">
                        <img src="{{ asset('image/informationofficer.jpg') }}"  style="height: 150px; margin: 10px 0 10px 0;">
                    </div>
                    <div class="col-md-9" style="">
                        <p class="image-detail">Mr. G.D.J.K. Godage</p>
                        <p class="image-detail">Director (Planning)</p>
                        <p class="image-detail"><i class="fas fa-mobile-alt"></i> +94718714380</p>
                        <p class="image-detail"><i class="fas fa-phone-square"></i> +94452233779</p>
                        <p class="image-detail"><i class="fas fa-fax"></i> +94452222173</p>
                        <p class="image-detail"><i class="fas fa-at"></i> godagegdjk@yahoo.com</p>
                    </div>
                </div>
            </div>
            <hr>
            <h5 style="font-size: 1.1em;">Documents for obtaining information through the Right to Information Act.</h5>
            <div class="container">
                <div class="row bg-dark" style="height: 30px; color: white; padding-top: 4px; margin-bottom: 20px;">
                    <div class="col-md-1" style="">
                        #
                    </div>
                    <div class="col-md-11">
                        Document Names
                    </div>
                </div>
                <div class="row" style="height: 40px;">
                    <div class="col-md-1">
                        01
                    </div>
                    <div class="col-md-11">
                        <a href="{{ asset('file/rti_act.pdf') }}" target="_blank">
                        Right to Information Act
                        </a>
                    </div>
                </div>
                <div class="row" style="height: 40px;">
                    <div class="col-md-1">
                        02
                    </div>
                    <div class="col-md-11">
                        <a href="{{ asset('file/rti_act_order.pdf') }}" target="_blank">
                            Orders of the Right to Information Act
                        </a>
                    </div>
                </div>
                <div class="row" style="height: 40px;">
                    <div class="col-md-1">
                        03
                    </div>
                    <div class="col-md-11">
                        <a href="{{ asset('file/RTI_01.pdf') }}" target="_blank">
                            Information application (RTI 01)
                        </a>
                    </div>
                </div>
                <div class="row" style="height: 40px;">
                    <div class="col-md-1">
                        04
                    </div>
                    <div class="col-md-11">
                        <a href="{{ asset('file/RTI_10.pdf') }}" target="_blank">
                            Appeal to the Designated Officer (RTI 10)
                        </a>
                    </div>
                </div>
            </div>
            <br/>
            <h5 style="font-size: 1.1em;">Important links related to Right to Information Act.</h5>
            <ul style="list-style:none !important; line-height:200%;">
                <li><a href="https://www.rti.gov.lk" target="_blank">Official Website of Right to Information Act</a></li>
                <li><a href="http://www.rtiwatch.lk" target="_blank">Transparency International Sri Lanka</a></li>
            </ul>
            <hr>
            
            
            <h5 style="font-size: 1.1em; padding-bottom:5px !important;">Capital allocations for the Projects under 804 expenditure vote of Chief Secretary</h5>
            
            <div class="container">
                <div class="accordion" id="accordionExample">
                    <ul style="list-style:none !important; line-height:200%;">
                        <li class="btn-link-collapsed show" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <span style="color:#0056b3;">Projects in 2018 &emsp;
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
                                            <a href="{{ asset('file/common01(2018).pdf') }}" target="_blank">
                                                Flexible Amount Fund
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
                                            <a href="{{ asset('file/common02(2018).pdf') }}" target="_blank">
                                                Program for Development of Villages with Special Needs
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
                                            <a href="{{ asset('file/common03(2018).pdf') }}" target="_blank">
                                                Criteria Based Grants (CBG)
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </ul>

                        <li class="btn-link-collapsed show" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <span style="color:#0056b3;">Projects in 2019 &emsp;
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
                                            <a href="{{ asset('file/common01.pdf') }}" target="_blank">
                                            Flexible Amount Fund
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
                                            <a href="{{ asset('file/common02.pdf') }}" target="_blank">
                                                Program for Development of Villages with Special Needs
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
                                            <a href="{{ asset('file/common03.pdf') }}" target="_blank">
                                                Criteria Based Grants (CBG)
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