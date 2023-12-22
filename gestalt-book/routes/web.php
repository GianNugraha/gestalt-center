<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\BookController;
use App\Http\Controllers\CustomerController;

Route::get('/books', [BookController::class, 'listBooks'])->name('books.listBooks');
Route::get('/books/borrowed', [BookController::class, 'listBorrowedBooks'])->name('books.listBorrowedBooks');
Route::get('/books/filter-by-price', [BookController::class, 'filterByPrice'])->name('books.filterByPrice');
// Route::get('/books/borrowed-info', [BookController::class, 'listBorrowed']);
Route::get('/books/never-borrowed', [BookController::class, 'listNeverBorrowed'])->name('books.neverBorrowed');
Route::get('/customers/more-than-ten-borrowed', [CustomerController::class, 'listCustomersWithMoreThanTenBorrowedBooks'])->name('customers.infoBorrowed');
