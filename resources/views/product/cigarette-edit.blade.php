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
<section>
    {{-- Redirect to admin panel --}}
    <button class="button button__back">
        <a href="{{ route('admin_panel') }}">&larr; Go back to admin panel</a>
    </button>

    <h1>Edit Panel</h1>

    {{-- Edit Cigarette Form --}}
    <form action="{{ route('cigarettes.update', $cigarette) }}" method="POST" enctype="multipart/form-data" class="#">
        <h3>Edit Cigarette</h3>
        @csrf
        @method('PUT')

        {{-- Current Name --}}
        <div>
            <input type="text" name="name" class="input" value="{{ $cigarette->name }}">
            @error('name')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        {{-- Current Type --}}
        <div>
            <input type="text" list="options" class="input" name="type" value="{{ $cigarette->type }}">
            <datalist id="options">
                <option value="elfbar">
                <option value="pod">
            </datalist>
            @error('type')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        {{-- Current Strength --}}
        <div>
            <input type="text" name="strength" class="input" value="{{ $cigarette->strength }}">
            @error('strength')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        {{-- Current Puffs --}}
        <div>
            <input type="number" name="puffs" class="input" value="{{ $cigarette->puffs }}">
            @error('puffs')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        {{-- Current Flavor --}}
        <div>
            <input type="text" name="flavor" class="input" value="{{ $cigarette->flavor }}">
            @error('flavor')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        {{-- Current Price --}}
        <div>
            <input type="number" name="price" class="input" value="{{ $cigarette->price }}">
            @error('price')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        {{-- Current Image --}}
        <div class="image-container">
            <p class="image-label">Current image</p>
            <img src="{{ asset('./storage/'. $cigarette->image) }}" alt="Current cigarette image" class="current-image">
        </div>

        {{-- Select new image --}}
        <div>
            <label for="image">Cover a new image</label>
            <input type="file" name="image" class="input">
            @error('image')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        {{-- Update --}}
        <div>
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
