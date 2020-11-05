<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public function home()
	{
	    return view('pages.index');
	}

	public function about(){
		return view('pages.about', ['nama' => 'sidik permana']);
	}
}
