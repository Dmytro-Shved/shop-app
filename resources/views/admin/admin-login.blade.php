<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="#">

    {{-- Hot reboot for page --}}
    @vite('resources/views/admin')

</head>
<body>
<div class="#">
    {{-- Go back to main page --}}
    <a href="{{ route('home') }}">&larr; Go back to home page</a>

    <h2>Admin Login</h2>

    {{-- Form --}}
    <form action="{{ route('login') }}" method="POST">

        @csrf

        {{-- Login --}}
        <div class="#">
            <label for="name">Name</label>
            <input type="text" name="name" class="input">

        @error('name')
            <p>{{ $message }}</p>
        @enderror
        </div>

        {{-- Password --}}
        <div class="#">
            <label for="password">Password</label>
            <input type="password" name="password">

            @error('password')
            <p>{{ $message }}</p>
            @enderror
        </div>

        {{-- Error Message --}}
        @error('failed')
            <p>{{ $message }}</p>
        @enderror

        {{-- Confirm --}}
        <div class="#">
            <button type="submit">Confirm</button>
        </div>
    </form>
</div>
</body>
</html>

