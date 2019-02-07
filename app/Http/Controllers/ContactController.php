<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
	{
	    $data = [
	        'title' => 'Contact',
	        'description' => 'Contact page'
	    ];
	         
	    $data['breadcrumbs'] = \Request::get('breadcrumbs');
	         
	    return view('contact', $data);
	}

	public function send(Request $request)
    {
        $result = false;
        
        if($request->ajax() && !empty($request->all()))
        {
            $sender = $request;
            
            Mail::send('emails.default', ['sender' => $sender], function($message) use ($sender) {
                $message->from($sender->email, $sender->name);
                $message->to(env('MAIL_ADMIN_EMAIL'));
                $message->subject($sender->subject);
            });
            
            $result = true;
        }
        
        return response()->json(['result' => $result]);
    }
}
