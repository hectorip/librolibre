<?php
Route::get('/','IndexController@index');
Route::get('/mail','IndexController@mail');

// Route::get('/', function()
// {
// 	return View::make('index');
// });

// Route::get('/mail', function()
// {
// 	Mail::send('emails.welcome',[], function($message){
// 		$message->to('hectorivanpatriciomoreno@gmail.com')->subject('Bienvenido a Libro Libre::México');
// 	});
// });
