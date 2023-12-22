<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Rental;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function listBooks()
    {
        $books = Book::all();
        return view('books.list', compact('books'));
    }

    public function listBorrowedBooks()
    {
        $borrowedBooks = Book::whereHas('rents')->get();
        return view('books.list_borrowed', compact('borrowedBooks'));
    }

    public function listBorrowed()
    {
        $rentals = Rental::with('book')->get();
        return view('books.list_borrowed', compact('rentals'));
    }

    public function listNeverBorrowed()
    {
        $neverBorrowedBooks = Book::doesntHave('rents')->get();
        return view('books.list_never_borrowed', compact('neverBorrowedBooks'));
    }

    public function filterByPrice()
    {
        $books = Book::whereBetween('price_rent', [2000, 6000])->get();
        return view('books.filter_by_price', compact('books'));
    }
}
