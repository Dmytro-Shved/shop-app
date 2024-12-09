<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('storage/images/logo/logo_link.png') }}">
    <title>Exchange & Return</title>

    @vite('resources/css/additional-page.css')
</head>
<body>

<div class="return-buttons-container">
    <!-- Go back to home page -->
    <a href="{{ route('home') }}" class="go-back-button" id="top"> ⤺ Go back to home page </a>

    <!-- Order page -->
    <a href="{{ route('cart.order') }}" class="go-back-button"> ⤺ Order page </a>

    <!-- Previous page -->
    <a href="{{ route('order-del_pay') }}" class="go-back-button"> ⤺ Back to Delivery & Payment page</a>
</div>

<div class="faq-container">
    <h1>Exchange & Return</h1>

    <div class="faq-section">
        <h2>General Return Policy</h2>
        <div class="faq-item">
            <h3>Can I return a product?</h3>
            <p>Yes, we accept returns for unopened products within 14 days from the date of delivery. Please ensure that the product is in its original, sealed condition and is not damaged. You can contact our customer support to initiate the return process.</p>
        </div>
        <div class="faq-item">
            <h3>What items are eligible for return?</h3>
            <p>Only unopened and unused products in their original packaging are eligible for return. We cannot accept returns for products that have been opened or used, unless there is a defect or damage.</p>
        </div>
    </div>

    <div class="faq-section">
        <h2>Exchange Process</h2>
        <div class="faq-item">
            <h3>Can I exchange a product?</h3>
            <p>If you received a defective or incorrect product, you can exchange it within 14 days from the date of delivery. Please contact our customer support team for assistance with the exchange process.</p>
        </div>
        <div class="faq-item">
            <h3>How do I exchange a product?</h3>
            <p>To exchange a product, contact our customer support team with your order details. Once we verify the issue, we will guide you through the return process and send you the correct product.</p>
        </div>
    </div>

    <div class="faq-section">
        <h2>Refunds</h2>
        <div class="faq-item">
            <h3>When will I get my refund?</h3>
            <p>Refunds are processed within 5-7 business days after we receive and inspect your returned items. The refund will be credited to the original payment method used during purchase.</p>
        </div>
        <div class="faq-item">
            <h3>Can I get a refund for shipping costs?</h3>
            <p>Unfortunately, we do not refund the shipping costs for returns unless the return is due to a defect or mistake on our part.</p>
        </div>
    </div>

    <div class="faq-section">
        <h2>Return Shipping</h2>
        <div class="faq-item">
            <h3>Who pays for return shipping?</h3>
            <p>Return shipping costs are the responsibility of the customer unless the return is due to a defect or incorrect product sent. In such cases, we will cover the return shipping fees.</p>
        </div>
        <div class="faq-item">
            <h3>How do I return my product?</h3>
            <p>To return a product, please contact our customer support team. You will be provided with detailed instructions on how to return the item, including the return address and any necessary labels.</p>
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
