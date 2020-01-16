@extends('layouts.app')
@section('pageTitle', 'උපාධිදාරී ලියාපදිංචිය')
@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            
                <div  style="font-size:1.5em;">{{ __('උපාධිදාරී ලියාපදිංචිය') }}</div>
                <br>
                
                <ul id="registration-step">
                    <li id="gpersonal" class="highlight">Personal Information</li>
                    <li id="geducational">Educational Information</li>
                    <li id="gprofessional">Professional Information</li>
                    <li id="gcaptcha">Verify Human</li>
                </ul>
                <form name="frmRegistration" enctype="multipart/form-data" id="registration-form" method="post" style="font-size:0.8em !important;">
                @csrf
                    <div id="gpersonal-field">
                        <div class="container-fluid">
                            <div class="form-group row">
                                <div class="col-md-3">
                                <label for="title">Title</label><span id="title-error" class="registration-error"></span>
                                    <div>
                                        <select class="form-control" name="title" id="title" required>
                                            <option value="None" disabled selected>Select Title</option>
                                            <option value="Rev.">Rev. </option>
                                            <option value="Mrs.">Mrs. </option>
                                            <option value="Ms.">Ms. </option>
                                            <option value="Mr.">Mr. </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <label for="stu_name">Name with Initials</label><span id="stu_name-error" class="registration-error"></span>
                                    <div><input type="text" name="stu_name" id="stu_name" class="form-control textonly" length="250" placeholder="Name with Initials" required/></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                <label for="sex">Gender</label><span id="sex-error" class="registration-error"></span>
                                    <div>
                                        <select class="form-control" name="sex" id="sex">
                                            <option value="None" disabled selected>Select Gender</option>
                                            <option value="Female">Female</option>
                                            <option value="Male">Male</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="dob">Date of Birth</label><span id="dob-error" class="registration-error"></span>
                                    <div><input type="date" name="dob" id="dob" min="1960-01-01" max="2050-12-31" class="form-control earlydate"/></div>
                                </div>
                                <div class="col-md-6">
                                    <label for="nic">National Identity Card Number</label><span id="nic-error" class="registration-error"></span>
                                    <div><input type="text" name="nic" id="nic" class="form-control numberonly" minlength="9" maxlength="12" length="250" placeholder="National Identity Card Number"/></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="stu_address">Address</label><span id="stu_address-error" class="registration-error"></span>
                                    <div>
                                        <textarea class="form-control" name="stu_address" id="stu_address" ></textarea>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="district">District</label><span id="district-error" class="registration-error"></span>
                                    <div>
                                        <select class="form-control" name="district" id="district">
                                            <option value="None" disabled selected>Select District</option>
                                            <option value="1">Ratnapura</option>
                                            <option value="2">Kegalle</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                <label for="dsa_id">DS Division</label><span id="dsa_id-error" class="registration-error"></span>
                                    <div>
                                        <select class="form-control" name="dsa_id" id="dsa_id">
                                            <option value="None" disabled selected>Select DS Division</option>
                                        </select>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="stu_mobile">Mobile</label><span id="stu_mobile-error" class="registration-error"></span>
                                    <div><input type="text" name="stu_mobile" id="stu_mobile" minlength="10" maxlength="10" class="form-control numberonly" placeholder="Mobile"/></div>
                                </div>
                                <div class="col-md-3">
                                    <label for="stu_telephone">Telephone</label><span id="stu_telephone-error" class="registration-error"></span>
                                    <div><input type="text" name="stu_telephone" id="stu_telephone" minlength="10" maxlength="10" class="form-control numberonly" placeholder="Telephone"/></div>
                                </div>
                                <div class="col-md-6">
                                    <label for="stu_email">Email</label><span id="stu_email-error" class="registration-error"></span>
                                    <div><input type="email" name="stu_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="stu_email" class="form-control" placeholder="E-mail"/></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="geducational-field" style="display:none;">
                        <div class="container-fluid">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="clg_id">University</label><span id="clg_id-error" class="registration-error"></span>
                                    <div>
                                        <select class="form-control" name="clg_id" id="clg_id">
                                            <option value="None" disabled selected>Select University</option>
                                            <option value="0">New</option>
                                            @foreach($colleges as $college)
                                                <option value="{{ $college->clg_id}}">{{ $college->clg_name }}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="new_clg">If not in above List, Please Insert Your University</label><span id="new_clg-error" class="registration-error"></span>
                                    <div>
                                        <div><input type="text" name="new_clg" id="new_clg" class="form-control textonly" placeholder="Specify" disabled/></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="stream">Degree Stream</label><span id="stream-error" class="registration-error"></span>
                                    <div>
                                        <select class="form-control" name="stream" id="stream">
                                            <option value="None" disabled selected>Select Degree Stream</option>
                                            <option value="Art">Art</option>
                                            <option value="Commerce">Commerce</option>
                                            <option value="Science">Science</option>
                                            <option value="Engineering">Engineering</option>
                                            <option value="Management">Management</option>
                                            <option value="Technology">Technology</option>
                                            <option value="Law">Law</option>
                                            <option value="Nursing">Nursing</option>
                                            <option value="Pharmacy">Pharmacy</option>
                                            <option value="Performing Art">Performing Art</option>
                                            <option value="Ayurveda">Ayurveda</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="dig_type">Degree Stream</label><span id="dig_type-error" class="registration-error"></span>
                                    <div>
                                        <select class="form-control" name="dig_type" id="dig_type">
                                            <option value="None" disabled selected>Select Degree Type</option>
                                            <option value="Special">Special</option>
                                            <option value="General">General</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="cos_id">Degree (eg:- BSc, BA, BCom, BTech)</label><span id="cos_id-error" class="registration-error"></span>
                                    <div>
                                        <select class="form-control" name="cos_id" id="cos_id">
                                            <option value="None" disabled selected>Select Degree</option>
                                            <option value="0">New</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="new_cos">If not in above List, Please Insert Your Degree</label><span id="new_cos-error" class="registration-error"></span>
                                    <div>
                                        <div><input type="text" name="new_cos" id="new_cos" class="form-control textonly" placeholder="Specify" disabled/></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="spc_id">Speciality or General</label>
                                    <div>
                                        <select class="form-control" name="spc_id" id="spc_id"><span id="spc_id-error" class="registration-error"></span>
                                            <option value="None" disabled selected>Select Speciality</option>
                                            <option value="0">New</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="speciality_in_word">If Not in the Speciality List, Specify</label><span id="speciality_in_word-error" class="registration-error"></span>
                                    <div>
                                        <div><input type="text" name="speciality_in_word" id="speciality_in_word" class="form-control textonly" placeholder="Specify" disabled/></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="medium">Medium</label><span id="medium-error" class="registration-error"></span>
                                    <div>
                                        <select class="form-control" name="medium" id="medium">
                                            <option value="None" disabled selected>Select Medium</option>
                                            <option value="Sinhala">Sinhala</option>
                                            <option value="Tamil">Tamil</option>
                                            <option value="English">English</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="degree_class">Degree Class</label><span id="degree_class-error" class="registration-error"></span>
                                    <div>
                                        <select class="form-control" name="degree_class" id="degree_class">
                                            <option value="None" disabled selected>Select Degree Class</option>
                                            <option value="First CLass">First Class</option>
                                            <option value="Second Class (Upper)">Second Class (Upper)</option>
                                            <option value="Second Class (Lower)">Second Class (Lower)</option>
                                            <option value="General">General</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="effective_date">Effective Date</label><span id="effective_date-error" class="registration-error"></span>
                                    <div>
                                        <div><input type="date" name="effective_date" id="effective_date" class="form-control earlydate"/></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="other_details">Others (Postgraduate, Diploma, etc)</label>
                                    <div>
                                        <textarea class="form-control textonly" name="other_details" id="other_details" ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="certificate_image">Certificate Image</label><span id="certificate_image-error" class="registration-error"></span>
                                    <div>
                                        <input type="file" accept=".jpg, .jpeg, .png, .gif" class="form-control-file" id="certificate_image[]" name="certificate_image[]" multiple>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="gprofessional-field" style="display:none;">
                        <div class="container-fluid">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="job_availability">Job Availability</label><span id="job_availability-error" class="registration-error"></span>	
                                    <div>
                                        <select class="form-control" name="job_availability" id="job_availability">
                                            <option value="None" disabled selected>Select Job Availability</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="job_sector">If "Yes" Specify Sector</label><span id="job_sector-error" class="registration-error"></span>
                                    <div>
                                        <select class="form-control" name="job_sector" id="job_sector" disabled>
                                            <option value="None" disabled selected>Select Job Sector</option>
                                            <option value="Government">Government</option>
                                            <option value="Private">Private</option>
                                            <option value="Self-Industry">Self-Industry</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="job_preference">Job Preference</label>	
                                    <div>
                                        <textarea class="form-control" name="job_preference" id="job_preference" ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                <label for="language">Language Skill</label>
                                </div>
                                <div class="col-md-10">
                                    
                                    <button type="button" class="btn btn-outline-success btn-sm float-right" id="addLanguage">
                                        <span class="btn-label"><i class="fas fa-plus"></i></span>
                                    </button>
                                    <button type="button" class="btn btn-outline-danger btn-sm float-right" id="removeLanguage">
                                        <span class="btn-label"><i class="fas fa-times"></i></span>
                                    </button>

                                    <table id="languageTable" class="display languageTable" style="width:500px">
                                        <thead>
                                            <tr>
                                                <th style="max-width:125px !important;  min-width:125px !important;">Language</th>
                                                <th style="min-width:125px !important;">Writting</th>
                                                <th style="min-width:125px !important;">Reading</th>
                                                <th style="min-width:125px !important;">Speech</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="it_skill">IT Skill</label><span id="it_skill-error" class="registration-error"></span>
                                    <div>
                                        <select class="form-control" name="it_skill" id="it_skill">
                                            <option value="None" disabled selected>Select Option</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <label for="it_skill_detail">If "Yes", Provide Details</label><span id="it_skill_detail-error" class="registration-error"></span>
                                    <div>
                                        <textarea class="form-control" name="it_skill_detail" id="it_skill_detail" disabled></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="extra_activity">Extra-Curricular Activities</label>
                                    <div>
                                        <textarea class="form-control" name="extra_activity" id="extra_activity" ></textarea>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div id="gcaptcha-field" style="display:none; padding:20px;">
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-md-12" >
                                    <strong>Retype the Characters from the Image</strong>
                                    <div class="captcha-image" id="captcha" ></div>
                                    <span id="captcha-error" class="registration-error"></span><br/>
                                    <button type="button" class="btn btn-outline-info btn-sm" onClick="createCaptcha_degree()">
                                        <span class="btn-label"><i class="fas fa-sync-alt"></i></span>
                                    </button>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <input type="text" placeholder="Captcha" class="form-control" id="cpatchaTextBox"/>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="row justify-content-center">
                        <input class="btnAction" type="button" name="back" id="back" value="Back" style="display:none;">
                        <input class="btnAction" type="button" name="next" id="next" value="Next" >
                        <input class="btnAction" type="button" onClick="validateCaptcha_degree()" name="finish" id="finish" value="Finish" style="display:none;">
                    </div>
                </form>
                   
            </div>  
        </div>
    </div>
    @endsection