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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//profile routes
Route::get('/profile', 'ProfileController@index')->name('profile');

//Kyc routes
Route::get('/verify', 'KycController@index')->name('Verify');
Route::get('/verify/residence', 'KycController@residence')->name('Verify');
Route::get('/verify/contact', 'KycController@contact')->name('Verify');
//Purchase tokens routes
Route::get('/buy', 'PurchaseController@index')->name('buy');

//Purchase tokens routes - Personal
Route::get('/buy/{id}', 'PurchaseController@purchaseType')->name('purchaseType');

/*//Purchase tokens routes - Corporate
Route::get('/buy/corporate', 'PurchaseController@buyCorporate')->name('corporate');

//Purchase tokens routes - Institutional
Route::get('/buy/institutional', 'PurchaseController@BuyInstitutional')->name('institutional');*/

//Messeges
Route::get('/messages', 'MessageController@index')->name('Messeges');

//Timeline
Route::get('/timeline', 'TimelineController@index')->name('timeline');

//price
Route::get('/price', 'PriceController@index')->name('price');