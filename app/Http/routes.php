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

// ===============================================
// STATIC PAGES ==================================
// ===============================================

Route::get('/', function () {
    return View::make('index');
});

Route::get('/about', function () {
    return View::make('about');
});

Route::get('/contact', ['as' => 'contact', function () {
    return View::make('contact');
}]);

Route::post('contact_request','ContactController@getContactUsForm');


// ===============================================
// PRODUCTS SECTION ==============================
// ===============================================

Route::group(array('prefix' => 'products'), function(){

	Route::get('noreva', function () {
	    return View::make('products.noreva');
	});

	Route::get('contapharm', function () {
	    return View::make('products.contapharm');
	});

	Route::get('beautymed', function () {
	    return View::make('products.beautymed');
	});

	Route::get('onagrine', function () {
	    return View::make('products.onagrine');
	});

});

