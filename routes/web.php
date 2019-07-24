<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//detail list routes
Route::get('/business_list', function(){ return view('data_list.business_list')->with('category',"Agriculture"); });
Route::get('/job_list', function(){ return view('data_list.job_list'); });
Route::get('/training_list', function(){ return view('data_list.training_list'); });
Route::get('/training_institutes', function(){ return view('data_list.training_institutes'); });

//insert form routes
Route::get('/business_ins', function(){ return view('insert_form.business'); });
Route::get('/graduate_ins', function(){ return view('insert_form.graduate'); });
Route::get('/diploma_ins', function(){ return view('insert_form.diploma'); });

//sub category page routes
Route::get('/business', function(){ return view('sub_cat.sub_business'); });
Route::get('/human_reso', function(){ return view('sub_cat.sub_humans'); });
Route::get('/stu_regi', function(){ return view('sub_cat.sub_stu_registration'); });

//detail page routes
Route::get('/business_info', function(){ return view('detail_page.business_info')->with('category',"Agriculture"); });
Route::get('/download', function(){ return view('detail_page.downloads'); });
Route::get('/about', function(){ return view('detail_page.about'); });
Route::get('/rti', function(){ return view('detail_page.rti'); });

//interact page routes
Route::get('/contactus', function(){ return view('interact.contact'); });
Route::post('/sendmail', 'ContactUsController@sendMail');