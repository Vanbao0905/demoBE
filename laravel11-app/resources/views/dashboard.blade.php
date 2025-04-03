<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10.48.0 - CRUD User Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
</head>
<body class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
<nav class="navbar">
    <div class="mx-auto text-center">
        @guest
            <a href="#" class="mx-2 text-gray-600">Home</a>
                <span class="mx-2 text-black">|</span>
            <a href="{{ route('login') }}" class="mx-2 text-black font-bold">Đăng nhập</a>
                <span class="mx-2 text-black">|</span>
            <a href="{{ route('user.createUser') }}" class="mx-2 text-gray-600">Đăng ký</a>
        @else
                <span class="mx-2 text-black">|</span>
            <a href="{{ route('signout') }}" class="mx-2 text-gray-600">Thoát</a>
        @endguest
    </div>
</nav>
@yield('content')
</body>
</html>
