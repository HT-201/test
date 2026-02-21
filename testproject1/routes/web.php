<?php
// http://localhost:8000/
// http://127.0.0.1:8000/
// http://127.0.0.1:8000/articles

// こちらを使う
// http://localhost:8000/articles

// ターミナルでコマンド
// php artisan serve

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', [ArticleController::class, 'index'])->name('article.list');
Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article.show');