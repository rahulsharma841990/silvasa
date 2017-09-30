<?php

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

	/*admin links*/
	Route::group(['middleware'=>'auth'], function(){

		Route::get('administrator',['as'=>'administrator', 'uses'=>'Admin\AdminController@dashboard']);
		Route::get('slider',['as'=>'slider','uses'=>'Admin\AdminController@slider']);
		Route::get('slider/list',['as'=>'slider.list','uses'=>'Admin\AdminController@sliderList']);

	});
	/*end of admin links */

	Route::get('/',['as'=>'index', function () {
	    return view('pages.index');
	}]);

	Route::get('about',['as'=>'about', function () {
	    return view('pages.about');
	}]);

	Route::get('certificate',['as'=>'about', function () {
	    return view('pages.reg_certificate');
	}]);

	Route::get('bylaws',['as'=>'about', function () {
	    return view('pages.bylaws');
	}]);

	Route::get('functions',['as'=>'about', function () {
	    return view('pages.functions');
	}]);

	Route::get('faq',['as'=>'about', function () {
	    return view('pages.faq');
	}]);

	Route::get('contact',['as'=>'about', function () {
	    return view('pages.contact');
	}]);

	

	Auth::routes();

	Route::get('logout',  ['as'=> 'admin.logout','uses'=>'Auth\LoginController@logout']);
	Route::get('/home', 'HomeController@index')->name('home');

