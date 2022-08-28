<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\AuthorController;

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

// Route::get('/', function () {
//     return view('top-books', [
//         'title'=> 'TOP-BOOKS',
    
//     ]);
// });
// Route::get('/author', function () {
//     return view('author', [
//         'title'=> 'AUTHOR',
    
//     ]);
// });
// Route::get('/new-book', function () {
//     return view('new-book', [
//         'title'=> 'NEW RELEASE',
    
//     ]);
// });

Route::get('/', [CreateController::class, 'index']);
Route::get('/new-book', [CreateController::class, 'release']);
Route::get('/author', [AuthorController::class, 'index']);


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

