@extends('layouts.index')

@section('content')

<div class="container cart-page">

    <h2 class="cart-title">Shopping Cart</h2>
    <p class="cart-sub">{{ count($cart) }} items in your cart</p>

    <div class="cart-wrapper">

        <!-- CART ITEMS -->
        <div class="cart-items">

            @php $subtotal = 0; @endphp

            @forelse($cart as $id => $item)
            @php $subtotal += $item['price'] * $item['qty']; @endphp

            <div class="cart-row">

                <div class="cart-product">
                    <div class="cart-img">
                        <img src="{{ asset('assets/images/products/'.$item['image']) }}">
                    </div>
                    <div>
                        <h4>{{ $item['name'] }}</h4>
                        <span>Méritée</span>
                    </div>
                </div>

                <div class="cart-price">
                    ${{ number_format($item['price'], 2) }}
                </div>

                <div class="cart-qty">
                    <form action="{{ route('cart.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $id }}">
                        <input type="number" name="qty" value="{{ $item['qty'] }}" min="1" onchange="this.form.submit()">
                    </form>
                </div>

                <div class="cart-actions">
                    <form action="{{ route('cart.remove') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $id }}">
                        <button class="remove-btn">✕</button>
                    </form>
                </div>

            </div>
            @empty
            <p>Your cart is empty.</p>
            @endforelse

        </div>

        <!-- SUMMARY -->
        <div class="cart-summary">
            <h3>Subtotal</h3>
            <h2>${{ number_format($subtotal, 2) }}</h2>

            <a href="{{ route('checkout') }}" class="default-btn">
                Checkout
            </a>
            <a href="{{ url('/products') }}" class="continue-link">← Continue Shopping</a>
        </div>

    </div>
</div>
<style>
    .cart-page {
        padding: 100px 0;
    }

    .cart-title {
        text-align: center;
        font-weight: 600;
    }

    .cart-sub {
        text-align: center;
        color: #777;
        margin-bottom: 40px;
    }

    .cart-wrapper {
        display: grid;
        grid-template-columns: 1fr 320px;
        gap: 40px;
    }

    .cart-row {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr auto;
        align-items: center;
        padding: 18px 0;
        border-bottom: 1px solid #eee;
    }

    .cart-product {
        display: flex;
        align-items: center;
        gap: 16px;
    }

    .cart-img {
        width: 70px;
        height: 70px;
        background: #f5f5f5;
        border-radius: 8px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .cart-img img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

    .cart-price {
        font-weight: 500;
    }

    .cart-qty input {
        width: 60px;
        padding: 6px;
        text-align: center;
    }

    .remove-btn {
        background: transparent;
        border: none;
        font-size: 18px;
        cursor: pointer;
    }

    .cart-summary {
        background: #f8f8f6;
        padding: 30px;
        border-radius: 12px;
    }

    .checkout-btn {
        display: block;
        background: #143d1f;
        color: #fff;
        padding: 14px;
        text-align: center;
        border-radius: 6px;
        margin-top: 20px;
    }

    .continue-link {
        display: block;
        margin-top: 15px;
        color: #143d1f;
        text-align: center;
    }

</style>
@endsection
