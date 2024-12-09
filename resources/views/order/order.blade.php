<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('storage/images/logo/logo_link.png') }}">
    <title>Payment and Delivery</title>
    @vite([
        'resources/css/order.css',
        'resources/js/phone-input.js'
    ])
</head>
<body>

{{-- Go back to home page --}}
{{--<a href="{{ route('home') }}" class="go-back-button"> ⤺ Go back to home page </a>--}}

<a href="{{ route('home') }}" class="go-back-button">{{ svg('ionicon-caret-back') }} Go back to home page </a>

{{--Go to the top --}}
<div>
    <a href="#top" class="go-to-top-button">
        {{ svg('mdi-arrow-up-drop-circle') }}
    </a>
</div>

@if(session()->has('cart.order'))
    <p>{{ session($message) }}</p>
@endif

{{-- Payment Form --}}
<form action="{{ route('cart.create-order') }}" method="POST">
    @csrf
    <div class="container" id="top">
        <div class="left-section">
            <h2 class="title">{{ svg('fas-address-card') }} PAYMENT AND DELIVERY</h2>

            {{-- Name --}}
            <div class="form-group">
                <label for="name" class="required">Name</label>
                <input type="text" name="name" id="first-name" value="{{ old('name') }}">

                @error('name')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Email --}}
            <div class="form-group">
                <label for="email" class="required">Email</label>
                <input type="text" name="email" id="email" value="{{ old('email') }}">

                @error('email')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Phone number --}}
            <div class="form-group">
                <label for="phone" class="required">Phone number</label>
                <input type="tel" name="phone" placeholder="+48 (_ _ _) (_ _ _) (_ _ _)" id="phone" value="{{ old('phone') }}">

                @error('phone')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Address --}}
            <h3>{{ svg('mdi-truck-delivery') }}Please specify delivery address</h3>
            <div class="form-group">
                <select name="address" id="delivery-method">
                    <option value="post office">post office</option>
                    <option value="to the door">to the door</option>
                    <option value="post terminal">post terminal</option>
                </select>
            </div>

            {{-- City --}}
            <div class="form-group">
                <label for="branch">Select city (search)</label>

                <select name="city" id="delivery-method">
                    <option value="Odesa">Odesa</option>
                    <option value="Kyiv">Kyiv</option>
                    <option value="Kryvyi Rih">Kryvyi Rih</option>
                </select>

                {{-- Post Office --}}
                <label for="branch" class="form-group">Select post office</label>

                <select name="office" id="branch">
                    <option value="34">34</option>
                    <option value="54">54</option>
                    <option value="56">56</option>
                </select>
            </div>

            {{-- Details --}}
            <h3>{{ svg('clarity-details-solid') }} Details</h3>
            <div class="form-group">
                <label for="comments">Note to order (optional)</label>
                <textarea name="details" id="comments"
                    placeholder="Note to your order, for example, special requests to the delivery department.">
                </textarea>

                @error('details')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="right-section">
            {{-- Order --}}
            <h2>{{ svg('letsicon-order-fill') }} YOUR ORDER</h2>
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

                {{-- Total price --}}
                <div class="total">
                    <span>Total</span>
                    <span>{{ $total }} zł</span>
                    <input type="hidden" name="total" value="{{ $total }}">
                </div>
            </div>

            {{-- Payment methods --}}
            <div class="payment-method">
                <h3>{{ svg('fluentui-payment-32') }}Payment</h3>

                {{--Cash on Delivery --}}
                <div class="radio-option">
                    <input type="radio" name="payment_method" value="cash" id="cash" checked>
                    <label for="cash">Cash on Delivery</label>
                </div>
                <p>Payment on receipt of goods at the New Post office (tax fee, commission 2% + 20 UAH)</p>

                {{-- Card payment --}}
                <div class="radio-option">
                    <input type="radio" name="payment_method" value="card" id="card" checked>
                    <label for="card">Card payment</label>
                </div>
                <p>Payment details will be sent to the specified email</p>
            </div>
            <button type="submit" class="submit-button">CONFIRM THE ORDER</button>
        </div>
    </div>
</form>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-section">
            <a href="#" class="footer-logo-link"><img src="{{ asset('./storage/images/logo/logo.svg') }}"
                                                      alt="logo-footer" class="footer-logo">
            </a>
            <p>We are in the social networks:</p>
            <ul>
                <li><a href="https://t.me/qdrion_cs" class="social-link">{{ svg('bi-telegram') }} Telegram</a></li>
                <li><a href="#" class="social-link">{{ svg('bi-instagram') }} Instagram</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h4>
                <CONTACTS></CONTACTS>
            </h4>
            <p>+48 000 000 000</p>
            <p>+48 000 000 000</p>
            <p>Time schedule:</p>
            <p>Mon-Fri 07:00-20:00</p>
        </div>
        <div class="footer-section">
            <h4>FOR CUSTOMERS</h4>
            <ul>
                <li><a href="{{ route('order-faq') }}">Question & Answer</a></li>
                <li><a href="{{ route('order-del_pay') }}">Delivery & Payment</a></li>
                <li><a href="{{ route('order-exch_return') }}">Exchange & Return</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <p>Subscribe to our channel</p>
            <a href="https://t.me/qdrion_cs" class="telegram-btn">Telegram</a>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© 2024 ElfVapeShop. All rights reserved</p>
    </div>
</footer>
</body>
</html>
