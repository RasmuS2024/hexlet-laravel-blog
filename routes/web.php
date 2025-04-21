<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;

Route::get('about', [PageController::class, 'about'])->name('about');

Route::get('/', [PageController::class, 'welcome'])->name('welcome');

Route::resource('articles', ArticleController::class);

Route::resource('articles.comments', ArticleCommentController::class);
