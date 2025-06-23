<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CRUD de Estudantes')</title>
    <style>
        body {
            display: none;
        }
    </style>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.body.style.display = 'block';
        });
    </script>
</head>
<body class="bg-dark">
    
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>