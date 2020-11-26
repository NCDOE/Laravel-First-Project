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
<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});


Route::get('/welcome', function () {
    return view('welcome');
});

=======


Route::get('/welcome', function () {
    return view('welcome');
});

>>>>>>> 44a3dd42e1170e914f77d99e8a8b15807725c4b0
Route::get('/about', function () {
    return view('about');
});

Route::get('/RequestQoute', function () {
    return view('RequestQoute');
});

<<<<<<< HEAD


Route::get('/Articles', function () {
 
 $article =App\Article::all();

 
 
    return view('Articles',['articles'=>$article]);
=======
Route::get('/Articles', function () {
    return view('Articles');
>>>>>>> 44a3dd42e1170e914f77d99e8a8b15807725c4b0
});


Route::get('/YourReview', function () {
    return view('YourReview');
});

