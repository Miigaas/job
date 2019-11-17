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

Route::get('/', 'JobController@index')->name('job.index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//jobs
Route::get('/jobs/{id}/{job}', 'JobController@show')->name('jobs.show');

//company
Route::get('/company/{id}/{company}', 'CompanyController@index')->name('company.index');

//users
Route::get('user/profile', 'UserController@index')->name('user.profile');
Route::post('/user/profile/create', 'UserController@update')->name('user.profile.update');
