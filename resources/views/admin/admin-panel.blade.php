<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
</head>
@vite('resources/css/main.css')

<body>
    <div class="arrow-top">
        <a href="#produkts" class="arrow-top-link">↑</a>
    </div>
    @if(session()->has('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <section class="catalog">
        <div class="container produkts">
            <h1 class="produkt-title" id="produkts">Admin Panel</h1>


            {{-- Cigarette Form --}}
            <form action="{{ route('cigarettes.store') }}" method="POST" enctype="multipart/form-data" class="form__login">
            <h3 class="login__title">Create new Cigarette :</h3>

                @csrf
                {{-- Name --}}
                <div class="#">
                    <input type="text" name="name" class="input" placeholder="Name">

                    @error('name')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                {{-- Type --}}
                <div class="#">
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
                <div class="#">
                    <input type="text" name="strength" class="input" placeholder="Strength">

                    @error('strength')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                {{-- Puffs --}}
                <div class="#">
                    <input type="number" name="puffs" class="input" placeholder="Puffs">

                    @error('puffs')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                {{-- Flavor --}}
                <div class="#">
                    <input type="text" name="flavor" class="input" placeholder="Flavor">

                    @error('flavor')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                {{-- Price --}}
                <div class="#">
                    <input type="number" name="price" class="input" placeholder="Price">

                    @error('price')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                {{-- Image --}}
                <div class="#">
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
            <form action="{{ route('liquids.store') }}" method="POST" enctype="multipart/form-data" class="form__login">
            <h3 class="login__title">Create new Liquid</h3>

                @csrf
                {{-- Name --}}
                <div class="#">
                    <input type="text" name="name" class="input" placeholder="Name">

                    @error('name')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                {{-- PG/VG Ratio --}}
                <div class="#">
                    <input type="text" name="pg_vg_ratio" class="input" placeholder="PG/VG Ratio">

                    @error('pg_vg_ratio')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                {{-- Volume --}}
                <div class="#">
                    <input type="number" name="volume" class="input" placeholder="Volume">

                    @error('volume')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                {{-- Flavor --}}
                <div class="#">
                    <input type="text" name="flavor" class="input" placeholder="Flavor">

                    @error('flavor')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                {{-- Price --}}
                <div class="#">
                    <input type="number" name="price" class="input" placeholder="Price">

                    @error('price')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                {{-- Image --}}
                <div class="#">
                    <input type="file" name="image" class="input" placeholder="Image">

                    @error('image')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                {{-- Confirm --}}
                    <button type="submit">Confirm</button>
            </form>

        </div>
    </section>

    <section class="catalog">
        <h2 class="catalog-title">All Products:</h2>
        <div class="container">
            <div class="grid">
                {{-- Cigarettes --}}
                @foreach($cigarettes as $cigarette)
                    <x-cigarette-card :name="$cigarette->name" :image="$cigarette->image" :strength="$cigarette->strength"
                        :puffs="$cigarette->puffs" :flavor="$cigarette->flavor" :price="$cigarette->price"
                        :type="$cigarette->type" />
                @endforeach

                {{-- Liquids --}}
                @foreach($liquids as $liquid)
                    <x-liquid-card :name="$liquid->name" :image="$liquid->image" :pg_vg_ratio="$liquid->pg_vg_ratio"
                        :volume="$liquid->volume" :flavor="$liquid->flavor" :price="$liquid->price" />
                @endforeach
            </div>
        </div>
    </section>


</body>

</html>