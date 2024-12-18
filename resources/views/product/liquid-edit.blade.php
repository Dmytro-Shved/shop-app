<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="{{ asset('https://png.pngtree.com/png-vector/20190909/ourlarge/pngtree-outline-pencil-icon-and-symbol-isolated-png-image_1727869.jpg') }}">
    @vite('resources/css/admin-edit.css')

    <title>Edit Panel</title>
</head>

<body>
<section class="#">
    {{-- Redirect to admin panel --}}
    <button class="button button__back">
        <a href="{{ route('admin_panel') }}">&larr; Go back to admin panel</a>
    </button>

    <h1>Edit Panel</h1>

    {{-- Edit Cigarette Form --}}
    <form action="{{ route('liquids.update', $liquid) }}" method="POST" enctype="multipart/form-data" class="#">
        <h3 class="#">Edit Liquid</h3>
        @csrf
        @method('PUT')

        {{-- Current Name --}}
        <div class="#">
            <input type="text" name="name" class="input" value="{{ $liquid->name }}">

            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>

        {{-- PG/VG Ratio --}}
        <div class="#">
            <input type="text" name="pg_vg_ratio" class="input" value="{{ $liquid->pg_vg_ratio }}">

            @error('pg_vg_ratio')
                <p>{{ $message }}</p>
            @enderror
        </div>

        {{-- Volume --}}
        <div class="#">
            <input type="number" name="volume" class="input" value="{{ $liquid->volume }}">

            @error('volume')
                <p>{{ $message }}</p>
            @enderror
        </div>

        {{-- Current Flavor --}}
        <div class="#">
            <input type="text" name="flavor" class="input" value="{{ $liquid->flavor }}">

            @error('flavor')
                <p>{{ $message }}</p>
            @enderror
        </div>

        {{-- Current Price --}}
        <div class="#">
            <input type="number" name="price" class="input" value="{{ $liquid->price }}">

            @error('price')
                <p>{{ $message }}</p>
            @enderror
        </div>

        {{-- Current Image --}}
        <div class="image-container">
            <p class="image-label">Current image</p>
            <img src="{{ asset('./storage/'. $liquid->image) }}" alt="" class="current-image">
        </div>

        {{-- Select new image --}}
        <div class="#">
            <label for="image">Cover a new image</label>
            <input type="file" name="image" class="input">

            @error('image')
                <p>{{ $message }}</p>
            @enderror
        </div>

        {{-- Update --}}
        <div class="#">
            <button type="submit">Update</button>
        </div>
    </form>
</section>

<footer class="footer">
    <div class="footer-container">
        <p>© 2024 ElfVapeShop. All rights reserved.</p>
    </div>
</footer>
</body>

</html>
