<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="{{ asset('https://cdn-icons-png.flaticon.com/128/829/829117.png') }}">
    <title>Show Panel</title>
</head>

{{-- @vite('resources/css/main.css')--}}

<body>
    {{-- Redirect to admin panel --}}
    <button class="button button__back">
        <a href="{{ route('admin_panel') }}">&larr; Go back to admin panel</a>
    </button>

    <div class="product__description" data-id="{{ $cigarette->id }}">
        {{-- Name --}}
        <h2 class="product__name">{{ $cigarette->name }}</h2>
        {{-- Info --}}
        <div class="product__info">
            ✔&nbsp;Moc - {{ $cigarette->strength }}%
            <br>
            ✔&nbsp;{{ $cigarette->puffs }} zaciągnięć
            <br>
            ✔&nbsp;Smak: {{ $cigarette->flavor }}
        </div>
        {{-- Price --}}
        <p class="product__price">Cena: {{ $cigarette->price }} zł</p>
    </div>

    {{-- Image --}}
    <img class="product__image" src="{{ asset('./storage/' . $cigarette->image) }}" alt="{{ $cigarette->name }}" />

</body>
</html>
