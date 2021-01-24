<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;


Route::post('/storeQuestions', 'PagesController@storeQuestions')->name('storeQuestions');

Route::get('/','PagesController@index');
Route::get('/impacts','PagesController@impacts');
Route::get('/consultancy','PagesController@consultancy');
Route::get('/machinery', 'PagesController@machinery');
Route::get('/blog', 'PagesController@blog');
Route::get('/contact', 'PagesController@contact');
Route::get('/hire', 'PagesController@hire');

// Route::get('/donate', 'PagesController@donate');



Auth::routes();




