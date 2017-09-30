<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\SliderDatatable;

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
}
