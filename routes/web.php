<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;

Route::get('about', [PageController::class, 'about'])->name('about');

Route::get('/', [PageController::class, 'welcome'])->name('welcome');

Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');

Route::get('articles/{id}', [ArticleController::class, 'show'])->name('articles.show');


/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
Route::get('about', function () {
    return view('about');
})->name('about');
*/
