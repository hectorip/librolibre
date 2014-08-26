<?php

class UserController extends \BaseController {

	

	/**
	 * Stores a user 
	 * 
	 */
	public function subscribe()
	{
		$validation = Validator::make(Input::all(),['name' => 'required', 'email' => 'required|email']);

		if($validation->fails())
		{
			return Redirect::back()->withInput()->withErrors($validation->messages());
		}

		User::create(Input::all());

		Mail::send('emails.welcome',['name' => Input::get('name')], function($message){
 			$message->to(Input::get('email'))->subject('Bienvenido a Libro Libre México');
 		});
		
		return Redirect::back()->with(['success' => 'Has sido registrado. ¡Muchas Gracias!']);
	}
}