<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Papieros</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+10&family=New+Amsterdam&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('storage/images/logo/logo_link.png') }}">

    <link rel="stylesheet" href="/resources/css/main.css" />

    @yield('content')

    @vite('resources/css/main.css')

    @vite('resources/js/app.js')
    @vite('resources/js/bootstrap.js')
    @vite('resources/js/hurt.js')
    @vite('resources/js/main.js')
    @vite('resources/js/filtr.js')

    @vite('public/images')

    @vite('resources/js/header-menu.js')
</head>

<body>
<header class="header">
    <div class="container header__container">
        <a href="#" class="header__photo">
            <img class="header__logo" src="{{ asset('storage/images/logo/logo-header.svg') }}" alt="logo-header" />
        </a>
        <div class="menu-icon" id="menuIcon">&#9776;</div>

        <nav class="header__nav" id="mobileMenu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="#" rel="preconnect" class="nav__link">KATALOG</a>
                </li>
                <li class="nav__item">
                    <a href="#rec" rel="preconnect" class="nav__link">RECENZJE</a>
                </li>
                <li class="nav__item">
                    <a href="#kon" rel="preconnect" class="nav__link">KONTAKT</a>
                </li>
                <li class="nav__item">
                    <a href="#wholesale" rel="preconnect" class="nav__link">HURTOWNIA</a>
                </li>
            </ul>
        </nav>

        <div class="header-button"><a href="https://t.me/GgYyPpSsY" target="_blank" rel="noopener">subskrybuj Telegram</a></div>

        <div class="overlay" id="overlay"></div>
    </div>
</header>


<main class="main">
    <section class="hero">
        <div class="hero-video">
            <video autoplay muted loop playsinline>
                <source src="{{ asset('./storage/videos/hero-video.mp4') }}" type="video/mp4">
                Ваш браузер не поддерживает видео.
            </video>
        </div>
        <div class="container hero-container">

            <h1 class="hero-title"> Twoja nowa rzeczywistość <br>zaczyna się tutaj</h1>
        </div>
        <div class="creeping-line">
            <div>
                <h2 class="creeping-title">DARMOWA DOSTAWA OD 4 SZT • </h2>
                <h2 class="creeping-title">DARMOWA DOSTAWA OD 4 SZT • </h2>
                <h2 class="creeping-title">DARMOWA DOSTAWA OD 4 SZT • </h2>
                <h2 class="creeping-title">DARMOWA DOSTAWA OD 4 SZT • </h2>
                <h2 class="creeping-title">DARMOWA DOSTAWA OD 4 SZT • </h2>
                <h2 class="creeping-title">DARMOWA DOSTAWA OD 4 SZT • </h2>
                <h2 class="creeping-title">DARMOWA DOSTAWA OD 4 SZT • </h2>
                <h2 class="creeping-title">DARMOWA DOSTAWA OD 4 SZT • </h2>
                <h2 class="creeping-title">DARMOWA DOSTAWA OD 4 SZT • </h2>
                <h2 class="creeping-title">DARMOWA DOSTAWA OD 4 SZT • </h2>
                <h2 class="creeping-title">DARMOWA DOSTAWA OD 4 SZT • </h2>
                <h2 class="creeping-title">DARMOWA DOSTAWA OD 4 SZT • </h2>
                <h2 class="creeping-title">DARMOWA DOSTAWA OD 4 SZT • </h2>
            </div>
        </div>
    </section>


    <section class="catalog">
        <div class="container">

            <ul class="filter-list">
                <li class="filter-item" data-filter="">All</li>
                <li class="filter-item" data-filter="liquid">Liquid</li>
                <li class="filter-item" data-filter="elfbar">Elfbar</li>
                <li class="filter-item" data-filter="pod">Vape</li>
            </ul>


            <ul class="grid">
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
            </ul>

        </div>
    </section>
    <section class="reviews">
        <div class="star__img">
            <svg role="presentation" width="" height="21.48px" viewBox="0 0 88 21" class="star__svg">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g fill="#ff5100">
                        <path
                            d="M77.2,20.9 C77.2,20.9 76.3,16.6 73.7,14 C71.1,11.4 66.8,10.5 66.8,10.5 C66.8,10.5 71.1,9.6 73.7,7 C76.3,4.3 77.2,0 77.2,0 C77.2,0 78.1,4.3 80.7,7 C83.3,9.6 87.7,10.5 87.7,10.5 C87.7,10.5 83.4,11.4 80.8,14 C78.1,16.6 77.2,20.9 77.2,20.9 L77.2,20.9 Z"
                            id="shape"></path>
                        <path
                            d="M44.3,20.9 C44.3,20.9 43.4,16.6 40.8,14 C38.2,11.4 33.9,10.5 33.9,10.5 C33.9,10.5 38.2,9.6 40.8,7 C43.4,4.3 44.3,0 44.3,0 C44.3,0 45.2,4.3 47.8,7 C50.4,9.6 54.8,10.5 54.8,10.5 C54.8,10.5 50.5,11.4 47.9,14 C45.2,16.6 44.3,20.9 44.3,20.9 L44.3,20.9 Z"
                            id="shape"></path>
                        <path
                            d="M11.1,20.9 C11.1,20.9 10.2,16.6 7.6,14 C5,11.4 0.7,10.5 0.7,10.5 C0.7,10.5 5,9.6 7.6,7 C10.1,4.3 11.1,0 11.1,0 C11.1,0 12,4.3 14.6,7 C17.2,9.6 21.6,10.5 21.6,10.5 C21.6,10.5 17.3,11.4 14.7,14 C12,16.6 11.1,20.9 11.1,20.9 L11.1,20.9 Z"
                            id="shape">
                        </path>
                    </g>
                </g>
            </svg>
        </div>
        <hr class="reviews__hr">
        <h2 id="rec">RECENZJE</h2>

        <ul class="reviews__grid">



            <li class="reviews__grid__item">
                <article class="grid__photo">
                    <img class="product__image" src="{{ asset('./storage/images/reviews-img/tg1.jpg') }}" alt="Liquid Mango" />
                </article>
            </li>
            <li class="reviews__grid__item">
                <article class="grid__photo">
                    <img class="product__image" src="{{ asset('./storage/images/reviews-img/tg1.jpg') }}" alt="Liquid Mango" />
                </article>
            </li>
            <li class="reviews__grid__item">
                <article class="grid__photo">
                    <img class="product__image" src="{{ asset('./storage/images/reviews-img/tg1.jpg') }}" alt="Liquid Mango" />
                </article>
            </li>
            <li class="reviews__grid__item">
                <article class="grid__photo">
                    <img class="product__image" src="{{ asset('./storage/images/reviews-img/tg1.jpg') }}" alt="Liquid Mango" />
                </article>
            </li>

        </ul>


    </section>
    <section class="contact">
        <h2 id="kon">KONTAKT</h2>
        <a href="https://t.me/GgYyPpSsY" class="kontakt__link">Skontaktuj się z menadżerem</a>
    </section>
    <section class="wholesale" id="wholesale">

        {{-- Form --}}
        <div class="form-container">
            <h2 class="form-title">
                Chcesz zostać klientem hurtowym?</h2>
            <p class="form-subtitle" style="color: #fff;">Wypełnij formularz, a my do Ciebie napiszemy!!</p>

            <form class="wholesale-form" id="tg">
                <label for="quantity" class="quantity-label" style="color: #fff;">Jaka jest całkowita ilość, której potrzebujesz?</label>
                <div class="slider-container">
                    <input type="range" id="quantity" name="quantity" min="50" max="500" value="50" class="quantity-slider" oninput="this.nextElementSibling.value = this.value">
                    <output class="slider-output">50</output>
                </div>

                {{-- Name--}}
                <input type="text" id="name" name="name" class="name__input" placeholder="Twoje imie">

                {{-- Email --}}
                <div class="email-container">
                    <input type="tel" id="email" name="email" class="email__input" placeholder="elfvapeshop@gmail.com">
                </div>
                {{-- Submit button --}}
                <button type="submit" class="submit__button">WYŚLIJ WNIOSEK</button>
            </form>
        </div>

    </section>
