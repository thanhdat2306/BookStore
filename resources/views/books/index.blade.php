@extends('layouts.app')

@section('content')
<div class="container">
<h2 class="mt-4 text-center">Books Details</h2>
<div class="d-flex justify-content-start">
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
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
