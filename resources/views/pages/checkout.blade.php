@extends('layouts.index')

@section('content')
<div class="container pt-100 pb-70">
    <div class="row g-4">

        <!-- LEFT: FORM -->
        <div class="col-lg-7">
            <h3 class="mb-4">Checkout</h3>

            <form action="{{ route('checkout.confirm') }}" method="POST">
                @csrf

                <div class="form-group mb-3">
                    <label>Full Name *</label>
                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        value="{{ old('name', auth()->check() ? auth()->user()->name : '') }}"
                        required
                    >
                </div>

                <div class="form-group mb-3">
                    <label>Email</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        value="{{ old('email', auth()->check() ? auth()->user()->email : '') }}"
                    >
                </div>

                <div class="form-group mb-3">
                    <label>Phone *</label>
                    <input
                        type="text"
                        name="phone"
                        class="form-control"
                        value="{{ old('phone') }}"
                        required
                    >
                </div>

                <div class="form-group mb-3">
                    <label>Country *</label>
                    <input
                        type="text"
                        class="form-control"
                        value="Lebanon"
                        readonly
                    >
                    <input type="hidden" name="country" value="Lebanon">
                </div>

                <div class="form-group mb-3">
                    <label>City *</label>
                    <input
                        type="text"
                        name="city"
                        class="form-control"
                        value="{{ old('city') }}"
                        required
                    >
                </div>

                <div class="form-group mb-3">
                    <label>Address</label>
                    <textarea
                        name="address"
                        class="form-control"
                        rows="4"
                    >{{ old('address') }}</textarea>
                </div>

                <button type="submit" class="default-btn mt-3">
                    Confirm Order
                </button>
            </form>
        </div>

        <!-- RIGHT: CART -->
        <div class="col-lg-5">
            <h4 class="mb-4">Review Your Cart</h4>

            @foreach($cart as $item)
                <div class="checkout-item d-flex align-items-center mb-3">
                    <img
                        src="{{ asset('assets/images/products/'.$item['image']) }}"
                        alt="{{ $item['name'] }}"
                        width="60"
                        class="me-3"
                    >

                    <div>
                        <strong>{{ $item['name'] }}</strong><br>
                        {{ $item['quantity'] }} × ${{ number_format($item['price'], 2) }}
                    </div>
                </div>
            @endforeach

            <h4 class="mt-4">Total: ${{ number_format($total, 2) }}</h4>
        </div>

    </div>
</div>
@endsection
