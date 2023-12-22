@extends('layouts.app')

@section('title', 'Data Customer yang meminjam lebih dari 10')

@section('content')
    <h1>Data Customer yang meminjam lebih dari 10</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Amount of Borrowed Books</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->rents_count }}</td>
                    </tr>
                @endforeach
        </tbody>
    </table>
    <a href="{{ route('books.filterByPrice') }}" class="btn btn-primary">Daftar Buku diatas 2000 dan dibawah 6000</a> <br/>
    <a href="{{ route('books.listBorrowedBooks') }}" class="btn btn-primary">Daftar Buku yang dipinjam</a> <br/>
    <a href="{{ route('books.neverBorrowed') }}" class="btn btn-primary">Daftar Buku yang tidak pernah dipinjam</a> <br/>
    <a href="{{ route('books.listBooks') }}" class="btn btn-primary">Daftar Semua Buku</a> <br/>
@endsection
