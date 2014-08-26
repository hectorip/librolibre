<?php
Route::get('/','IndexController@index');
Route::get('/mail','IndexController@mail');
Route::post('/user/subscribe','UserController@subscribe');