<?php namespace sdom\Http\Controllers;

use sdom\Http\Requests;
use sdom\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
public function index()
        {
            return view ('pages.index');
        }
        
public function service()
	{
		return view('pages.service');
	}

        public function assesment()
        {
            return view('pages.assesment');
        }






}
