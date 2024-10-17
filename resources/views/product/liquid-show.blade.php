<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="{{ asset('https://cdn-icons-png.flaticon.com/128/829/829117.png') }}">
    <title>Show Panel</title>
</head>
{{-- ПОКА ЧТО НЕ ПОДКЛЮЧЕНЫ СТИЛИ, РАСКОММЕНТИРУЙ КОД НИЖЕ ЧТОБЫ МОЖНО БЫЛО ДЕЛАТЬ СТИЛИЗАЦИЮ--}}
// @vite('resources/css/main.css')

<body>
    {{-- Redirect to admin panel --}}
    <button class="button button__back">
        <a href="{{ route('admin_panel') }}">&larr; Go back to admin panel</a>
    </button>

    {{-- Image --}}
    <div class="product__description" data-id="{{ $liquid->id }}">
        {{-- Name --}}
        <h2 class="product__name">{{ $liquid->name }}</h2>
        {{-- Info --}}
        <div class="product__info">
            ✔&nbsp;PG/VG - {{ $liquid->pg_vg_ratio }}
            <br>
            ✔&nbsp;Pojemność - {{ $liquid->volume }} ml
            <br>
            ✔&nbsp;Smak: {{ $liquid->flavor }}
        </div>
        {{-- Price --}}
        <p class="product__price">Cena: {{ $liquid->price }} zł</p>
    </div>

    {{-- Image --}}
    <img class="product__image" src="{{ asset('./storage/'. $liquid->image) }}" alt="{{ $liquid->name }}" />

    {{-- Кнопка "Купить" --}}
    <button class="product__buy">Kup teraz</button>

</body>
</html>
