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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// jobs
Route::get('/', 'JobController@index');
Route::get('/jobs/{id}/{job}', 'JobController@show')->name('jobs.show');
Route::get('/jobs/create', 'JobController@create')->name('jobs.view');
Route::post('/jobs/create', 'JobController@store')->name('jobs.store');

// company
Route::get('/company/{id}/{name}', 'CompanyController@index')->name('company.index');
Route::get('/company/create', 'CompanyController@create')->name('company.view');
Route::post('/company/create', 'CompanyController@store')->name('company.store');
Route::post('/company/coverphoto', 'CompanyController@coverPhoto')->name('cover.photo');
Route::post('/company/logo', 'CompanyController@companyLogo')->name('company.logo');

// user profile
Route::get('/user/profile', 'UserController@index')->name('jobseeker.profile');
Route::post('/user/profile/create', 'UserController@store')->name('profile.create');
Route::post('/user/coverletter', 'UserController@coverletter')->name('cover.letter');
Route::post('/user/resume', 'UserController@resume')->name('resume');
Route::post('/user/avatar', 'UserController@avatar')->name('avatar');

Route::view('/employer/register', 'auth.employer-register')->name('employer.register');
Route::post('/employer/register', 'EmployerRegisterController@employerRegister')->name('emp.register');
