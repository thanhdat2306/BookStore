<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book and Author Management</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f3f4f6;
        }
        .navbar {
            background-color: #001f3f;
        }
        .navbar-brand {
            color: #fff !important;
        }
        .nav-link {
            color: #000 !important;
            background-color: #fff;
            border-radius: 5px;
            margin-left: 10px;
            padding: 5px 15px;
            font-weight: 500;
        }
        .nav-link:hover {
            background-color: #f8f9fa;
        }
        .btn-custom {
            background-color: #001f3f;
            color: #fff;
        }
        .btn-custom:hover {
            background-color: #003366;
        }
        .table-custom th {
            background-color: #001f3f;
            color: #fff;
        }
        .table-custom td {
            background-color: #f8f9fa;
        }
        .footer {
            background-color: #001f3f;
            color: #fff;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">Author & Book Management App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('authors.index') }}">Authors</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('books.index') }}">Books</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<footer class="footer text-center mt-4 py-3">
    <p>&copy; Book.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
