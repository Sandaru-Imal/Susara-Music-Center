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
 // route and link to CheckoutController
 Route::post('/checkout', [
   'uses' => 'CartController@postCheckout',
   'as' => 'checkout'
 ]);


Auth::routes(); 

Route::get('/home', 'HomeController@index');
Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

//gateher all routes in admin group
Route::prefix('admin')->group(function(){

    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');

    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');

    Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

    Route::post('/password/email','Auth\Admin@sendResetLinkEmail')->name('admin.password.email');

    Route::get('/password/reset','Auth\Admin@showLinkRequestForm')->name('admin.password.request');

    Route::post('/password/reset','Auth\AdminResetPasswordController@reset');

    Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

    Route::get('/register','AdminRegisterController0@showRegisterForm')->name('admin.regiter');

    Route::get('/','AdminController@index')->name('admin.dashboard');

    
});

Route::prefix('/custom-register')->group(function(){
    Route::get('','CustomAuthController@showRegisterForm')->name('custom.register');
    Route::post('','CustomAuthController2@register2');
});

Route::prefix('/custom-login')->group(function(){
    Route::get('','CustomLoginController@showLoginForm')->name('custom.login');
    Route::post('','CustomLoginController@Login2');
});

// Auth::routes();
//Auth rutes

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
