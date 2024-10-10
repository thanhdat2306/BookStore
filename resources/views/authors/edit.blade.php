@extends('layouts.app')

@section('content')
<div class="container bg-cream p-4 shadow-sm rounded">
    <h2 class="text-navy mb-4">Edit Author</h2>
    <form action="{{ route('authors.update', $author->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="name" class="form-label text-navy">Author Name</label>
            <input type="text" class="form-control border-navy" id="name" name="name" value="{{ $author->name }}" required>
        </div>
        <button type="submit" class="btn btn-navy">Update Author</button>
    </form>
</div>
@endsection
