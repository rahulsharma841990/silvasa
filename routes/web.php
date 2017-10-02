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
		Route::post('slider/submit',['as'=>'slider.submit','uses'=>'Admin\AdminController@slidersubmit']);
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

/*user links*/
	Route::get('/',['as'=>'index', 'uses'=>'UserContoller@index']);	
	Route::get('about',['as'=>'about','uses'=>'UserContoller@about']);
	Route::get('certificate',['as'=>'certificate', 'uses'=>'UserContoller@certificate']);
	Route::get('bylaws',['as'=>'bylaws',  'uses'=>'UserContoller@bylaws']);
	Route::get('functions',['as'=>'functions',  'uses'=>'UserContoller@functions']);
	Route::get('faq',['as'=>'faq', 'uses'=>'UserContoller@faq']);
	Route::get('profile',['as'=>'profile','uses'=>'UserContoller@profile']);
	Route::get('downloads',['as'=>'downloads', 'uses'=>'UserContoller@downloads']);
	Route::get('recruitment',['as'=>'recruitment','uses'=>'UserContoller@recruitment']);
	Route::get('localrules',['as'=>'localrules', 'uses'=>'UserContoller@localrules']);
	Route::get('contact',['as'=>'about', 'uses'=>'UserContoller@contact']);
	Route::get('Office_Bearers',['as'=>'Office_Bearers', 'uses'=>'UserContoller@Office_Bearers']);
	Route::get('fun_committee',['as'=>'Office_Bearers', 'uses'=>'UserContoller@fun_committee']);
	Route::get('Executive_committee',['as'=>'Executive_committee', 'uses'=>'UserContoller@Executive_committee']);
	Route::get('Press_release',['as'=>'Press_release', 'uses'=>'UserContoller@Press_release']);
	Route::get('Newsletter',['as'=>'Newsletter', 'uses'=>'UserContoller@Newsletter']);
	   


	

	Auth::routes();
	Route::get('logout',  ['as'=> 'admin.logout','uses'=>'Auth\LoginController@logout']);
	Route::get('/home', 'HomeController@index')->name('home');

