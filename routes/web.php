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

Route::get('/', 'JobController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/jobs/{id}/{job}', 'JobController@show')->name('jobs.show');

// company
Route::get('/company/{id}/{name}', 'CompanyController@index')->name('company.index');

// user profile
Route::get('/user/profile', 'UserController@index');
Route::post('/user/profile/create', 'UserController@store')->name('profile.create');
Route::post('/user/coverletter', 'UserController@coverletter')->name('cover.letter');
Route::post('/user/resume', 'UserController@resume')->name('resume');