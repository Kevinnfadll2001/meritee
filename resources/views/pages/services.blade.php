@extends('layouts.index')

@section('content')
@php
    $isGuest = !auth()->check();

    $sections = [
        [
            'tag' => 'Body Care',
            'title' => 'Nourish & Glow',
            'desc' => 'Gentle formulas designed to hydrate, smooth, and enhance your skin’s natural radiance.',
            'products' => [
                [
                    'id' => 'body-scrub',
                    'name' => 'Body Scrub',
                    'image' => 'blog1.jpeg',
                    'price' => 18,
                    'ingredients' => 'Sugar crystals, natural oils, botanical extracts',
                    'benefits' => [
                        'Gently exfoliates dead skin',
                        'Smooths and softens',
                        'Boosts natural glow',
                        'Hydrates while exfoliating',
                    ],
                ],
                [
                    'id' => 'tanning-oil',
                    'name' => 'Tanning Oil',
                    'image' => 'tanning-oil.jpg',
                    'price' => 22,
                    'ingredients' => 'Lightweight oils, skin-conditioning blend',
                    'benefits' => [
                        'Enhances natural tanning',
                        'Leaves skin soft & moisturized',
                        'Fast-absorbing texture',
                    ],
                ],
            ],
        ],
        [
            'tag' => 'Lip Care',
            'title' => 'Soft, Smooth & Hydrated',
            'desc' => 'Everyday essentials to keep your lips healthy, nourished, and comfortable.',
            'products' => [
                [
                    'id' => 'lip-scrub',
                    'name' => 'Lip Scrub',
                    'image' => 'lip-scrub.jpg',
                    'price' => 12,
                    'ingredients' => 'Fine sugar, nourishing oils',
                    'benefits' => [
                        'Removes dry, flaky skin',
                        'Leaves lips soft & smooth',
                        'Enhances natural texture',
                    ],
                ],
                [
                    'id' => 'lip-oil',
                    'name' => 'Lip Oil',
                    'image' => 'lip-oil.jpg',
                    'price' => 15,
                    'ingredients' => 'Natural oils, vitamin-rich blend',
                    'benefits' => [
                        'Deep hydration',
                        'Natural glossy finish',
                        'Comfortable, non-sticky feel',
                    ],
                ],
            ],
        ],
        [
            'tag' => 'Beauty Essentials',
            'title' => 'Defined & Nourished',
            'desc' => 'Targeted care for lashes and brows with gentle, effective formulas.',
            'products' => [
                [
                    'id' => 'lash-serum',
                    'name' => 'Lash & Eyebrow Serum',
                    'image' => 'lash-serum.jpg',
                    'price' => 25,
                    'ingredients' => 'Conditioning oils, nourishing actives',
                    'benefits' => [
                        'Strengthens lashes & brows',
                        'Promotes fuller-looking hair',
                        'Reduces breakage',
                        'Gentle for daily use',
                    ],
                ],
            ],
        ],
    ];
@endphp

