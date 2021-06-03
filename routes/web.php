<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Frontend\HomeController@index');
Route::get('/pre-school/about','Frontend\PreSchoolController@about');
Route::get('/pre-school/facilities',"Frontend\PreSchoolController@facilities");
Route::get('/pre-school/admission','Frontend\PreSchoolController@admission');
Route::get('/middle-school/about','Frontend\MiddleSchoolController@about');
Route::get('/middle-school/facilities',"Frontend\MiddleSchoolController@facilities");
Route::get('/middle-school/admission','Frontend\MiddleSchoolController@admission');
Route::get('/middle-school/awards','Frontend\MiddleSchoolController@awards');
Route::get('/senior-school/facilities',"Frontend\SeniorSchoolController@facilities");
Route::get('/senior-school/about',"Frontend\SeniorSchoolController@about");
Route::get('/senior-school/admission',"Frontend\SeniorSchoolController@admission");
Route::get('/senior-school/courses',"Frontend\SeniorSchoolController@courses");
Route::get('/team-lga/message-principal',function(){
	return view('frontend.pages.teamomega.messageprincipal');
});
Route::get('/team-lga/message-chairperson',function(){
	return view('frontend.pages.teamomega.messagechairperson');
});
Route::get('/team-lga/family',function(){
	return view('frontend.pages.teamomega.teamomega');
});
Route::get('/apply','Frontend\ApplyController@index');
Route::post('/apply','Frontend\ApplyController@store');
Route::get('/news','Frontend\NewsController@index');
Route::get('/news/{id}','Frontend\NewsController@show');
Route::get('/news/search/data','Frontend\NewsController@search');
Route::get('/events/search/data','Frontend\EventController@search');

Route::get('/events','Frontend\EventController@index');
Route::get('/events/{id}','Frontend\EventController@show');
Route::get('/events/category/{id}','Frontend\EventController@filter');
Route::get('/news/category/{id}','Frontend\NewsController@filter');
Route::get('/contact','Frontend\ContactController@index');
Route::post('/contact','Frontend\ContactController@store');

Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'User\UserController');
	Route::resource('admin/news','Backend\NewsController');
	Route::resource('admin/events','Backend\EventController');
	Route::resource('admin/admission','Backend\AdmissionController');
	Route::resource('/library','Backend\LibraryController');
	Route::resource('/digital-library','Backend\DigitalLibraryController');

	Route::get('/library/search/data','Backend\LibraryController@search');
	Route::get('/library/filter/data','Backend\LibraryController@filter');
	Route::resource('/public-library','Backend\PublicLibraryController');
	Route::get('/public-library/search/data','Backend\PublicLibraryController@search');
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'User\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'User\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'User\ProfileController@password']);
});

