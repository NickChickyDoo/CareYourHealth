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
// Route::get('/', '\App\Http\Controllers\Auth\LoginController@login')->name('login');

Route::get('/', function () {
    return view('auth.login');
});
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');


Route::group(['prefix' => 'physician'], function() {
    Route::resource('manage-patiant','PhysicianController');
        Route::get('manage-patiant','PhysicianController@index')->name('physician.home');

    Route::resource('treatment','TreatmentController');
    Route::resource('patiant','PatiantController');
    Route::resource('assignment', 'AssignmentController');
    Route::resource('dispense', 'DispenseController');
});


Route::group(['prefix' => 'admin'], function() {
    //

    Route::resource('manage-user', 'AdminController');

    Route::resource('manage-patiant', 'UserController');
        Route::get('manage-patiant', 'UserController@index')->name('admin.index');
    Route::delete('manage-patiant/{id}', 'UserController@destroyUser')->name('admin.destroy');


    Route::get('home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');


});


Route::get('line', 'LineNotifyController@sent')->name('line.sent');

Route::get('/lineSent', function () {
    return view('line');
});







// Route::get('{any}', 'UboldController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
