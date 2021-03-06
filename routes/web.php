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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// PUBLIC ROUTES
Route::get('/ar', function () {
    return view('public.ar');
})->name('ar');
Route::get('/aframe', function () {
    return view('public.aframe');
})->name('aframe');
Route::get('/test', function () {
    return view('public.test');
})->name('test');
Route::get('/contatti', function () {
    return view('contatti');
});


// PROFILO
Route::get('/password/edit','Auth\ResetPasswordController@edit')->middleware('auth')->name('password.edit');
Route::post('/password/edit','Auth\ResetPasswordController@updatePassword')->middleware('auth')->name('password.edit');

Route::get('/profilo/create','ProfiloController@create')->middleware('auth')->name('profilo.create');
Route::post('/profilo/store','ProfiloController@store')->middleware('auth')->name('profilo.store');
// For a route with the following URI: profile/{id}
Route::get('/profilo/edit/{id}','ProfiloController@create')->middleware('auth')->name('profilo.edit');
Route::post('/profilo/update/{id}','ProfiloController@update')->middleware('auth')->name('profilo.update');

// ISTAT - Ajax
Route::get('istat/province/{regionecodice}', function($regionecodice){
    $province = App\Istat::getProvinciaDDL($regionecodice);
    return response()->json($province) ?? abort(404);
})->middleware('auth')->name('istat.province');

Route::get('istat/comuni/{provinciacodice}', function($provinciacodice){
    $comuni = App\Istat::getComuneDDL($provinciacodice);
    return response()->json($comuni) ?? abort(404);
})->middleware('auth')->name('istat.comuni');