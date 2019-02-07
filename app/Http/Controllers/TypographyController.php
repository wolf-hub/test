<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypographyController extends Controller
{
    //
    public function index()
	{
	    $data = [
	        'title' => 'Typography',
	        'description' => 'Typography page'
	    ];
	         
	    $data['breadcrumbs'] = \Request::get('breadcrumbs');
	         
	    return view('typography', $data);
	}
}

