<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

#region Books Routes
// Pages
Route::get('/', [BookController::class, 'index'])->name('book.index');
Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
Route::get('/book/edit/{book}', [BookController::class, 'edit'])->name('book.edit');
Route::get('/book/{book}', [BookController::class, 'show'])->name('book.show');
// Actions
Route::post('/book/store', [BookController::class, 'store'])->name('book.store');
Route::put('/book/update/{book}', [BookController::class, 'update'])->name('book.update');
Route::delete('/book/delete/{book}', [BookController::class, 'destroy'])->name('book.destroy');
#endregion

#region Authors Routes
// Pages
Route::get('/author', [AuthorController::class, 'index'])->name('author.index');
Route::get('/author/create', [AuthorController::class, 'create'])->name('author.create');
Route::get('/author/edit/{author}', [AuthorController::class, 'edit'])->name('author.edit');
Route::get('/author/{author}', [AuthorController::class, 'show'])->name('author.show');
// Actions
Route::post('/author/store', [AuthorController::class, 'store'])->name('author.store');
Route::put('/author/update/{author}', [AuthorController::class, 'update'])->name('author.update');
Route::delete('/author/delete/{author}', [AuthorController::class, 'destroy'])->name('author.destroy');
#endregion

#region Categories Routes
// Pages
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');
// Actions
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::put('/category/update/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/delete/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
#endregion
