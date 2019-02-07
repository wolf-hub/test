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


Route::get('/', 'MainController@index');
Route::middleware('breadcrumbs')->group(function(){
Route::get('/typography', 'TypographyController@index');
Route::get('/components', 'ComponentsController@index');
Route::get('/pricingbox', 'PriceController@index');
Route::get('/portfolio', 'PortfolioController@index');
Route::get('/blog', 'BlogController@index');
Route::get('/contact', 'ContactController@index');
});
Route::post('/sendmail', 'Ajax\ContactController@send');