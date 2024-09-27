<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="#">
</head>
<body>
<div class="#">
    {{-- Go back to main page --}}
    <a href="{{ route('index') }}">&larr; Go back to main page</a>

    <h2>Admin Login</h2>

    {{-- Form --}}
    <form action="#" method="POST">

        {{-- Login --}}
        <div class="#">
            <label for="username">Login</label>
            <input type="text" name="username" class="input">
        </div>

        {{-- Password --}}
        <div class="#">
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>

        {{-- Confirm --}}
        <div class="#">
            <button type="submit">Confirm</button>
        </div>

    </form>
</div>
</body>
</html>

