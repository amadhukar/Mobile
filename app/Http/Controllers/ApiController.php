<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Person; 


class ApiController extends Controller {

	//

	public function index()
	{
		$person = Person::all(); 

		return $person; 

	}

}
