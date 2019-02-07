<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    //
    public function index()
	{
	    $data = [
	        'title' => 'Component',
	        'description' => 'Component page'
	    ];
	         
	    $data['breadcrumbs'] = \Request::get('breadcrumbs');
	         
	    return view('components', $data);
	}
}
