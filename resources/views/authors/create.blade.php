@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New Author</h2>
    <form action="{{ route('authors.store') }}" method="POST" class="border p-4 bg-white shadow-sm">
        @csrf
        <div class="form-group">
            <label for="name" class="form-label">Author Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-custom mt-3">Add Author</button>
    </form>
</div>
@endsection
