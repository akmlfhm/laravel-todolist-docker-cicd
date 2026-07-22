<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Todo</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Trix Editor -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

    <!-- Custom Style -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
        .nav-link:hover {
            color: #6366f1 !important;
        }
    </style>
</head>
<body>

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Flash Message (jika ada) --}}
    @if (session('success'))
        <div class="container mt-3">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    {{-- Content --}}
    <div class="container py-4">
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer class="text-center py-3 text-muted border-top mt-5">
        <small>&copy; {{ date('Y') }} Muh. Akmal Fahim - Mini Project 2 Aplikasi ToDoList Laravel</small>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });
    </script>
</body>
</html>
