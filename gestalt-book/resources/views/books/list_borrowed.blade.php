<!-- resources/views/books/list_borrowed.blade.php -->

@extends('layouts.app')

@section('title', 'List Borrowed Books')

@section('content')
    <h1>Daftar Buku yang dipinjam</h1>

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
            @foreach ($borrowedBooks as $book)
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
    <a href="{{ route('books.filterByPrice') }}" class="btn btn-primary">Daftar Buku diatas 2000 dan dibawah 6000</a> <br/>
    <a href="{{ route('books.neverBorrowed') }}" class="btn btn-primary">Daftar Buku yang tidak pernah dipinjam</a> <br/>
    <a href="{{ route('books.listBooks') }}" class="btn btn-primary">Daftar Semua Buku</a> <br/>
    <a href="{{ route('customers.infoBorrowed') }}" class="btn btn-primary">Data Customer yang meminjam buku lebih dari 10</a>
@endsection
