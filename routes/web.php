<?php

Route::get('/', function () {
    return view('welcome');
});
Route::match(['get','post'],'admin','admincontroller@login')->name('admin');

Route::group(['middleware'=> ['auth']],function(){

	Route::get('admin/dashboard','admincontroller@dashboard');
	Route::match(['get','post'],'/admin/edit_user/{id}','admincontroller@edit_user');
	Route::get('/admin/deleteuser/{id}','admincontroller@deleteuser');
	Route::get('/admin/settings','admincontroller@settings');
	Route::get('/admin/chkpass','admincontroller@chkpassword');
	Route::match(['get','post'],'/admin/updatepass','admincontroller@updatepassword');

//show app
	Route::get('/admin/show_application','applicationcontroller@show_application');
	Route::match(['get','post'],'/admin/add_application','applicationcontroller@add_application');
	Route::match(['get','post'],'/admin/edit_application/{id}','applicationcontroller@edit_application');



});

//forgotpassword route

Route::group(['middleware' => 'web','prefix' => 'password'], function () 
			{   
				
				Route::get('forgotpwd','PasswordResetController@forgotpwd')->name('forgotpwd');
				Route::get('/createpwd/{token}','PasswordResetController@find')->name('createpwd');
				Route::get('/resetform/{token}','PasswordResetController@showResetForm')->name('resetform');
			    Route::post('create/', 'PasswordResetController@create')->name('create');
			    Route::post('pwdreset', 'PasswordResetController@pwdreset')->name('pwdreset');

			    
			    
			});	

Route::get('/logout','admincontroller@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
