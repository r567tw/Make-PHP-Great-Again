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

Route::resource('article', 'ArticleController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('sendMail', function () {
    \Mail::to('abc@abc.com')->send(new \App\Mail\FirstMail);
});

Route::get('middlewareTest', function () {
    return 'Hello example@example.com';
})->middleware('FirstMiddleware');

Route::get('upload','UploadController@uploadPage');
Route::post('upload','UploadController@upload');

Route::get('welcome/{locale}', function ($locale) {
    app()->setLocale($locale);
    return view('welcome');
});


