<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Models\Author;
use App\Models\Book;

Route::get('/', function () {
    $authors = Author::with('books')->get();  
    $books = Book::with('author')->get();    
    return view('home', compact('authors', 'books')); 
})->name('home');

Route::resource('authors', AuthorController::class);
Route::resource('books', BookController::class);
