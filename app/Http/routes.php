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

//Portfolio Routes
Route::get('/', [
    'as' => 'site.index',
    'uses' => 'PortfolioController@index'
]);

Route::get('/resume',[
    'as' => 'site.resume',
    'uses' => 'PortfolioController@resume'
]);

Route::get('/portfolio' , [
    'as' => 'site.portfolio',
    'uses' => 'PortfolioController@portfolio'
]);

Route::get('/contact', [
    'as' => 'site.contact',
    'uses' => 'PortfolioController@contact'
]);
