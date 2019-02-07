<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //
    public function index()
	{
	    $data = [
	        'title' => 'Portfolio',
	        'description' => 'Portfolio page'
	    ];
	         
	    $data['breadcrumbs'] = \Request::get('breadcrumbs');
	         
	    return view('portfolio', $data);
	}
}
