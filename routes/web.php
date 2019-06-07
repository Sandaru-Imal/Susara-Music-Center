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
Route::get('/home2', function () {
    return view('susaratemp-home');
 });
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
 //Validation route and link to CheckoutController
  // Route::get('form-validation', 'CheckoutController@formValidation');
  // Route::post('form-validation', 'CheckoutController@formValidationPost');


Auth::routes(); 

Route::get('/home', 'HomeController@index');
Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

//gateher all routes in admin group
Route::prefix('admin')->group(function(){

    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');

    Route::post ('/login','Auth\AdminLoginController@login')->name('admin.login.submit');

    Route::get('/','AdminController@index')->name('admin.dashboard');

    Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

    Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

    Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');

    Route::post('/password/reset','Auth\AdminResetPasswordController@reset');

    Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

    Route::get('/register','AdminRegisterController0@showRegisterForm');

    Route::post('/register','AdminRegisterController@register');
});

Route::prefix('/custom-register')->group(function(){
    Route::get('','CustomAuthController@showRegisterForm')->name('custom.register');
    Route::post('','CustomAuthController2@register2');
});
