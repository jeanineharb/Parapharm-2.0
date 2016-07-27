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

Route::get('/', function () {
    // return view('welcome');
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', ['as' => 'contact', function () {
    return view('contact');
}]);

Route::get('/products/noreva', function () {
    return view('products.noreva');
});

Route::get('/products/contapharm', function () {
    return view('products.contapharm');
});

Route::get('/products/beautymed', function () {
    return view('products.beautymed');
});

Route::get('/products/onagrine', function () {
    return view('products.onagrine');
});

Route::post('contact_request','ContactController@getContactUsForm');
