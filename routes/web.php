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

Route::get('', 'HomeController@index')->name('home');

Route::get('opportunities', 'OpportunityController@index')->name('opportunities');

Route::get('industries', 'IndustryController@index')->name('industries');

Route::get('about', 'HomeController@about')->name('about');

Route::prefix('contact')->name('contact')->group(function() {

    Route::get('', 'ContactController@create');

    Route::post('', 'ContactController@submit')->middleware(['honeypot']);

});

Route::prefix('resume')->name('resume.')->group(function() {

    Route::get('', 'ResumeController@submit')->name('submit');

    Route::get('{resume}/download', 'ResumeController@download')->name('download');

    Route::post('', 'ResumeController@store')->middleware(['honeypot'])->name('store');

});
