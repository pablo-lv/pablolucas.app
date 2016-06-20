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

//Blog Routes
Route::get('/blog/', [
    'as' => 'site.blog',
    'uses' => 'PostsController@index'
]);

Route::get('/blog/{slug}', [
    'as' => 'site.post',
    'uses' => 'PostsController@show'
]);




// Auth Routes
Route::auth();

// Dashboard Routes
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'HomeController@index');

    //Posts Routes
    Route::post('/blog', [
        'as' => 'blog.store',
        'uses' => 'PostsController@store'
    ]);

    Route::put('/blog/{slug}', [
        'as' => 'blog.update',
        'uses' => 'PostsController@update'
    ]);

    Route::delete('/blog/{slug}', [
        'as' => 'blog.destroy',
        'uses' => 'PostsController@destroy'
    ]);

    Route::get('/dashboard/create', [
        'as' => 'blog.create',
        'uses' => 'PostsController@create'
    ]);

});

