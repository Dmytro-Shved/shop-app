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

<a href="{{ route('home') }}" class="go-back-button">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
        <path fill-rule="evenodd" d="M7.72 12.53a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 1 1 1.06 1.06L9.31 12l6.97 6.97a.75.75 0 1 1-1.06 1.06l-7.5-7.5Z" clip-rule="evenodd" />
    </svg>
    Go back to home page
</a>

{{--Go to the top --}}
<div>
    <a href="#top" class="go-to-top-button">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm.53 5.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 1 0 1.06 1.06l1.72-1.72v5.69a.75.75 0 0 0 1.5 0v-5.69l1.72 1.72a.75.75 0 1 0 1.06-1.06l-3-3Z" clip-rule="evenodd" />
        </svg>
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
            <h2 class="title">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M4.5 3.75a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V6.75a3 3 0 0 0-3-3h-15Zm4.125 3a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm-3.873 8.703a4.126 4.126 0 0 1 7.746 0 .75.75 0 0 1-.351.92 7.47 7.47 0 0 1-3.522.877 7.47 7.47 0 0 1-3.522-.877.75.75 0 0 1-.351-.92ZM15 8.25a.75.75 0 0 0 0 1.5h3.75a.75.75 0 0 0 0-1.5H15ZM14.25 12a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H15a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5h3.75a.75.75 0 0 0 0-1.5H15Z" clip-rule="evenodd" />
                </svg>
                PAYMENT AND DELIVERY
            </h2>

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
            <h3>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path d="M3.375 4.5C2.339 4.5 1.5 5.34 1.5 6.375V13.5h12V6.375c0-1.036-.84-1.875-1.875-1.875h-8.25ZM13.5 15h-12v2.625c0 1.035.84 1.875 1.875 1.875h.375a3 3 0 1 1 6 0h3a.75.75 0 0 0 .75-.75V15Z" />
                    <path d="M8.25 19.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0ZM15.75 6.75a.75.75 0 0 0-.75.75v11.25c0 .087.015.17.042.248a3 3 0 0 1 5.958.464c.853-.175 1.522-.935 1.464-1.883a18.659 18.659 0 0 0-3.732-10.104 1.837 1.837 0 0 0-1.47-.725H15.75Z" />
                    <path d="M19.5 19.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                </svg>
                Please specify delivery address
            </h3>
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
            <h3>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0 1 12 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 0 1-3.476.383.39.39 0 0 0-.297.17l-2.755 4.133a.75.75 0 0 1-1.248 0l-2.755-4.133a.39.39 0 0 0-.297-.17 48.9 48.9 0 0 1-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97ZM6.75 8.25a.75.75 0 0 1 .75-.75h9a.75.75 0 0 1 0 1.5h-9a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H7.5Z" clip-rule="evenodd" />
                </svg>
                Details
            </h3>
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
            <h2>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0 1 18 9.375v9.375a3 3 0 0 0 3-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 0 0-.673-.05A3 3 0 0 0 15 1.5h-1.5a3 3 0 0 0-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6ZM13.5 3A1.5 1.5 0 0 0 12 4.5h4.5A1.5 1.5 0 0 0 15 3h-1.5Z" clip-rule="evenodd" />
                    <path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V9.375ZM6 12a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V12Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 15a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V15Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 18a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V18Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                </svg>
                YOUR ORDER
            </h2>
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
                <h3>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path d="M4.5 3.75a3 3 0 0 0-3 3v.75h21v-.75a3 3 0 0 0-3-3h-15Z" />
                        <path fill-rule="evenodd" d="M22.5 9.75h-21v7.5a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3v-7.5Zm-18 3.75a.75.75 0 0 1 .75-.75h6a.75.75 0 0 1 0 1.5h-6a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z" clip-rule="evenodd" />
                    </svg>
                    Payment
                </h3>

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
