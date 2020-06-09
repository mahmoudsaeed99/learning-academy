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

Route::get('/','Front\HomepageController@index')->name('front.homepage');

Route::get('/courses/cat/{id}','Front\CourseController@courseCat')->name('front.courseCat');
Route::get('/courses/cat/{id}/course/{c_id}','Front\CourseController@show')->name('front.show');



