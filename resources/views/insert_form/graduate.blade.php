@extends('layouts.app')
@section('pageTitle', 'උපාධිදාරී ලියාපදිංචිය')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
                <div  style="font-size:1.5em;">{{ __('උපාධිදාරී ලියාපදිංචිය') }}</div>
                <br>
                
                <ul id="registration-step">
                    <li id="personal" class="highlight">Personal Information</li>
                    <li id="educational">Educational Information</li>
                    <li id="professional">Professional Information</li>
                </ul>
                <form name="frmRegistration" id="registration-form" method="post" style="font-size:0.8em !important;">
                    <div id="personal-field">
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
                                    <label for="stu_name">Name with Initials</label>
                                    <div><input type="text" name="stu_name" id="stu_name" class="form-control" length="250" placeholder="Name with Initials"/></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                <label for="sex">Gender</label>	
                                    <div>
                                        <select class="form-control" name="sex" id="sex">
                                            <option value="None" disabled selected>Select Gender</option>
                                            <option value="Female">Female</option>
                                            <option value="Male">Male</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="dob">Date of Birth</label>
                                    <div><input type="date" name="dob" id="dob" class="form-control" length="250" placeholder="Name with Initials"/></div>
                                </div>
                                <div class="col-md-6">
                                    <label for="nic">National Identity Card Number</label>
                                    <div><input type="text" name="nic" id="nic" class="form-control" length="250" placeholder="National Identity Card Number"/></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="stu_address">Address</label>
                                    <div>
                                        <textarea class="form-control" name="stu_address" id="stu_address" ></textarea>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="district">District</label>
                                    <div>
                                        <select class="form-control" name="district" id="district">
                                            <option value="None" disabled selected>Select District</option>
                                            <option value="1">Ratnapura</option>
                                            <option value="2">Kegalle</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                <label for="dsa_id">Divisional Secretariat</label>
                                    <div>
                                        <select class="form-control" name="dsa_id" id="dsa_id">
                                            <option value="None" disabled selected>Select DS Area</option>
                                            <option value="Female">Female</option>
                                            <option value="Male">Male</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="stu_mobile">Mobile</label>
                                    <div><input type="text" name="stu_mobile" id="stu_mobile" class="form-control" placeholder="Mobile"/></div>
                                </div>
                                <div class="col-md-3">
                                    <label for="stu_telephone">Telephone</label></span>
                                    <div><input type="text" name="stu_telephone" id="stu_telephone" class="form-control" placeholder="Telephone"/></div>
                                </div>
                                <div class="col-md-6">
                                    <label for="stu_email">Email</label></span>
                                    <div><input type="email" name="stu_email" id="stu_email" class="form-control" placeholder="E-mail"/></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="educational-field" style="display:none;">
                        <div class="container-fluid">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="clg_id">University</label>
                                    <div>
                                        <select class="form-control" name="clg_id" id="clg_id">
                                            <option value="None" disabled selected>Select University</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="col-md-5">
                                    <label for="cos_id">Degree</label>
                                    <div>
                                        <select class="form-control" name="cos_id" id="cos_id">
                                            <option value="None" disabled selected>Select Degree</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="speciality">Speciality</label>
                                    <div>
                                        <select class="form-control" name="speciality" id="speciality">
                                            <option value="None" disabled selected>Select Speciality</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="speciality_in_word">Speciality in Words</label>	
                                    <div>
                                        <div><input type="text" name="speciality_in_word" id="speciality_in_word" class="form-control" placeholder="Specify"/></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="medium">Medium</label>
                                    <div>
                                        <select class="form-control" name="medium" id="medium">
                                            <option value="None" disabled selected>Select Medium</option>
                                            <option value="Sinhala">Sinhala</option>
                                            <option value="English">English</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="degree_class">Degree Class</label>
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
                                    <label for="effective_date">Effective Date</label>
                                    <div>
                                        <div><input type="date" name="effective_date" id="effective_date" class="form-control"/></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="other_details">Others (Postgraduate, Diploma, etc)</label>
                                    <div>
                                        <textarea class="form-control" name="other_details" id="other_details" ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="transcript_front">Transcript Front Page</label>
                                    <div>
                                        <input type="file" class="form-control-file" id="transcript_front" name="transcript_front">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="transcript_back">Transcript Back Page</label>
                                    <div>
                                        <input type="file" class="form-control-file" id="transcript_back" name="transcript_back">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="degree_certificate">Degree Certificate</label>
                                    <div>
                                        <input type="file" class="form-control-file" id="degree_certificate" name="degree_certificate">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="professional-field" style="display:none;">
                        <div class="container-fluid">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="job_availability">Job Availability</label></span>	
                                    <div>
                                        <select class="form-control" name="job_availability" id="job_availability">
                                            <option value="None" disabled selected>Select Job Availability</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="job_sector">If "Yes" Specify Sector</label></span>	
                                    <div>
                                        <select class="form-control" name="job_sector" id="job_sector">
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
                                    Language Skill
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
                                    <label for="it_skill">IT Skill</label>
                                    <div>
                                        <select class="form-control" name="it_skill" id="it_skill">
                                            <option value="None" disabled selected>Select Option</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <label for="it_skill_detail">If "Yes", Provide Details</label>
                                    <div>
                                        <textarea class="form-control" name="it_skill_detail" id="it_skill_detail" ></textarea>
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
                    <div>
                        <input class="btnAction" type="button" name="back" id="back" value="Back" style="display:none;">
                        <input class="btnAction" type="button" name="next" id="next" value="Next" >
                        <input class="btnAction" type="submit" name="finish" id="finish" value="Finish" style="display:none;">
                    </div>
                </form>
                   
            </div>  
        </div>
    </div>
    @endsection