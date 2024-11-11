<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="#">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    {{-- Hot reboot for page --}}
    @vite('resources/views/admin')
    @vite('resources/css/main.css')
</head>
<body>

<div class="container__login">
    {{-- Go back to main page --}}

    <button class="button button__back">
        <a href="{{ route('home') }}">&larr; Go back to home page</a>
    </button>
    {{-- Form --}}
    <form action="{{ route('login') }}" method="POST" class="form__login">
    <h2 class="login__title">Admin Login</h2>

        @csrf

        {{-- Login --}}
        <div class="login__inputs">
            <div class="login__name">
                <input type="text" name="name" value="{{ old('name') }}"
                @class(['input-name', 'error-red-input' => $errors->has('name')]) placeholder="dimon pisidron">
                    <!-- <i class='bx bxs-user'></i> -->

                    <div class="valid-error">
                        @error('name')
                            <p class="message-error">{{ $message }}</p>
                        @enderror
                    </div>
            </div>

            {{-- Password --}}
            <div class="login__password">
                <input type="password" name="password"
                @class(['input-password', 'error-red-input' => $errors->has('password')]) placeholder="123">
                <!-- <i class='bx bxs-key icon-q'></i> -->

                <div class="valid-error">
                    @error('password')
                        <p class="message-error">{{ $message }}</p>
                    @enderror
                </div>

            </div>
        </div>

        {{-- Error Message --}}
        @error('failed')
            <p class="failed-base">{{ $message }}</p>
        @enderror

        {{-- Confirm --}}
            <button type="submit" class="button button__submit">Confirm</button>
    </form>
</div>
</body>
</html>

