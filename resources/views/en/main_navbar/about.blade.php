@extends('en.layouts.app')
@section('pageTitle', 'About Us')
@section('content')
<div class="container" style="margin-bottom: 25px;">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h4 class="h1-responsive font-weight-bold my-4">Office of the Deputy Chief Secretary (Planning).</h4>
        <div class="container">
        
       <!-- <h5 style="font-size:1.2em; font-weight:bold;">නියෝජ්‍ය ප්‍රධාන ලේකම් (ක්‍රමසම්පාදන) කර්යාලය...</h5>-->

        <div class="row">
            <div class="col-md-06">
                <img src="{{ asset('image/sgpcimg.jpg') }}"  style="height: 200px !important; margin-bottom: 15px !important;"/>
            </div>
            <div class="col-md-06">
                <img src="{{ asset('image/pln_logo.bmp') }}" style="height: 150px !important; margin: 25px !important;"/>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p style="font-size: 0.9em !important;">
                Office of the Deputy Chief Secretary (Planning) is the main wing of the Sabaragamuwa 
                Provincial Council, responsible for overall planning functions implemented at sub national 
                level. It includes overall development functions to minimize imbalances /disparities 
                effecting to individual, community group or geographical entities like divisions, 
                districts or provinces.
                </p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <h5 style="font-size:1.2em; font-weight:bold;">Our Vision ....</h5>
                <p style="font-size: 0.9em !important;">
                Noble leader in provincial planning
                </p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <h5 style="font-size:1.2em; font-weight:bold;">Our Mission.....</h5>
                <p style="font-size: 0.9em !important;">
                Providing guidance and assistance to the policymakers and all 
                institutions through a systematic planning process in order 
                to utilize resources efficiently and effectively with the 
                aim of achieving sustainable development and living 
                standard of the people in the Sabaragamuwa province.
                </p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <h5 style="font-size:1.2em; font-weight:bold;">Our Values.....</h5>
                <ul style="list-style:circle;">
                    <li>Accountability</li>
                    <li>Integrity</li>
                    <li>Novelty</li>
                    <li>Sustainability</li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <h5 style="font-size:1.2em; font-weight:bold;">Our Goal is to......</h5>
                <p style="font-size: 0.9em !important;">
                Improve the living standards of the community of the Sabaragamuwa 
                province through efficient and effective planning process.
                </p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <h5 style="font-size:1.2em; font-weight:bold;">Our Objectives.....</h5>
                <ol>
                    <li>All departments of the organization to be operated at full planning capacity within next two years</li>
                    <li>Reduce recurrent expenditure (budget) by 15% within next three years</li>
                    <li>Increase proportion of capital investment raised from external funding sources by 5% within next three years</li>
                    <li>Increase planning capacity on special project and programs to harmonize needs of marginalized individual, community & geographical entities</li>
                </ol>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <h5 style="font-size:1.2em; font-weight:bold;">Departments</h5>
                <div class="accordion" id="accordionExample">
                <ul style="list-style:circle;">
                    <li class="btn-link-collapsed show" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Department of  Information, Research and Special Projects 
                        <span class="btn" style="font-size:0.7em;">See More...</span>
                    </li>     
                        <ul id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <li>Maintaining of provincial data base.</li>
                            <li>Implementation of Information Unit.</li>
                            <li>Implementation & coordination of unemployed graduates scheme.</li>
                            <li>Implementation of Provincial Vocational Plan.</li>
                            <li>Implementation of Skill Development Plan.</li>
                            <li>Preparation of Provincial performance report.</li>
                            <li>Functioning of research unit.</li>
                            <li>Implementation of e-government policy.</li>
                            <li>Establishment and maintenance of provincial web portal for data and information.</li>
                            <li>Preparation of project proposals/ concept papers particularly for potential sectors.</li>
                            <li>Implementation and monitoring of special projects (E.g.: Pura Naguma, theme park. etc.)</li>
                            <li>Establish and maintain GIS unit.</li>
                            <li>Implement Sabaragamuwa Help Desk: “Career path” Program.</li>
                        </ul>
                    <li class="btn-link-collapsed show" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Department of Regional Development, Administration and Finance
                        <span class="btn" style="font-size:0.7em;">See More...</span>
                    </li>     
                        <ul id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <li>Implementation of Regional Development Plan (Provincial Decentralized Budget).</li>
                            <li>Administration, Finance & Accounts liabilities of the Office.</li>
                            <li>Local & foreign training.</li>
                            <li>Preparation of recurrent estimates and appropriation accounts.</li>
                            <li>Maintenance of library and record room.</li>
                            <li>Coordination & monitoring of programs/projects implemented under the national policies.</li>
                            <li>Implementation & coordination of  productivity program.</li>
                            <li>Preparation of project proposals/concept papers to minimize regional imbalance / disparities.</li>
                        </ul>
                    <li class="btn-link-collapsed show" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Department of Planning & Monitoring 
                        <span class="btn" style="font-size:0.7em;">See More...</span>
                    </li>     
                        <ul id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <li>Preparation of medium term Provincial development plan including implementation and monitoring plan.</li>
                            <li>Preparation of capital estimates.</li>
                            <li>Preparation of annual development plan / Agency Result Framework.</li>
                            <li>Preparation of annual implementation plan for the Province.</li>
                            <li>Monitoring & evaluation of development plans prepared by provincial ministries.</li>
                            <li>Progress monitoring & evaluation.</li>
                            <li>Establishment of Consolidated Annual Implementation Online Program.</li>
                            <li>Coordination and implementation of special projects under UND</li>
                            <li>Submission of information for the preparation of Policy statement and budget speech.</li>
                            <li>Capital transfers.</li>
                            <li>Sectors specific planning for the Province.</li>
                            <li>Coordination of provincial physical plan/strategic plan/corporate plan.</li>
                            <li>Preparation of project proposals / concept papers particularly for potential sectors.</li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <h5 style="font-size:1.2em; font-weight:bold;">Organizational Structure</h5>
                <a href="{{ asset('file/hirechi.pdf') }}" target="_blank">Click Here</a>
            </div>
        </div>

        </div>  
    </div>
</div>
@endsection