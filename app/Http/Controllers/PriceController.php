<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceController extends Controller
{
    //
    public function index()
	{
	    $data = [
	        'title' => 'Price',
	        'description' => 'Price page'
	    ];
	         
	    $data['breadcrumbs'] = \Request::get('breadcrumbs');
	         
	    return view('price', $data);
	}
}
