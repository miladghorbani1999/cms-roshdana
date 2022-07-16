<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorContrllor;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;
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
Route::get('', [ArticleController::class, 'index'] )->name('articles');
Route::get('article/{article:slug}', [ArticleController::class, 'show'] )->name('article');
Route::post('article/{article}/store-comment',        [CommentController::class, 'store'])->name('comment.store');

Route::get('tag/{tag}/articles',[TagController::class, 'articles_tag']);

Route::get('category/{category}/articles',[CategoryController::class, 'articles_category']);

Route::get('author/{author}/articles',[AuthorContrllor::class, 'articles_author']);


Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
