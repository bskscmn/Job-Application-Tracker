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

    Route::get('/dashboard', function () {
	    return Inertia\Inertia::render('Dashboard');
	})->name('dashboard');

    Route::get('/applications', 'App\Http\Controllers\ApplicationController@index')->name('applications.index');
    Route::get('/application/create', 'App\Http\Controllers\ApplicationController@create')->name('applications.create');
  	Route::get('/application/{id}', 'App\Http\Controllers\ApplicationController@show')->name('applications.show');

});



