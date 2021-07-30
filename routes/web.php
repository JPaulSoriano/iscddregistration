<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('registrations','RegistrationController');
Route::get('/details/{registration}', 'RegistrationController@details')->name('details');
Route::delete('/unverify/{registration}', 'RegistrationController@unverify')->name('unverify');
Route::get('/verify/{registration}', 'RegistrationController@verify')->name('verify');
Route::delete('/unadmit/{registration}', 'RegistrationController@unadmit')->name('unadmit');
Route::get('/admit/{registration}', 'RegistrationController@admit')->name('admit');
Route::delete('/unenroll/{registration}', 'RegistrationController@unenroll')->name('unenroll');
Route::get('/enroll/{registration}', 'RegistrationController@enroll')->name('enroll');
Route::get('/status', 'RegistrationController@status')->name('status');