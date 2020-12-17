<?php

use Illuminate\Support\Facades\Route;

/*
=================================================================
        Normal user route part
=================================================================
*/

Route::get('/','StartController@index');
Route::get('/recent_activities','StartController@recent_activities');

/*
/*
=================================================================
        Donor route part
=================================================================
*/

Route::get('/donor/home', 'DonorController@donor_home')->middleware('loginCheck');
Route::get('/donor/create_post', 'DonorController@create_post')->middleware('loginCheck');
Route::post('/donor/create_post', 'DonorController@new_post')->name('donor/create_post')->middleware('loginCheck');
Route::get('/donor/my_post', 'DonorController@my_post')->middleware('loginCheck');
Route::get('/donor/signup', 'DonorController@signup');
Route::post('/donor/signup', 'DonorController@registration')->name('donor/signup');
//Route::get('donor/update_post/{id}', 'DonorController@update_post');
Route::get('/donor/delete_post/{id}', 'DonorController@delete_post');
Route::get('/donor/edit_post/{id}', 'DonorController@edit_post');
Route::post('/donor/updated_post', 'DonorController@updated_post')->name('donor/updated_post');

//Donor Login
Route::get('/login','LoginController@LoginIndex');
Route::post('/onLogin','LoginController@onLogin');
Route::get('/Logout','LoginController@onLogout');
/*
=================================================================
        Volunteer route part
=================================================================
*/
Route::get('/volunteer/home', 'VolunteerController@home');
Route::get('/volunteer/pickedup_request', 'VolunteerController@pickedup_request');
Route::get('/volunteer/signup', 'VolunteerController@signup');
Route::post('/volunteer/signup', 'VolunteerController@registration')->name('volunteer/signup');

Route::get('volunteer/update_post/{id}', 'VolunteerController@update_post');


// Volunteer Login
// Route::get('/volunteer_login','VolunteerLoginController@LoginIndex');
// Route::post('/onLogin','VolunteerLoginController@onLogin');
// Route::get('/Logout','VolunteerLoginController@onLogout');
 /*
=================================================================
        admin route part
=================================================================
*/
Route::get('/admin/home', 'AdminController@home');
Route::get('/admin/donor_list', 'AdminController@donor_list');
Route::get('/admin/volunteer_list', 'AdminController@volunteer_list');
Route::get('/admin/help_post_list', 'AdminController@help_post_list');
Route::get('/admin/change_password', 'AdminController@change_password');
// Route::get('/admin/count_post', 'AdminController@count_post');
// Route::get('/admin/count_volunteer', 'AdminController@count_volunteer');
// Route::get('/admin/count_donor', 'AdminController@count_donor');

// admin Login
// Route::get('/admin_login','AdminLoginController@LoginIndex');
// Route::post('/onLogin','AdminLoginController@onLogin');
// Route::get('/Logout','AdminLoginController@onLogout');