<style>
    .inner-banner-offset {
        margin-top: -5px;
    }

    .inner-bg1 {
        background-image: url("{{ asset('assets/images/services/services.png') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 300px;
    }

    .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 30px;
    }

    .product-card {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        padding: 22px;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .product-img {
        width: 100%;
        aspect-ratio: 1 / 1;
        background: #f5f5f5;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        margin-bottom: 14px;
    }

    .product-img img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .product-card h3 {
        font-size: 18px;
        margin-bottom: 8px;
        color: #113412;
    }

    .product-ingredients {
        font-size: 14px;
        color: #777;
        margin-bottom: 12px;
    }

    .product-benefits {
        list-style: none;
        padding: 0;
        margin: 0 0 15px;
    }

    .product-benefits li {
        font-size: 14px;
        margin-bottom: 6px;
        position: relative;
        padding-left: 20px;
    }

    .product-benefits li::before {
        content: "✓";
        position: absolute;
        left: 0;
        color: #113412;
        font-weight: bold;
    }

    .product-price {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 12px;
    }

    .add-to-cart-btn {
        margin-top: auto;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        text-align: center;
        padding: 12px;
        background: #113412;
        color: #fff;
        border-radius: 6px;
        font-weight: 500;
        transition: 0.3s;
        border: 0;
    }

    .add-to-cart-btn:hover {
        background: #0d2a2f;
        color: #fff;
    }

    .login-popup-modal {
        position: fixed;
        inset: 0;
        z-index: 99999;
        display: none;
    }

    .login-popup-modal.active {
        display: block;
    }

    .login-popup-backdrop {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.45);
    }

    .login-popup-box {
        position: relative;
        width: 90%;
        max-width: 420px;
        background: #fff;
        border-radius: 16px;
        padding: 35px 28px 28px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.20);
        margin: 0 auto;
        top: 50%;
        transform: translateY(-50%);
        text-align: center;
        z-index: 2;
        animation: popupFadeIn 0.25s ease;
    }

    @keyframes popupFadeIn {
        from {
            opacity: 0;
            transform: translateY(-45%);
        }
        to {
            opacity: 1;
            transform: translateY(-50%);
        }
    }

    .login-popup-close {
        position: absolute;
        top: 12px;
        right: 14px;
        border: none;
        background: transparent;
        font-size: 28px;
        line-height: 1;
        color: #666;
        cursor: pointer;
    }

    .login-popup-icon {
        width: 72px;
        height: 72px;
        margin: 0 auto 18px;
        border-radius: 50%;
        background: #f4f8f4;
        color: #113412;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 34px;
    }

    .login-popup-box h3 {
        font-size: 26px;
        margin-bottom: 10px;
        color: #113412;
    }

    .login-popup-box p {
        font-size: 15px;
        color: #666;
        line-height: 1.7;
        margin-bottom: 22px;
    }

    .login-popup-actions {
        display: flex;
        gap: 12px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .login-popup-btn {
        min-width: 140px;
        height: 46px;
        border-radius: 8px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        font-weight: 600;
        transition: 0.3s;
        border: none;
        cursor: pointer;
    }

    .login-popup-btn.main-btn {
        background: #113412;
        color: #fff;
    }

    .login-popup-btn.main-btn:hover {
        background: #0d2a2f;
        color: #fff;
    }

    .login-popup-btn.secondary-btn {
        background: #f3f3f3;
        color: #333;
    }

    .login-popup-btn.secondary-btn:hover {
        background: #e8e8e8;
    }
</style>

<div class="inner-banner inner-bg1 inner-banner-offset">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Products</h3>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Products</li>
            </ul>
        </div>
    </div>
</div>

<div class="pt-100 pb-70">
    <div class="container">
        @foreach ($sections as $section)
            <div class="section-title text-center mb-40">
                <span class="sp-title">{{ $section['tag'] }}</span>
                <h2>{{ $section['title'] }}</h2>
                <p>{{ $section['desc'] }}</p>
            </div>

            <div class="product-grid mb-80">
                @foreach ($section['products'] as $product)
                    <div class="product-card">
                        <div class="product-img">
                            <img src="{{ asset('assets/images/products/' . $product['image']) }}" alt="{{ $product['name'] }}">
                        </div>

                        <h3>{{ $product['name'] }}</h3>

                        <div class="product-ingredients">
                            {{ $product['ingredients'] }}
                        </div>

                        <ul class="product-benefits">
                            @foreach ($product['benefits'] as $benefit)
                                <li>{{ $benefit }}</li>
                            @endforeach
                        </ul>

                        <div class="product-price">${{ number_format($product['price'], 2) }}</div>

                        @if ($isGuest)
                            <button type="button" class="add-to-cart-btn login-required-btn">
                                Add to Cart
                            </button>
                        @else
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product['id'] }}">
                                <input type="hidden" name="name" value="{{ $product['name'] }}">
                                <input type="hidden" name="price" value="{{ $product['price'] }}">
                                <input type="hidden" name="image" value="{{ $product['image'] }}">

                                <button type="submit" class="add-to-cart-btn">
                                    Add to Cart
                                </button>
                            </form>
                        @endif
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>

@if ($isGuest)
    <div class="login-popup-modal" id="loginPopupModal">
        <div class="login-popup-backdrop"></div>

        <div class="login-popup-box">
            <button type="button" class="login-popup-close" id="closeLoginPopup">&times;</button>

            <div class="login-popup-icon">
                <i class='bx bx-lock-alt'></i>
            </div>

            <h3>Login Required</h3>
            <p>Please login first to proceed with your purchase.</p>

            <div class="login-popup-actions">
                <a href="{{ route('login') }}" class="login-popup-btn main-btn">
                    Login
                </a>

                <button type="button" class="login-popup-btn secondary-btn" id="cancelLoginPopup">
                    Cancel
                </button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('loginPopupModal');
            const openButtons = document.querySelectorAll('.login-required-btn');
            const closeBtn = document.getElementById('closeLoginPopup');
            const cancelBtn = document.getElementById('cancelLoginPopup');
            const backdrop = document.querySelector('.login-popup-backdrop');

            function openModal() {
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }

            function closeModal() {
                modal.classList.remove('active');
                document.body.style.overflow = '';
            }

            openButtons.forEach(button => {
                button.addEventListener('click', openModal);
            });

            if (closeBtn) closeBtn.addEventListener('click', closeModal);
            if (cancelBtn) cancelBtn.addEventListener('click', closeModal);
            if (backdrop) backdrop.addEventListener('click', closeModal);

            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape' && modal.classList.contains('active')) {
                    closeModal();
                }
            });
        });
    </script>
@endif
@endsection
