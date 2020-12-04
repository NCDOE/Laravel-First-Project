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


Route::get('/about', function () {
    return view('about');
});

Route::get('/RequestQoute', function () {
    return view('RequestQoute');
});

Route::get('/Articles', function () {
 
 $article =App\Article::take(3)->latest()->get();

 
 
    return view('Articles',['articles'=>$article]);
});
Route::get('/Articles/{article}', 'ArticlesController@show');


Route::get('/YourReview', function () {
    return view('YourReview');
});

