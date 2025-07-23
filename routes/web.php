<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CKEditorController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('index', [PostController::class, 'index'])->name('index');
Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::get('posts/single/{slug}', [PostController::class, 'single'])->name('posts.single');
Route::get('posts/comment/{slug}', [PostController::class, 'comment'])->name('posts.comment');
Route::get('posts/category/{slug}', [PostController::class, 'category'])->name('posts.category');

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::post('/comments/show', [CommentController::class, 'comment'])->name('comments.show');

Route::get('categroy', [CategoryController::class, 'index'])->name('categroy.index');
Route::get('categroy/create', [CategoryController::class, 'create'])->name('categroy.create');
Route::post('categroy', [CategoryController::class, 'store'])->name('categroy.store');
Route::get('categroy/post/{slug}', [CategoryController::class, 'post'])->name('categroy.post');

Route::post('/ckeditor/upload', [CKEditorController::class, 'upload'])->name('ckeditor.upload');
