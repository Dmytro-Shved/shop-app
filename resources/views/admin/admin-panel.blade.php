<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" type="image/png" href="{{ asset('https://cdn-icons-png.flaticon.com/512/3665/3665892.png') }}">
    <title>Admin Panel</title>
</head>

@vite([
    'resources/css/admin.css',
    'resources/js/filtr.js',
    'resources/js/image-preview.js',
])

<body>

 {{--Go to the top --}}
<div>
    <a href="#produkts" class="arrow-top-link">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm.53 5.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 1 0 1.06 1.06l1.72-1.72v5.69a.75.75 0 0 0 1.5 0v-5.69l1.72 1.72a.75.75 0 1 0 1.06-1.06l-3-3Z" clip-rule="evenodd" />
        </svg>
    </a>
</div>

<section class="catal">

    {{-- Session messages --}}
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif(session()->has('delete'))
        <div class="alert alert-delete">
            {{ session('delete') }}
        </div>
    @elseif(session()->has('edit'))
        <div class="alert alert-edit">
            {{ session('edit') }}
        </div>
    @endif

    <div class="header-container">

        {{-- Go back to home page --}}
        <a href="{{ route('home') }}" class="button-back"> ⤺ Go back to home page </a>

        <!-- Welcome admin -->
        <h2 class="welcome-admin">Welcome {{ auth()->user()->name }}</h2>

        <!-- Logout button -->
        <form action="{{ route('admin_logout') }}" method="POST">
            @csrf
            <button type="submit" class="button__logout">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z" clip-rule="evenodd" />
                </svg>
                Logout
            </button>
        </form>
    </div>

    <h1 class="produkt-title" id="produkts">Admin Panel</h1>

    <div class="container_block products">

        {{--Cigarette Form --}}
        <x-cigaretteForm/>

        {{--Liquid Form --}}
        <x-liquidForm/>
    </div>
</section>

<section class="catal">
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
</html>
