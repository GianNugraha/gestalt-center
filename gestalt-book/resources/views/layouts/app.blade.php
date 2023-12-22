<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
<style>
table, th, td {
  border: 1px solid white;
  border-collapse: collapse;
}
th, td {
  background-color: #96D4D4;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Test Gestalt')</title>

    <!-- Include your CSS and JS assets here -->
    {{-- Example: --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
</head>
<body>

    <header>
        <nav>
            <ul>
                {{-- Add more navigation links as needed --}}
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Include your additional scripts here -->
    {{-- Example: --}}
    {{-- <script src="{{ asset('js/app.js') }}"></script --}}
</body>
</html>
