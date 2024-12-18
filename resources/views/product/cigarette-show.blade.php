<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="{{ asset('https://cdn-icons-png.flaticon.com/128/829/829117.png') }}">
    @vite('resources/css/admin-show.css')

    <title>Show Panel</title>
</head>

<body>
{{-- Redirect to admin panel --}}
<button class="button button__back">
    <a href="{{ route('admin_panel') }}">&larr; Go back to admin panel</a>
</button>

<section class="product-card">
    {{-- Image --}}
    <img class="product__image" src="{{ asset('./storage/' . $cigarette->image) }}" alt="{{ $cigarette->name }}" />

    <div class="product__details">
        {{-- Name --}}
        <h2 class="product__name">{{ $cigarette->name }}</h2>

        {{-- Price --}}
        <p class="product__price">Cena: {{ $cigarette->price }} zł</p>

        {{-- Info --}}
        <div class="product__info">
            <p><strong>Moc:</strong> {{ $cigarette->strength }}%</p>
            <p><strong>Zaciągnięcia:</strong> {{ $cigarette->puffs }} zaciągnięć</p>
            <p><strong>Smak:</strong> {{ $cigarette->flavor }}</p>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="footer-container">
        <p>© 2024 ElfVapeShop. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
