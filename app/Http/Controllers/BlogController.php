<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
	{
	    $data = [
	        'title' => 'Blog',
	        'description' => 'Blog page'
	    ];
	         
	    $data['breadcrumbs'] = \Request::get('breadcrumbs');
	         
	    return view('blog', $data);
	}
}
