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

  


Route::middleware(['auth:sanctum', 'verified'])->group(function () {

  Route::get('/language/{language}', function ($language) {
      Session()->put('locale', $language);
   
      return redirect()->back();
  })->name('language');


    Route::get('/dashboard', function () {
	    return Inertia\Inertia::render('Dashboard');
	  })->name('dashboard');

    Route::get('/applications', 'App\Http\Controllers\ApplicationController@index')->name('applications.index');

    Route::get('/application/create', 'App\Http\Controllers\ApplicationController@create')->name('application.create');
    Route::post('/application/store', 'App\Http\Controllers\ApplicationController@store')->name('application.store');

  	Route::get('/application/{id}', 'App\Http\Controllers\ApplicationController@show')->name('application.show');

  	Route::get('/application/edit/{id}', 'App\Http\Controllers\ApplicationController@edit')->name('application.edit');
  	Route::patch('/application/update/{id}', 'App\Http\Controllers\ApplicationController@update')->name('application.update');


  	Route::delete('/application/delete/{id}', 'App\Http\Controllers\ApplicationController@destroy')->name('application.delete');

});



