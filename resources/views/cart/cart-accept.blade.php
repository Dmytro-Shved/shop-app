<!doctype html>
<html lang="en">
<head>
    <title>Cart accept page</title>
    @vite('resources/css/main.css')
    @vite('resources/css/basket.css')
    @vite('resources/js/order-snow.js')
</head>
<body>
<header>
    <div class="order-container">
        <div class="order-notification">
        <div class="snowfall">
    <img class="snowflake" src="{{ asset('storage/images/logo/logo.svg') }}" alt="logo" style="width: 150px;">
    
   
</div>


            
        </div>
    </div>
</header>
<section class="order-content">
    <div class="order-container">
    </div>
    <div class="order-details shadow">
        <div class="order-details__item">
            <div class="order-item__image">
                <!-- Изображение товара можно добавить здесь -->
            </div>
            <div class="order-item__details">
                <div class="order-item__title">
                    Iphone X
                </div>
                <div class="order-item__price">
                    649,99 £
                </div>
                <div class="order-item__quantity">
                    Quantity: 1
                </div>
                <div class="order-item__description">
                    <ul>
                        <li>Super fast and power efficient</li>
                        <li>A lot of fast memory</li>
                        <li>High resolution camera</li>
                        <li>Smart tools for health and traveling and more</li>
                        <li>Share your games and achievements with your friends via Group Play</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="order-discount"></div>
    <div class="order-container">
        <div class="payment-section">
            <div class="payment-section__title">
                Payment Method
            </div>
            <div class="payment-methods">
                <div class="payment-method payment-method--blik active" tabindex="0">
                    <i class="icon icon-credit-card"></i>BLIK
                </div>
                <div class="payment-method payment-method--mastercard" tabindex="0">
                    <i class="icon icon-paypal"></i>MasterCard
                </div>
                <div class="payment-method payment-method--visa" tabindex="0">
                    <i class="icon icon-wallet"></i>VISA
                </div>
            </div>
            <div class="payment-info">
                <div class="payment-info__cc">
                    <div class="payment-section__title">
                        <i class="icon icon-user"></i>Personal Information
                    </div>
                    <form>
                        <div class="form-cc">
                            <div class="form-row">
                                <div class="form-field">
                                    <div class="form-title">Card Number</div>
                                    <input type="text" class="form-input validated-text" value="4542 9931 9292 2293" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-field small">
                                    <div class="form-title">Expiry Date</div>
                                    <select class="form-input dropdown">
                                        <option selected>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                        <option>06</option>
                                        <option>07</option>
                                        <option>08</option>
                                        <option>09</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>
                                    <select class="form-input dropdown">
                                        <option>2024</option>
                                        <option>2025</option>
                                        <option>2026</option>
                                        <option>2027</option>
                                        <option>2028</option>
                                        <option>2029</option>
                                        <option>2030</option>
                                        <option>2031</option>
                                        <option>2032</option>
                                        <option>2033</option>
                                        <option>2034</option>
                                        <option>2035</option>
                                        <option>2036</option>
                                        <option>2037</option>
                                        <option>2038</option>
                                        <option>2039</option>
                                        <option>2040</option>
                                    </select>
                                </div>
                                <div class="form-field small">
                                    <div class="form-title">CVV Code
                                        <span class="help-circle">?</span>
                                    </div>
                                    <input type="text" class="form-input text-input" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="payment-info__shipping">
                    <div class="payment-section__title">
                        <i class="icon icon-plane"></i> Shipping Information
                    </div>
                    <div class="order-details__user">
                        <div class="user-name">John Doe<br>13/03/1980</div>
                        <div class="user-address">Shipping Address: 22 Street, Address<br>Country</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="order-container">
        <div class="order-actions">
            <a href="#" class="btn order-submit-btn">Place your Order
                <i class="icon icon-arrow-right-circle"></i>
            </a>
            <a href="#" class="go-back-btn">Go Back to Shop</a>
        </div>
    </div>
</section>
</body>
</html>
