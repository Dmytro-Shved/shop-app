<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('storage/images/logo/logo_link.png') }}">
    <title></title>

    @vite('resources/css/additional-page.css')
</head>
<body class="content">
        <nav class="navigation" id="top">
            <div class="return-buttons-container">
                <!-- Order page -->
                <a href="{{ route('cart.order') }}" class="go-back">
                    {{ svg('heroicon-s-arrow-left-circle') }} Back
                </a>

                <!-- FAQ -->
                <a href="{{ route('order-faq') }}" class="nav-button">
                    {{ svg('ri-question-fill') }} FAQ page
                </a>

                <!-- Delivery & Payment page -->
                <a href="{{ route('order-del_pay') }}" class="nav-button">
                    {{ svg('fluentui-payment-16') }} Delivery & Payment page
                </a>

                <!-- Exchange & Return page -->
                <a href="{{ route('order-exch_return') }}" class="nav-button">
                    {{ svg('ri-exchange-fill') }} Exchange & Return page
                </a>
            </div>
        </nav>

        <main>
           {{ $slot  }}
        </main>

        <!-- Go to the top button -->
        <div>
            <a href="#top" class="go-to-top-button">
                {{ svg('mdi-arrow-up-drop-circle') }}
            </a>
        </div>

        <footer class="footer">
            <div class="footer-container">
                <p>© 2024 ElfVapeShop. All rights reserved.</p>
            </div>
        </footer>
</body>
</html>
