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

Route::get('/', function()
{
	return View::make('home');
});

Route::get('users', function()
{
    return View::make('users');
});

Route::get('aulas', function() {
    return View::make('about/aulas');
});

Route::get('horarios', function() {
    return View::make('about/horarios');
});

Route::get('localizacao', function() {
    return View::make('about/localizacao');
});

Route::get('planos', function() {
    return View::make('plans/index');
});

Route::get('contato', function() {
    return View::make('contact/index');
});

Route::get('detalhes', function() {
    return View::make('about/detalhes');
});