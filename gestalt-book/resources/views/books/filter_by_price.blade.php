<!-- resources/views/books/filter_by_price.blade.php -->

@extends('layouts.app')

@section('title', 'Books with Price Between Rp. 2000 and Rp. 6000')

@section('content')
    <h1>daftar buku diatas Rp. 2000 and dibawah Rp. 6000</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Price Rent</th>
                <th>Book Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->price_rent }}</td>
                    <td>{{ $book->book_category }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('books.listBorrowedBooks') }}" class="btn btn-primary">Daftar Buku yang dipinjam</a> <br/>
    <a href="{{ route('books.neverBorrowed') }}" class="btn btn-primary">Daftar Buku yang tidak pernah dipinjam</a> <br/>
    <a href="{{ route('books.listBooks') }}" class="btn btn-primary">Daftar Semua Buku</a> <br/>
    <a href="{{ route('customers.infoBorrowed') }}" class="btn btn-primary">Data Customer yang meminjam buku lebih dari 10</a>
@endsection
