<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\SliderDatatable;
use App\DataTables\NewsDatatable;
use App\addnews;
use App\slider;

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
     public function newsList(NewsDatatable $datatable){
        return $datatable->render('admin_view.pages.news-list');
    }
    public function addnews(request $request){

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
   public function slidersubmit(request $request){
    $this->validationrules($request);
    $request->img->move('frontend/slider',$request->file('img')->getClientOriginalName());
    $model=new slider();
    $model->link_to_post=0;
    $model->fill($request->except('_token'));
    $model->img=$request->file('img')->getClientOriginalName();
    $model->save();
    return redirect()->route('slider');
   }
    public function newssubmit(Request $request){
    	$this->validationrules($request);
       // $request->file('img');
        $request->img->move('frontend/images', $request->file('img')->getClientOriginalName());

    	$model = new addnews();
    	 $model->fill($request->except('_token'));
           
         $model->img=$request->file('img')->getClientOriginalName();   
         $model->save();
         return redirect()->route('news.list');

    }
    public function newsview($id){
        $model=addnews::find($id);
         return view('admin_view.pages.news_view',['model'=>$model]);
    }
    public function newsedit($id){
        $model=addnews::find($id);
        return view('admin_view.pages.news_edit',['model'=>$model]);
        
    }
     public function newsdelete($id){
        $del=addnews::find($id);
        $del->delete();
        return redirect()->route('news.list');
    }
    public function newsupdate(Request $request, $id){
        
        $model=addnews::find($id);
        $model->fill($request->except('_token'));
        $model->save();
        return redirect()->route('news.list');
    }

}
