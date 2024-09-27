<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link rel="#">
{{-- CSS ПОДКЛЮЧЕНИЕ СТИЛЕЙ --}}

{{--    @yield('content')--}}
{{--    @vite('resources/css/main.css')--}}

</head>
<body>
<div class="#">
    {{-- Go back to main page --}}
    <a href="{{ route('index') }}">&larr; Go back to main page</a>

    <h2>Admin Registration</h2>
    {{-- Form --}}
    <form action="{{ route('register') }}" method="post">

        @csrf

        {{-- Name --}}
        <div class="#">
            <label for="name">Name</label>
            <input type="text" name="name" class="input">

        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>

        {{-- Email --}}
        <div class="#">
            <label for="email">Email</label>
            <input type="text" name="email" class="input">

            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- Password --}}
        <div class="#">
            <label for="password">Password</label>
            <input type="password" name="password" class="input">

            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- Confirm Password --}}
        <div class="#">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" class="input">

        @error('password')
        <p class="#">if the passwords do not match, the input field becomes red</p>
        @enderror
        </div>

        {{-- Confirm --}}
        <div class="#">
            <button type="submit" class="#">Confirm</button>
        </div>

    </form>
</div>
</body>
</html>
