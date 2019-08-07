<?php

namespace App\Http\Controllers;
use PDF;

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
		$data = ['title' => 'Welcome to HDTuto.com'];

        $pdf = PDF::loadView('pdf.documento4', $data);


        //return $pdf->download('itsolutionstuff.pdf');
	return $pdf->stream();

	}



}
