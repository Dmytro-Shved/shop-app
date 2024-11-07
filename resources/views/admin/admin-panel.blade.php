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
        <form action="{{ route('cigarettes.store') }}" method="POST" enctype="multipart/form-data"
              class="form__nov-product">
            <h3 class="login__title">Create new Cigarette</h3>

            @csrf
            {{-- Name --}}
            <div class="product-input">
                <input type="text" name="name" class="input" placeholder="Name">

                @error('name')
                <p>{{ $message }}</p>
                @enderror
            </div>

            {{-- Type --}}
            <div class="product-input">
                <input type="text" list="options" class="input" name="type" placeholder="Type">
                <datalist id="options">
                    <option value="elfbar">
                    <option value="pod">
                </datalist>

                @error('type')
                <p>{{ $message }}</p>
                @enderror
            </div>

            {{-- Strength --}}
            <div class="product-input">
                <input type="text" name="strength" class="input" placeholder="Strength">

                @error('strength')
                <p>{{ $message }}</p>
                @enderror
            </div>

            {{-- Puffs --}}
            <div class="product-input">
                <input type="number" name="puffs" class="input" placeholder="Puffs">

                @error('puffs')
                <p>{{ $message }}</p>
                @enderror
            </div>

            {{-- Flavor --}}
            <div class="product-input">
                <input type="text" name="flavor" class="input" placeholder="Flavor">

                @error('flavor')
                <p>{{ $message }}</p>
                @enderror
            </div>

            {{-- Price --}}
            <div class="product-input">
                <input type="number" name="price" class="input" placeholder="Price">

                @error('price')
                <p>{{ $message }}</p>
                @enderror
            </div>

            {{-- Image --}}
            <div class="product-input">
                <input type="file" name="image" class="input" placeholder="Image">

                @error('image')
                <p>{{ $message }}</p>
                @enderror
            </div>

            {{-- Confirm --}}
            <div class="#">
                <button type="submit">Confirm</button>
            </div>
        </form>

        {{-- Liquid Form --}}
        <form action="{{ route('liquids.store') }}" method="POST" enctype="multipart/form-data"
              class="form__nov-product">
            <h3 class="login__title">Create new Liquid</h3>

            @csrf
            {{-- Name --}}
            <div class="product-input">
                <input type="text" name="name" class="input" placeholder="Name">

                @error('name')
                <p>{{ $message }}</p>
                @enderror
            </div>

            {{-- PG/VG Ratio --}}
            <div class="product-input">
                <input type="text" name="pg_vg_ratio" class="input" placeholder="PG/VG Ratio">

                @error('pg_vg_ratio')
                <p>{{ $message }}</p>
                @enderror
            </div>

            {{-- Volume --}}
            <div class="product-input">
                <input type="number" name="volume" class="input" placeholder="Volume">

                @error('volume')
                <p>{{ $message }}</p>
                @enderror
            </div>

            {{-- Flavor --}}
            <div class="product-input">
                <input type="text" name="flavor" class="input" placeholder="Flavor">

                @error('flavor')
                <p>{{ $message }}</p>
                @enderror
            </div>

            {{-- Price --}}
            <div class="product-input">
                <input type="number" name="price" class="input" placeholder="Price">

                @error('price')
                <p>{{ $message }}</p>
                @enderror
            </div>

            {{-- Image --}}
            <div class="product-input">
                <input type="file" name="image" class="input" placeholder="Image">

                @error('image')
                <p>{{ $message }}</p>
                @enderror
            </div>

            {{-- Confirm --}}
            <button type="submit">Confirm</button>
        </form>
    </div>

    {{-- Logout button --}}
    <form action="{{ route('admin_logout') }}" method="POST" class="px-4    ">
        @csrf
        <button type="submit" class="button button__logout">Logout</button>
    </form>

    {{-- Go back to home page --}}
    <a href="{{ route('home') }}" class="button" style="background-color: #559def; color: white">&larr; Go back to home
        page</a>
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
