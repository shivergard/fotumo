<?php
use Illuminate\Support\Facades\Route;

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

Route::get('/fortumo/init' , 'Shivergard\Fortumo\FortumoController@init');

Route::get('/fortumo/{method}', function($method)
{
    $controller = new Shivergard\Fortumo\FortumoController;
    if (method_exists ( $controller , $method ))
    	return $controller->{$method}();
    else
    	return \Redirect::to('/');
});

Route::get('/fortumo/{method}/{param}', function($method , $param)
{
    $controller = new Shivergard\Fortumo\FortumoController;
    if (method_exists ( $controller , $method ))
    	return $controller->{$method}($param);
    else
    	return \Redirect::to('/');
});
