<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix'=>'api'],function(){

	Route::resource('contact','ContactController');

}); 


Route::get('instagramshare','TestController@instagram'); 

Route::get('testinstagram','TestController@instahook');

Route::get('testmail','TestController@sendemail'); 



