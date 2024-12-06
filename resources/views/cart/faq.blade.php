<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('storage/images/logo/logo_link.png') }}">
    <title>FAQ - Order Related Questions</title>

    @vite('resources/css/additional-page.css')
</head>
<body>

<div class="return-buttons-container">
    <!-- Go back to home page -->
    <a href="{{ route('home') }}" class="go-back-button" id="top"> ⤺ Go back to home page </a>

    <!-- Order page -->
    <a href="{{ route('cart.order') }}" class="go-back-button"> ⤺ Order page </a>
</div>

<a href="{{ route('order-del_pay') }}" class="go-next-button">Next page: Delivery & Payment</a>

<div class="faq-container">
    <h1>Frequently Asked Questions (FAQ)</h1>

    <div class="faq-section">
        <h2>General Order Questions</h2>
        <div class="faq-item">
            <h3>How can I place an order?</h3>
            <p>To place an order, simply browse through our online store, add the products you wish to purchase to your cart, and proceed to checkout. You will need to provide delivery and payment details to complete the order.</p>
        </div>
        <div class="faq-item">
            <h3>Can I modify my order after placing it?</h3>
            <p>Once an order has been placed, we are unable to modify it. However, you can cancel your order and place a new one if necessary. Please contact customer support immediately if you need assistance.</p>
        </div>
    </div>

    <div class="faq-section">
        <h2>Payment & Delivery</h2>
        <div class="faq-item">
            <h3>What payment methods do you accept?</h3>
            <p>We accept payments via Cash on Delivery and Card payment. Simply choose your preferred payment method at checkout.</p>
        </div>
        <div class="faq-item">
            <h3>How long does shipping take?</h3>
            <p>Shipping typically takes 3-7 business days within Europe, and 7-14 business days for international orders. Delivery time may vary depending on your location and courier service.</p>
        </div>
    </div>

    <div class="faq-section">
        <h2>Returns & Refunds</h2>
        <div class="faq-item">
            <h3>Can I return a product?</h3>
            <p>Yes, you can return unopened products within 14 days from the delivery date. Please make sure to read our <a href="exchange_return.html">Exchange & Return Policy</a> for more details.</p>
        </div>
        <div class="faq-item">
            <h3>How long does it take to receive a refund?</h3>
            <p>Refunds are typically processed within 5-7 business days after we receive and inspect your returned items.</p>
        </div>
    </div>

    <div class="faq-section">
        <h2>Customer Support</h2>
        <div class="faq-item">
            <h3>How can I contact customer support?</h3>
            <p>You can reach our customer support team via email at <a href="mailto:support@elfvapeshop.com">support@elfvapeshop.com</a>, or by phone at +48 000 000 000. Our support hours are Monday to Friday, 9:00 AM - 8:00 PM.</p>
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
