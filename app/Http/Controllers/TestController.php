<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

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

}
