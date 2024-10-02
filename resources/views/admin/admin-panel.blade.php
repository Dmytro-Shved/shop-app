<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
</head>
@vite('resources/css/main.css')

<body>
<h1>Admin Panel</h1>

@if(session()->has('success'))
    <div>
        {{ session('success') }}
    </div>
@endif

<section class="catalog">
<div class="#">
    <hr>
    <h3>Create new Cigarette :</h3>

    {{-- Cigarette Form --}}
    <form action="{{ route('cigarettes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- Name --}}
        <div class="#">
            <label for="name">Name</label>
            <input type="text" name="name" class="input">

            @error('name')
            <p>{{ $message }}</p>
            @enderror
        </div>

        {{-- Type --}}
        <div class="#">
            <label for="type">Type</label>
            <input type="text" list="options" class="input" name="type">
            <datalist id="options">
                <option value="elfbar">
                <option value="pod">
            </datalist>

            @error('type')
            <p>{{ $message }}</p>
            @enderror
        </div>

        {{-- Strength --}}
        <div class="#">
            <label for="strength">Strength</label>
            <input type="text" name="strength" class="input">

            @error('strength')
            <p>{{ $message }}</p>
            @enderror
        </div>

        {{-- Puffs --}}
        <div class="#">
            <label for="puffs">Puffs</label>
            <input type="number" name="puffs" class="input">

            @error('puffs')
            <p>{{ $message }}</p>
            @enderror
        </div>

        {{-- Flavor --}}
        <div class="#">
            <label for="flavor">Flavor</label>
            <input type="text" name="flavor" class="input">

            @error('flavor')
            <p>{{ $message }}</p>
            @enderror
        </div>

        {{-- Price --}}
        <div class="#">
            <label for="price">Price</label>
            <input type="number" name="price" class="input">

            @error('price')
            <p>{{ $message }}</p>
            @enderror
        </div>

        {{-- Image --}}
        <div class="#">
            <label for="image">Image</label>
            <input type="file" name="image" class="input">

            @error('image')
            <p>{{ $message }}</p>
            @enderror
        </div>

        {{-- Confirm --}}
        <div class="#">
            <button type="submit">Confirm</button>
        </div>
    </form>

    <hr>
    <h3>Create new Liquid</h3>

    {{-- Liquid Form --}}
    <form action="{{ route('liquids.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- Name --}}
        <div class="#">
            <label for="name">Name</label>
            <input type="text" name="name" class="input">

            @error('name')
            <p>{{ $message }}</p>
            @enderror
        </div>

        {{-- PG/VG Ratio --}}
        <div class="#">
            <label for="pg_vg_ratio">PG/VG Ratio</label>
            <input type="text" name="pg_vg_ratio" class="input">

            @error('pg_vg_ratio')
            <p>{{ $message }}</p>
            @enderror
        </div>

        {{-- Volume --}}
        <div class="#">
            <label for="volume">Volume</label>
            <input type="number" name="volume" class="input">

            @error('volume')
            <p>{{ $message }}</p>
            @enderror
        </div>

        {{-- Flavor --}}
        <div class="#">
            <label for="flavor">Flavor</label>
            <input type="text" name="flavor" class="input">

            @error('flavor')
            <p>{{ $message }}</p>
            @enderror
        </div>

        {{-- Price --}}
        <div class="#">
            <label for="price">Price</label>
            <input type="number" name="price" class="input">

            @error('price')
            <p>{{ $message }}</p>
            @enderror
        </div>

        {{-- Image --}}
        <div class="#">
            <label for="image">Image</label>
            <input type="file" name="image" class="input">

            @error('image')
            <p>{{ $message }}</p>
            @enderror
        </div>

        {{-- Confirm --}}
        <div class="#">
            <button type="submit">Confirm</button>
        </div>
    </form>

    <hr>
</div>
    <br>
    <br>
    <br>
<h2>All Products:</h2>
    <div class="container">
        <div class="grid">
            {{-- Cigarettes --}}
            @foreach($cigarettes as $cigarette)
                <x-cigarette-card
                    :name="$cigarette->name"
                    :image="$cigarette->image"
                    :strength="$cigarette->strength"
                    :puffs="$cigarette->puffs"
                    :flavor="$cigarette->flavor"
                    :price="$cigarette->price"
                    :type="$cigarette->type"
                />
            @endforeach

            {{-- Liquids --}}
            @foreach($liquids as $liquid)
                <x-liquid-card
                    :name="$liquid->name"
                    :image="$liquid->image"
                    :pg_vg_ratio="$liquid->pg_vg_ratio"
                    :volume="$liquid->volume"
                    :flavor="$liquid->flavor"
                    :price="$liquid->price"
                />
            @endforeach
        </div>
    </div>
</section>
</body>
</html>
