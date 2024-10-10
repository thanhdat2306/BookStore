@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New Book</h2>
    <form action="{{ route('books.store') }}" method="POST" class="border p-4 bg-white shadow-sm">
        @csrf
        <div class="form-group">
            <label for="title" class="form-label">Book Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="author_id" class="form-label">Author</label>
            <select class="form-control" id="author_id" name="author_id" required>
                <option value="" disabled selected>Select Author</option>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-custom mt-3">Add Book</button>
    </form>
</div>
@endsection
