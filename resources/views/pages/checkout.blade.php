@extends('layouts.index')

@section('content')
<div class="container pt-100 pb-70">
    <div class="row">

        <!-- LEFT: FORM -->
        <div class="col-lg-7">
            <h3>Checkout</h3>

            <form action="{{ route('checkout.confirm') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label>Full Name *</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label>Phone *</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Country *</label>
                    <input type="text" name="country" class="form-control" value="Lebanon" required>
                </div>

                <div class="form-group">
                    <label>City *</label>
                    <input type="text" name="city" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <textarea name="address" class="form-control"></textarea>
                </div>

                <button type="submit" class="default-btn mt-3">
                    Confirm Order
                </button>
            </form>
        </div>

        <!-- RIGHT: CART -->
        <div class="col-lg-5">
            <h4>Review Your Cart</h4>

@foreach($cart as $item)
    <div class="checkout-item">
        <img src="{{ asset('assets/images/products/'.$item['image']) }}" width="60">

        <strong>{{ $item['name'] }}</strong><br>
        {{ $item['quantity'] }} × ${{ number_format($item['price'], 2) }}
    </div>
@endforeach

<h4>Total: ${{ number_format($total, 2) }}</h4>

        </div>

    </div>
</div>
@endsection
