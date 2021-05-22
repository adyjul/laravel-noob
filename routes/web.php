<?php

use App\Http\Controllers\control_authors;
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

Route::get('/home', function () {
    return view('home');
});

Route::get('/todo', function () {
    return view('todo-list');
});

// Route::get('/admin', function () {
//     return view('admin.admin');
// });

//Author
Route::get('/admin', [control_authors::class, 'index']);
Route::get('/gambar/{image}', [control_authors::class, 'load_image']);


//News
Route::get('/news', [control_news::class, 'index']);
Route::get('/gambar/{image}', [control_authors::class, 'load_image']);

// Route::get('/home', function () {
//     return view('home');
// });
