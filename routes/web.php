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
Route::post('/sendinquiry', 'ContactUsController@sendInquiry');

//Backend Routes

//ajax request routes

Route::group(['prefix' => 'ajax','as'=>'ajax.'], function () {
    Route::get('specialities', 'AjaxController@all_specialities');
    Route::get('speciality_by', 'AjaxController@speciality_by');
    Route::get('get_degree/{id}', 'AjaxController@get_degree_courses');
    Route::get('get_diploma/{id}', 'AjaxController@get_diploma_courses');
    Route::get('get_all/{id}', 'AjaxController@get_all_courses');
});



Route::get('/confirm', function(){ return view('insert_form.register_confirm'); });
Route::get('/failure', function(){ return view('insert_form.register_fail'); });

Route::group(['prefix' => 'application','as'=>'application.'], function () {
    Route::group(['prefix' => 'graduate','as'=>'graduate.'], function () {
        Route::get('/', 'GraduationController@index');
        Route::post('/register', 'GraduationController@store');
    });
    Route::group(['prefix' => 'diploma','as'=>'diploma.'], function () {
        Route::get('/', 'DiplomaController@index');
        Route::post('/register', 'DiplomaController@store');
    });
});


Route::group(['prefix' => 'admin','as'=>'admin.'], function () {

    Route::get('/', function(){ return view('admin.admin_dashboard'); });

    Route::group(['prefix' => 'masterdata','as'=>'masterdata'], function () {
        Route::resource('dsdivision', 'DsDivisionController');
        Route::resource('college', 'CollegeController');
        Route::resource('course', 'CourseController');
        Route::resource('collegecourse', 'CollegeCourseController', ['except' => ['edit']]);
        Route::get('collegecourse/{spc_id}/{cos_id}/{clg_id}/edit', 'CollegeCourseController@edit');
        Route::resource('special', 'DegreeSpecialController');
        Route::resource('student', 'StudentController');
    });

    Route::group(['prefix' => 'pending','as'=>'pending'], function () {

        Route::group(['prefix' => 'degree','as'=>'degree'], function () {
            //approving request things for graduation
            Route::get('/', 'GraduationController@pending');
            Route::get('/views/{id}', 'GraduationController@detail_pending');
            Route::post('/approving', 'GraduationController@approving');
            Route::post('/rejecting', 'GraduationController@rejecting');
        });
        Route::group(['prefix' => 'diploma','as'=>'diploma'], function () {
            //approving request things for Diploma
            Route::get('/', 'DiplomaController@pending');
            Route::get('/views/{id}', 'DiplomaController@detail_pending');
            Route::post('/approving', 'DiplomaController@approving');
            Route::post('/rejecting', 'DiplomaController@rejecting');
        });

    });
    
});