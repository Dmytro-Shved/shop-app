<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery & Payment Information</title>

    @vite('resources/css/additional-page.css')
</head>
<body>

<div class="return-buttons-container">
    <!-- Go back to home page -->
    <a href="{{ route('home') }}" class="go-back-button" id="top"> ⤺ Go back to home page </a>

    <!-- Order page -->
    <a href="{{ route('cart.order') }}" class="go-back-button"> ⤺ Order page </a>

    <!-- Previous page -->
    <a href="{{ route('order-faq') }}" class="go-back-button"> ⤺ Back to FAQ page </a>
</div>

<a href="{{ route('order-exch_return') }}" class="go-next-button">Next page: Exchange & Return</a>

<div class="faq-container">
    <h1>Delivery & Payment Information</h1>

    <div class="faq-section">
        <h2>Delivery Information</h2>
        <div class="faq-item">
            <h3>How long does shipping take?</h3>
            <p>Shipping typically takes 3-7 business days within Europe, and 7-14 business days for international orders. Delivery times may vary depending on your location and the chosen courier service.</p>
        </div>
        <div class="faq-item">
            <h3>What are the shipping costs?</h3>
            <p>Shipping costs depend on the delivery address and the weight of your order. The exact shipping fee will be displayed at checkout based on your location and order size.</p>
        </div>
        <div class="faq-item">
            <h3>Do you offer international shipping?</h3>
            <p>Yes, we offer international shipping to most countries. You can check if we deliver to your country at checkout.</p>
        </div>
    </div>

    <div class="faq-section">
        <h2>Payment Methods</h2>
        <div class="faq-item">
            <h3>What payment methods do you accept?</h3>
            <p>We accept payments through the following methods: Cash on Delivery and Card Payment. You can select your preferred method at checkout.</p>
        </div>
        <div class="faq-item">
            <h3>Is it safe to pay by card?</h3>
            <p>Yes, we use secure payment gateways to ensure your payment information is protected. All transactions are encrypted for your security.</p>
        </div>
    </div>
</div>

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
