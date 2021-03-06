<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', [
    	'as' => 'welcome',
    	'uses' => 'WelcomeController@index'
    ]);

    Route::get('home', [
    	'as' => 'home',
    	'uses' => 'HomeController@index'
    ]);

    Route::get('about', [
    	'as' => 'about',
    	'uses' => 'PageController@about'
    ]);

    Route::get('contact', [
    	'as' => 'contact',
    	'uses' => 'PageController@contact'
    ]);

    Route::get('services', [
    	'as' => 'services',
    	'uses' => 'PageController@services'
    ]);

    Route::get('products', [
    	'as' => 'products',
    	'uses' => 'PageController@products'
    ]);

    Route::get('gallery', [
    	'as' => 'gallery',
    	'uses' => 'PageController@gallery'
    ]);

    Route::get('sitemap', [
    	'as' => 'sitemap',
    	'uses' => 'PageController@sitemap'
    ]);

    Route::get('terms', [
    	'as' => 'terms',
    	'uses' => 'PageController@terms'
    ]);

    Route::get('privacy', [
    	'as' => 'privacy',
    	'uses' => 'PageController@privacy'
    ]);

    Route::get('testimonials', [
    	'as' => 'testimonials',
    	'uses' => 'PageController@testimonials'
    ]);

    Route::get('certificates', [
    	'as' => 'certificates',
    	'uses' => 'PageController@certificates'
    ]);

    Route::get('specials', [
    	'as' => 'specials',
    	'uses' => 'PageController@specials'
    ]);

    Route::get('packages', [
    	'as' => 'packages',
    	'uses' => 'PageController@packages'
    ]);
});
