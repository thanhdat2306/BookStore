@extends('layouts.app')

@section('content')
<div class="container bg-cream p-4 shadow-sm rounded">
    <h2 class="text-navy mb-4">Edit Book</h2>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="title" class="form-label text-navy">Book Title</label>
            <input type="text" class="form-control border-navy" id="title" name="title" value="{{ $book->title }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="author_id" class="form-label text-navy">Author</label>
            <select class="form-control border-navy" id="author_id" name="author_id" required>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}" {{ $book->author_id == $author->id ? 'selected' : '' }}>{{ $author->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-navy">Update Book</button>
    </form>
</div>
@endsection
