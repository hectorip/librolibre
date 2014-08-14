<?php

class IndexController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		View::make('index');
	}

	public function sendMail($user)
	{
		$mail = //geta mail;
		Mail::send('emails.welcome',[], function($message){
 			$message->to('hectorivanpatriciomoreno@gmail.com')->subject('Bienvenido a Libro Libre::México');
 		});
	}


}
