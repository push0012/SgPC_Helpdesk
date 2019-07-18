@extends('layouts.app')
@section('pageTitle', 'ව්‍යාපාර ලියාපදිංචිය')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="font-size:1.5em;">{{ __('ව්‍යාපාර තොරතුරු') }}</div>

                <div class="card-body" >
                    <form method="POST" action="{{ url('institute_data') }}">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="ins_id" class="col-md-4 col-form-label text-md-right">{{ __('ව්‍යාපාරයේ නම') }}</label>

                            <div class="col-md-6">
                                <input id="ins_head" type="text" class="form-control" name="ins_head" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ins_address" class="col-md-4 col-form-label text-md-right">{{ __('ව්‍යාපාරයේ ස්වාභාවය') }}</label>

                            <div class="col-md-6">
                                <input id="ins_head" type="text" class="form-control" name="ins_head" required>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                        <div class="col-md-6">
                        <div class="form-group row">
                            <label for="ins_id" class="col-md-4 col-form-label text-md-right">{{ __('හිමිකරුගේ නම') }}</label>

                            <div class="col-md-6">
                                <input id="ins_head" type="text" class="form-control" name="ins_head" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ins_id" class="col-md-4 col-form-label text-md-right">{{ __('හිමිකරුගේ ඡායාරූපය') }}</label>

                            <div class="col-md-6">
                                <input id="ins_head" type="file" class="form-control-file" name="ins_head" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ins_address" class="col-md-4 col-form-label text-md-right">{{ __('ව්‍යාපාර ලිපිනය') }}</label>

                            <div class="col-md-6">
                               <textarea class="form-control" rows="4" name="ins_address" id="ins_address"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ins_id" class="col-md-4 col-form-label text-md-right">{{ __('දුරකතන - ස්ථාවර') }}</label>

                            <div class="col-md-6">
                                <input id="ins_head" type="text" class="form-control" name="ins_head" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="ins_id" class="col-md-4 col-form-label text-md-right">{{ __('දුරකතන - ජංගම') }}</label>

                            <div class="col-md-6">
                                <input id="ins_head" type="text" class="form-control" name="ins_head" required>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group row">
                            <label for="ins_id" class="col-md-4 col-form-label text-md-right">{{ __('දුරකතන - ෆැක්ස්') }}</label>

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
                            <label for="ins_id" class="col-md-4 col-form-label text-md-right">{{ __('වෙබ් අඩවිය') }}</label>

                            <div class="col-md-6">
                                <input id="ins_head" type="text" class="form-control" name="ins_head" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ins_id" class="col-md-4 col-form-label text-md-right">{{ __('ලියා පදිංචි ආයතනය') }}</label>

                            <div class="col-md-6">
                                <input id="ins_head" type="text" class="form-control" name="ins_head" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ins_id" class="col-md-4 col-form-label text-md-right">{{ __('ලියා පදිංචි අංකය') }}</label>

                            <div class="col-md-6">
                                <input id="ins_head" type="text" class="form-control" name="ins_head" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ins_id" class="col-md-4 col-form-label text-md-right">{{ __('ලියා පදිංචි දිනය') }}</label>

                            <div class="col-md-6">
                                <input id="ins_head" type="text" class="form-control" name="ins_head" required>
                            </div>
                        </div>
                        
                        </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="ins_id" class="col-md-4 col-form-label text-md-right">{{ __('ඡායාරූප') }}</label>

                            <div class="col-md-6">
                                <input id="ins_head" type="file" class="form-control-file" name="ins_head" required>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row ">
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