<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;

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
    return view('auth.pages.login');
});


Route::get('/admin', 'HomeController@superadmin')->name('superadmin');
Route::get('/guru', 'HomeController@guru')->name('guru');
Route::get('/siswa', 'HomeController@siswa')->name('siswa');

Route::get('logout_all', function(){
	\Session::flush();
	return redirect(url('/'));
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/menu-admin', function(){
// 	if(Session::has('superadmin')){
// 		return view('admin');
// 	} else {
// 		return view('login');
// 	}
// });

// Route::get('/home', 'HomeController@index')->name('home');

Route::post('sign_in', 'AuthController@login');
