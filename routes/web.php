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
    return view('welcome');
});


Route::get('test', function() {


   $cats = DB::table('cats')->get();

   return $cats;
});
Auth::routes();

Route::get('/verify/{token}', 'Auth\RegisterController@verify')->name('register.verify');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(
    [
        'prefix'       => 'admin',
        'as'           => 'admin.',
        'namespace'    => 'Admin',
        'middleware'   => ['auth']
    ],
    function() {
        Route::get('/', 'HomeController@index')->name('home');
      //  Route::resource('users');
    }
);