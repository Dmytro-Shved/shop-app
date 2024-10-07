<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="{{ asset('https://png.pngtree.com/png-vector/20190909/ourlarge/pngtree-outline-pencil-icon-and-symbol-isolated-png-image_1727869.jpg') }}">
    <title>Edit Panel</title>
</head>
{{-- ПОКА ЧТО НЕ ПОДКЛЮЧЕНЫ СТИЛИ, РАСКОММЕНТИРУЙ КОД НИЖЕ ЧТОБЫ МОЖНО БЫЛО ДЕЛАТЬ СТИЛИЗАЦИЮ--}}
{{--@vite('resources/css/main.css')--}}

<body>
<section class="#">
        <h1>Edit Panel</h1>

        {{-- Edit Cigarette Form --}}
        <form action="{{ route('cigarettes.update', $cigarette) }}" method="POST" enctype="multipart/form-data" class="#">
            <h3 class="#">Edit Cigarette</h3>
            @csrf
            @method('PUT')

            {{-- Current Name --}}
            <div class="#">
                <input type="text" name="name" class="input" value="{{ $cigarette->name }}">

                @error('name')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            {{-- Current Type --}}
            <div class="#">
                <input type="text" list="options" class="input" name="type" value="{{ $cigarette->type }}">
                <datalist id="options">
                    <option value="elfbar">
                    <option value="pod">
                </datalist>

                @error('type')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            {{-- Current Strength --}}
            <div class="#">
                <input type="text" name="strength" class="input" value="{{ $cigarette->strength }}">

                @error('strength')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            {{-- Current Puffs --}}
            <div class="#">
                <input type="number" name="puffs" class="input" value="{{ $cigarette->puffs }}">

                @error('puffs')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            {{-- Current Flavor --}}
            <div class="#">
                <input type="text" name="flavor" class="input" value="{{ $cigarette->flavor }}">

                @error('flavor')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            {{-- Current Price --}}
            <div class="#">
                <input type="number" name="price" class="input" value="{{ $cigarette->price }}">

                @error('price')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            {{-- Current Image --}}
            <div class="#">
                <p>Current image</p>
                <img src="{{ asset('./storage/'. $cigarette->image) }}" alt="">
            </div>

            {{-- Select new image --}}
            <div class="#">
                <label for="image">Cover a new image</label>
                <input type="file" name="image" class="input" placeholder="Image">

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
</body>

</html>
