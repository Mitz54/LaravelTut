<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/{slug}', 'FrontEndController@page');

// Route::get('/', 'FrontEndController@page')->name('home');
// Route::get('/{services}', 'FrontEndController@page')->name('services');
// Route::get('/contact-Us', 'FrontEndController@page')->name('contactUs');
// Route::get('/about-Us', 'FrontEndController@page')->name('aboutUs');                    #name use to connect !NOTE!: if route was use as href, you need to always include this line;
