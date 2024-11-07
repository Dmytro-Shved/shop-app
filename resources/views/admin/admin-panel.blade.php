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

{{-- Go to the top --}}
<div class="arrow-top">
    <a href="#produkts" class="arrow-top-link">↑</a>
</div>

{{--Session messages --}}
@if(session()->has('success'))
    <div>
        {{ session('success') }}
    </div>
@elseif(session()->has('delete'))
    <div>
        {{ session('delete') }}
    </div>
@elseif(session()->has('edit'))
    <div>
        {{ session('edit') }}
    </div>
@endif

{{-- Welcome Admin --}}
<h2 class="welcome-admin" style="text-align: center">Welcome {{auth()->user()->name}}</h2>

<section class="catalog">

    <div class="container produkts">
        <h1 class="produkt-title" id="produkts">Admin Panel</h1>

        {{-- Cigarette Form --}}
        <x-cigaretteForm/>

        {{-- Liquid Form --}}
        <x-liquidForm/>
    </div>

    {{-- Logout button --}}
    <form action="{{ route('admin_logout') }}" method="POST" class="px-4    ">
        @csrf
        <button type="submit" class="button button__logout">Logout</button>
    </form>

    {{-- Go back to home page --}}
    <a href="{{ route('home') }}" class="button" style="background-color: #559def; color: white">&larr; Go back to home page</a>
</section>

<section class="catalog">
    <h2 class="catalog-title">Edit Products:</h2>
    <div class="container">

        {{-- Filter --}}
        <ul class="filter-list">
            <li class="filter-item" data-filter="">All</li>
            <li class="filter-item" data-filter="liquid">Liquid</li>
            <li class="filter-item" data-filter="elfbar">Elfbar</li>
            <li class="filter-item" data-filter="pod">Vape</li>
        </ul>

        {{-- Product list --}}
        <livewire:product-list/>
    </div>
</section>
</body>

</html>
