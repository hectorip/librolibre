<?php

class IndexController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$analytics_code = $_ENV['GOOGLE_ANALYTICS'];
		return View::make('index')->with('analytics_code', $analytics_code);
	}

	public function mail()
	{
		return View::make('emails.welcome');
		$mail = '';//geta mail;
		Mail::send('emails.welcome',[], function($message){
 			$message->to('hectorivanpatriciomoreno@gmail.com')->subject('Bienvenido a Libro Libre::México');
 		});
	}


}
