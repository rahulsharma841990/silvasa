<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserContoller extends Controller
{
	public function index(){
    	  return view('pages.index');
    }
    public function about(){
    	return view('pages.about');
    }
    public function certificate(){
    	 return view('pages.reg_certificate');
    }
    public function bylaws(){
    	 return view('pages.bylaws');
    }
    public function functions(){
   	   return view('pages.functions');
	}
    public function faq(){
    	  return view('pages.faq');
    }
     public function profile(){
    	   return view('pages.profile');
    }
     public function downloads(){
    	  return view('pages.downloads');
    }
     public function recruitment(){
    	    return view('pages.recruitment');
    }
     public function localrules(){
    	  return view('pages.localrules');
    }
     public function contact(){
    	  return view('pages.contact');
    }
      public function Office_Bearers(){
    	  return view('pages.Office_Bearers');
    }
     public function fun_committee(){
    	  return view('pages.fun_committee');
    }
      public function Executive_committee(){
    	  return view('pages.Executive_committee');
    }
      public function Press_release(){
    	  return view('pages.Press_release');
    }
      public function Newsletter(){
    	  return view('pages.Newsletter');
    }
}
