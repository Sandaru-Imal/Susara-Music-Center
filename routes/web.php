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

  Auth::routes(['verify' => true]);
 Route::get('/', 'FrontController@index' )->name('home');
 Route::get('/percution', 'FrontController@percution' )->name('percution');
 Route::get('/percution', [
   'uses' => 'InstrumentsController@getIndex',
   // 'uses' => 'Instruments_exController@getIndex',
   'as' => 'instrument.percution'
 ]);
 Route::get('/dd65', 'FrontController@percution_dd65' );

 Route::get('/add-to-cart/{instrumentId}', [
   'uses' => 'InstrumentsController@getAddToCart',
   'as' => 'instrument.addToCart'
 ]);
//Cart route and link to CartController
 Route::get('/shopping-cart', [
   'uses' => 'CartController@getCart',
   'as' => 'shop.shoppingCart'
 ]);
 //Checkout route and link to CartController
  Route::get('/checkout', [
    'uses' => 'CartController@getCheckout',
    'as' => 'checkout'
  ]);
 // route and link to CheckoutController
 Route::post('/checkout', [
   'uses' => 'CartController@postCheckout',
   'as' => 'checkout'
 ]); 
Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::get('admins/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('admins/login', 'Auth\AdminLoginController@login')->name('admin.login');
Route::get('admins/register', 'Auth\AdminsRegisterController@showRegisterForm')->name('admin.register');
Route::post('admins/register', 'Auth\AdminsRegisterController@register')->name('admin.register');

Route::get('/home', 'HomeController@index')->name('home');