<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment and Delivery</title>
    @vite('resources/css/order.css')
</head>
<body>

{{-- Go back to home page --}}
<a href="{{ route('home') }}" class="go-back-button"> ⤺ Go back to home page </a>

{{--Go to the top --}}
<div>
    <a href="#top" class="go-to-top-button">
        {{ svg('mdi-arrow-up-drop-circle') }}
    </a>
</div>

<div class="container" id="top">
    <div class="left-section">
        <h2>PAYMENT AND DELIVERY</h2>
        <form>
            <div class="form-group">
                <label for="first-name">Name *</label>
                <input type="text" id="first-name" required>
            </div>
            <div class="form-group">
                <label for="last-name">Lastname *</label>
                <input type="text" id="last-name" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone number *</label>
                <input type="tel" id="phone" required>
            </div>
            <h3>Please specify delivery address</h3>
            <div class="form-group">
                <select id="delivery-method">
                    <option value="city">post office</option>
                    <option value="city">to the door</option>
                    <option value="city">post terminal</option>
                </select>
            </div>
            <div class="form-group">
                <label for="branch">Select city (search)</label>

                <select id="delivery-method">
                    <option value="city">Odesa</option>
                    <option value="city">Kyiv</option>
                    <option value="city">Kryvyi Rih</option>
                </select>

                <label for="branch">Select post office</label>

                <select id="branch">
                    <option value="office">34</option>
                    <option value="office">54</option>
                    <option value="office">56</option>
                </select>
            </div>
            <h3>Details</h3>
            <div class="form-group">
                <label for="comments">Note to order (optional)</label>
                <textarea id="comments"
                          placeholder="Note to your order, for example, special requests to the delivery department."></textarea>
            </div>
        </form>
    </div>
    <div class="right-section">
        <h2>YOUR ORDER</h2>
            <div class="order-summary">
                @foreach($cart as $product)
                    <div class="item">
                        <span>{{$product->name}} × {{ $product->qty }}</span>
                        <span>{{ number_format($product->qty * $product->price, 2) }} zł</span>
                    </div>
                @endforeach
                <div class="total">
                    <span>Delivery</span>
                    <span>Nova Poshta</span>
                </div>
                <div class="total">
                    <span>Total</span>
                    <span>{{ $total }} zł</span>
                </div>
            </div>

            <div class="payment-method">
                <h3>Payment</h3>
                <div class="radio-option">
                    <input type="radio" name="payment" value="cash" id="cash" checked>
                    <label for="cash">Cash on Delivery</label>
                </div>
                <p>Payment on receipt of goods at the New Post office (tax fee, commission 2% + 20 UAH)</p>
                <div class="radio-option">
                    <input type="radio" name="payment" value="card" id="card">
                    <label for="card">Card payment</label>
                </div>
            </div>
            <button type="submit" class="submit-button">CONFIRM THE ORDER</button>
    </div>
</div>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-section">
            <a href="#" class="footer-logo-link"><img src="{{ asset('./storage/images/logo/logo.svg') }}"
                                                      alt="logo-footer" class="footer-logo">
            </a>
            <p>We are in the social networks:</p>
            <ul>
                <li><a href="#" class="social-link">{{ svg('bi-telegram') }} Telegram</a></li>
                <li><a href="#" class="social-link">{{ svg('bi-instagram') }} Instagram</a></li>
                <li><a href="#" class="social-link">{{ svg('bi-whatsapp') }} WhatsApp</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h4>
                <CONTACTS></CONTACTS>
            </h4>
            <p>+48 000 000 000</p>
            <p>+48 000 000 000</p>
            <p>Time schedule:</p>
            <p>Mon-Fri 09:00-20:00</p>
        </div>
        <div class="footer-section">
            <h4>FOR CUSTOMERS</h4>
            <ul>
                <li><a href="#">Question & Answer</a></li>
                <li><a href="#">Delivery & Payment</a></li>
                <li><a href="#">Exchange & Return</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <p>Subscribe to our channel</p>
            <a href="#" class="telegram-btn">Telegram</a>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© 2024 ElfVapeShop. All rights reserved</p>
    </div>
</footer>


</body>
</html>
