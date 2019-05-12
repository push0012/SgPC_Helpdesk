@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="font-size:1.5em;">{{ __('උපාධිදාරී ලියාපදිංචිය') }}</div>

                <div class="card-body" >
                    <form method="POST" action="{{ url('institute_data') }}">
                        @csrf


                        <div class="row">
                            <div class="col-md-12 col-lg-6 col-xs-12">
                                <div class="form-group row">
                                    <label for="ins_id" class="col-md-4 col-form-label text-md-right">{{ __('නම') }}</label>

                                    <div class="col-md-6">
                                        <input id="ins_head" type="text" class="form-control" name="ins_head" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="ins_address" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" name="ins_id" id="ins_id">
                                            <option value="">Select Title ...</option>
                                            <option value="">Rev. </option>
                                            <option value="">Mrs. </option>
                                            <option value="">Ms. </option>
                                            <option value="">Mr. </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ins_id" class="col-md-4 col-form-label text-md-right">{{ __('ස්ත්‍රී/පුරුෂ භාවය') }}</label>

                                    <div class="col-md-6">
                                        <input id="ins_head" type="text" class="form-control" name="ins_head" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ins_address" class="col-md-4 col-form-label text-md-right">{{ __('උපන් දිනය') }}</label>

                                    <div class="col-md-6">
                                        <input id="ins_head" type="date" class="form-control" name="ins_head" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="ins_id" class="col-md-4 col-form-label text-md-right">{{ __('ජා. හැ. අ.') }}</label>

                                    <div class="col-md-6">
                                        <input id="ins_head" type="text" class="form-control" name="ins_head" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ins_id" class="col-md-4 col-form-label text-md-right">{{ __('ලිපිනය') }}</label>

                                    <div class="col-md-6">
                                        <textarea class="form-control" rows="3" name="ins_address" id="ins_address"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ins_id" class="col-md-4 col-form-label text-md-right">{{ __('දුරකතන') }}</label>

                                    <div class="col-md-6">
                                        <input id="ins_head" type="text" class="form-control" name="ins_head" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ins_id" class="col-md-4 col-form-label text-md-right">{{ __('විද්‍යුත් ලිපිනය') }}</label>

                                    <div class="col-md-6">
                                        <input id="ins_head" type="text" class="form-control" name="ins_head" required>
                                    </div>
                                </div>
                            
                                <div class="form-group row">
                                    <label for="ins_id" class="col-md-4 col-form-label text-md-right">{{ __('දිස්ත්‍රික්කය') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" name="ins_id" id="ins_id">
                                            <option value="">Select District ...</option>
                                            <option value="">රත්නපුර</option>
                                            <option value="">කෑගල්ල</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-6 col-xs-12">
                                <div class="form-group row">
                                    <label for="ins_id" class="col-md-4 col-form-label text-md-right">{{ __('ප්‍රාදේශීය ලේකම් කොට්ටාශය') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" name="ins_id" id="ins_id">
                                            <option value="">Select DS area ...</option>
                                            <option value="">රත්නපුර</option>
                                            <option value="">කෑගල්ල</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ins_id" class="col-md-4 col-form-label text-md-right">{{ __('විශ්වවිද්‍යාලයය') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" name="ins_id" id="ins_id">
                                            <option value="">Select University...</option>
                                            <option value="">UoC</option>
                                            <option value="">UoP</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ins_id" class="col-md-4 col-form-label text-md-right">{{ __('උපාධිය') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" name="ins_id" id="ins_id">
                                            <option value="">Select Degree...</option>
                                            <option value="">Art</option>
                                            <option value="">Commerce</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ins_id" class="col-md-4 col-form-label text-md-right">{{ __('භාශා මාධය') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" name="ins_id" id="ins_id">
                                            <option value="">Select Medium...</option>
                                            <option value="">සිංහල</option>
                                            <option value="">Tamil</option>
                                            <option value="">English</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="ins_id" class="col-md-4 col-form-label text-md-right">{{ __('උපාධි වර්ගය') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" name="ins_id" id="ins_id">
                                            <option value="">Select Degree Type...</option>
                                            <option value="">විශේෂවේදී</option>
                                            <option value="">සාමාන්‍ය</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ins_id" class="col-md-4 col-form-label text-md-right">{{ __('උපාධි පන්තිය') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" name="ins_id" id="ins_id">
                                            <option value="">Select Degree Class...</option>
                                            <option value="">First Class</option>
                                            <option value="">Second Upper</option>
                                            <option value="">Second Lower</option>
                                            <option value="">General</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ins_id" class="col-md-4 col-form-label text-md-right">{{ __('බලාත්මක දිනය') }}</label>
                                    
                                    <div class="col-md-6">
                                        <input id="ins_head" type="date" class="form-control" name="ins_head" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="ins_id" class="col-md-4 col-form-label text-md-right">{{ __('රැකියා කැමැත්ත') }}</label>
                                    
                                    <div class="col-md-6">
                                        <input id="ins_head" type="text" class="form-control" name="ins_head" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="ins_id" class="col-md-4 col-form-label text-md-right">{{ __('පරිගණක දැනුම') }}</label>
                                    
                                    <div class="col-md-6">
                                        <select class="form-control" name="ins_id" id="ins_id">
                                            <option value="">Select One...</option>
                                            <option value="">ඇත</option>
                                            <option value="">නැත</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="width:100%">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    @endsection