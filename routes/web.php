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


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

Route::get('profile', function () {
  return 'This is profile';
})->middleware('verified');



// Authentication Routes...
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\LoginController@login');
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// // Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// // Password Reset Routes...
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Route::get('admins/register', 'Auth\AdminsRegisterController@showRegistrationForm')->name('admin.register');
// Route::post('admins/register', 'Auth\AdminsRegisterController@register');

// Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation');

Route::get('/home', 'HomeController@index')->name('home');
