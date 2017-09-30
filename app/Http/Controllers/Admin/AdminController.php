<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\SliderDatatable;
use App\addnews;

class AdminController extends Controller
{
	public function dashboard(){
		$plugins = [
			'js' => ['jvectormap','gdp-data','flot','animateNumber','sparkline','skycons','main'],
			'css'	=> []
			];
	   		return view('admin_view.pages.dashboard',$plugins);
	}

    public function slider(){
    	return view('admin_view.pages.slider');
    }

    public function sliderList(SliderDatatable $datatable){
    	return $datatable->render('admin_view.pages.slider-list');
    }
    public function addnews(){
    	return view('admin_view.pages.add-news');
    }
     public function validationrules(Request $request){
    	$rules=[
				'title' => 'required',
    			'desc'	=>	'required',
    			'img' => 'required',
				];
		$this->validate($request,$rules);

   }
    public function newssubmit(Request $request){
    	$this->validationrules($request);
    	$model = new addnews();
    	 $model->fill($request->except('_token'));
         $model->save();
          return redirect()->route('add-news');

    }
}
