@extends('layouts.app')

@section('content')
<div class="container">
<h2 class="mt-4 text-center">Authors Details</h2> 
    <div class="d-flex justify-content-start"> 
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
                        <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display:inline;">
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
