<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" type="image/png" href="{{ asset('https://cdn-icons-png.flaticon.com/512/3665/3665892.png') }}">
    <title>Admin Panel</title>
</head>
@vite('resources/css/main.css')
@vite('resources/js/filtr.js')

<body>

 {{--Go to the top --}}
<div class="arrow-top">
    <a href="#produkts" class="arrow-top-link">
        {{ svg('zondicon-arrow-outline-up') }}
    </a>
</div>



<section class="catalog">
    {{-- Session messages --}}
    @if(session()->has('success'))
        <div class="session-message success">
            <span class="icon">&#10003;</span> {{ session('success') }}
        </div>
    @elseif(session()->has('delete'))
        <div class="session-message delete">
            {{ session('delete') }}
        </div>
    @elseif(session()->has('edit'))
        <div class="session-message edit">
            {{ session('edit') }}
        </div>
    @endif

    <div class="header-container">
        <!-- Кнопка возврата на главную -->
        <a href="{{ route('home') }}" class="button-back"> ⤺ Go back to home page </a>

        <!-- Приветствие админа -->
        <h2 class="welcome-admin">Welcome {{ auth()->user()->name }}</h2>

        <!-- Кнопка Логаута -->
        <form action="{{ route('admin_logout') }}" method="POST">
            @csrf

            <button type="submit" class="button__logout">
                {{ svg('ri-logout-box-line') }} Logout
            </button>
        </form>
    </div>

    <h1 class="produkt-title" id="produkts">Admin Panel</h1>

    <div class="container produkts">

         {{--Cigarette Form --}}
        <x-cigaretteForm/>

         {{--Liquid Form --}}
        <x-liquidForm/>
    </div>
</section>

<section class="catalog">
    <h2 class="catalog-title">Edit Products:</h2>
    <div class="container">

         {{--Filter --}}
        <ul class="filter-list">
            <li class="filter-item" data-filter="">All</li>
            <li class="filter-item" data-filter="liquid">Liquid</li>
            <li class="filter-item" data-filter="elfbar">Elfbar</li>
            <li class="filter-item" data-filter="pod">Vape</li>
        </ul>

         {{--Product list --}}
        <livewire:product-list/>
    </div>
</section>
</body>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const messages = document.querySelectorAll('.session-message');
        messages.forEach((message) => {
            setTimeout(() => {
                message.style.display = 'none';
            }, 6000); // Сообщение исчезает через 6 секунд
        });
    });
</script>

</html>
