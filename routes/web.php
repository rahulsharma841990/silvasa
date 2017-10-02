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
		Route::get('add-news',['as'=>'add-news','uses'=>'Admin\AdminController@addnews']);
		Route::post('news/submit',['as'=>'news/submit','uses'=>'Admin\AdminController@newssubmit']);
		Route::get('news/list',['as'=>'news.list','uses'=>'Admin\AdminController@newsList']);
		Route::get('news/list/view/{id}',['as'=>'news.list.view', 'uses'=>'Admin\AdminController@newsview']);
		Route::get('news/list/edit/{id}',['as'=>'news.list.edit', 'uses'=>'Admin\AdminController@newsedit']);
		Route::get('news/list/delete/{id}',['as'=>'news.list.delete', 'uses'=>'Admin\AdminController@newsdelete']);
		Route::patch('news/list/update/{id}',['as'=>'news.list.update', 'uses'=>'Admin\AdminController@newsupdate']);


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