</main>

<footer class="footer">
    <div class="container footer-container">
        <ul class="footer-info-list">
            <li class="info-item">
                Dellers
                <svg width="20" height="20" viewBox="0 0 20 20" class="footer-icon">
                    <use href="./storage/images/footer-icons/symbol-defs.svg#icon-chat-bubble-dots"></use>
                </svg>
            </li>
            <li class="info-item">
                <a href="https://t.me/GgYyPpSsY" target="_blank" class="info-link">@GgYyPpSsY</a>
            </li>
            <li class="info-item">
                <a href="https://t.me/Fliinnt" target="_blank" class="info-link">@Fliinnt</a>
            </li>

            <li class="info-item">
                <a href="https://t.me/qdrion_cs" target="_blank" class="info-link">@qdrion_cs</a>
            </li>
        </ul>

        <a href="#"  class="footer-logo-link"><img src="{{ asset('./storage/images/logo/logo.svg') }}" alt="logo-footer" class="footer-logo"></a>
        <ul class="footer-social_network">
            <li class="item-social_network-title">
                Przyłącz się
            </li>
            <li class="item-social_network">
                <div class="footer-icons">
                    {{-- Telegram Button--}}
                    <div class="footer-block-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" class="footer-icon">
                            './storage/images/footer-icons/symbol-defs-social.svg'
                            <use href="./storage/images/footer-icons/symbol-defs-social.svg#icon-telegram"></use>
                        </svg>
                    </div>

                    {{-- Instagram Button--}}
                    <div class="footer-block-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" class="footer-icon">
                            <use href="./storage/images/footer-icons/symbol-defs-social.svg#icon-instagram"></use>
                        </svg>
                    </div>
                </div>
            </li>
            <li class="item-social_network">
                <div class="konto-blik"><img src="{{ asset('./storage/images/konto/blik-logo.png') }}" alt="blik"></div>
            </li>
        </ul>
    </div>
</footer>


<script src="/resources/js/filtr.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios@1.6.7/dist/axios.min.js"></script>
<script src="/resources/js/hurt.js"></script>
<script src="/resources/js/header-menu.js"></script>
</body>

</html>
