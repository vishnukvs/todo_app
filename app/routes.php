<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/','TasksController@index');
Route::resource('tasks','TasksController');
Route::get('/create',function(){
	return View::make('create');
});
Route::get('contact',function(){
	return View::make('contact');
});
Route::post('contact',function(){
	$data = Input::all();
	$rules = array(
		'name'=>'required',
		'email'=>'required',
		'messages'=>'required');
	$emailContent = array(
		'name'=>$data['name'],
		'email'=>$data['email'],
		'messages'=>$data['messages']);
	$validate = Validator::make($data,$rules);
	if($validate->fails()){
		return Redirect::to('contact')->withErrors($validate)->withInput();
	}

	$emailContent = array(
		'name'=>$data['name'],
		'email'=>$data['email'],
		'messages'=>$data['messages']);
	Mail::send('emails.contactemail', $emailContent, function($message)
	{
		$message->to('vishnu@burbtech.com.au','Vishnu Projects')
		->subject('Contact via Our Contact Form');
	});

	return  Redirect::to('home');
});
