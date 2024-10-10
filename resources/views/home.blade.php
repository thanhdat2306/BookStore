@extends('layouts.app')

@section('content')
<div class="container">
<h1 class="mt-4 text-center">Home</h1>
    <h2 class="mt-4">Authors</h2> 
    <div class="d-flex justify-content-end"> 
        <a href="{{ route('authors.create') }}" class="btn btn-custom mb-3">Add New Author</a>
    </div>
    <table class="table table-bordered table-custom">
        <thead>
            <tr>
                <th>Author Name</th>
                <th>Books Written</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $author->name }}</td>
                    <td>
                        @foreach ($author->books as $book)
                            {{ $book->title }}@if(!$loop->last), @endif
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2 class="mt-4">Books</h2>
    <div class="d-flex justify-content-end"> 
        <a href="{{ route('books.create') }}" class="btn btn-custom mb-3">Add New Book</a>
    </div>
    <table class="table table-bordered table-custom">
        <thead>
            <tr>
                <th>Book Title</th>
                <th>Author</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author->name }}</td>
                    <td>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
