<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Mail; 

class TestController extends Controller {

	//

	public function instagram()
	{
		return view("test.instagram"); 
		//return redirect('http://www.google.com'); 
	}

	public function instahook()
	{
		return redirect('instagram://camera'); 
	}

	public function sendemail()
	{
		Mail::send('emails.testing',[],function($message){

			$message->to('a.madhukar@yahoo.com')->subject('Testing'); 

		}); 
	}

}
