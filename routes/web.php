<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;


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

Route::get('/', [App\Http\Controllers\BlogsController::class, 'index'])->name('blogs');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/blogs', [App\Http\Controllers\BlogsController::class, 'index'])->name('blogs')->middleware('auth');

Route::get('/blogs/create', [App\Http\Controllers\BlogsController::class, 'create'])->name('blogs.create')->middleware('auth');

Route::post('/blogs/store', [App\Http\Controllers\BlogsController::class, 'store'])->name('blogs.store')->middleware('auth');

Route::get('/blogs/{id}', [App\Http\Controllers\BlogsController::class, 'show'])->name('blogs.show');

Route::get('/blogs/{id}/edit', [App\Http\Controllers\BlogsController::class, 'edit'])->name('blogs.edit')->middleware('auth');

Route::patch('/blogs/{id}/update', [App\Http\Controllers\BlogsController::class, 'update'])->name('blogs.update')->middleware('auth');

Route::delete('/blogs/{id}/delete', [App\Http\Controllers\BlogsController::class, 'delete'])->name('blogs.delete')->middleware('auth');

Route::post('/blogs/comment', [App\Http\Controllers\CommentController::class, 'store'])->name('comments.store')->middleware('auth');

Route::resource('users', UserController::class);




