<?php

namespace App\Http\Controllers;
use VerumConsilium\Browsershot\Facades\PDF;


use Illuminate\Http\Request;

class TestsController extends Controller
{
    //
      public function index()
    {
        return view('welcome');
        
    }
    
	public function test1()
	{
		//return view('welcome');
		
		//return PDF::loadView('view.name', $data)->inline();
		return PDF::loadView('welcome', ['prueba1'=>''])->inline();

	}



}
