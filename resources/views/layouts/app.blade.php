<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title', 'Home') :: BharatPros</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
    @stack('styles')
</head>

<body class="bg-white text-gray-900">

    @include('layouts.header')

    <main class="container mx-auto px-8 py-8">

        @yield('content')

    </main>

    @include('layouts.footer')

    @stack('scripts')

</body>

</html>
