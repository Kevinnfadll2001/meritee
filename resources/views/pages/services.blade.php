@extends('layouts.index')

@section('content')

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

    /* PRODUCT GRID */
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

    /* SQUARE PRODUCT IMAGE BOX */
/* PERFECT SQUARE IMAGE CONTAINER */
.product-img {
    width: 100%;
    aspect-ratio: 1 / 1;      /* 🔑 makes it square */
    background: #f5f5f5;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    margin-bottom: 14px;
}

/* Image fits INSIDE square */
.product-img img {
    width: 100%;
    height: 100%;
    object-fit: contain;      /* shows full product */
}

/* If image missing → no broken layout */
.product-img img[src=""],
.product-img img:not([src]) {
    display: none;
}


/* If image is missing or broken, don't keep huge space */
.product-img img[src=""],
.product-img img:not([src]) {
    display: none;
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
        margin-bottom: 15px;
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
        display: inline-block;
        text-align: center;
        padding: 12px;
        background: #113412;
        color: #fff;
        border-radius: 6px;
        font-weight: 500;
        transition: 0.3s;
    }

    .add-to-cart-btn:hover {
        background: #0d2a2f;
        color: #fff;
    }
</style>

<!-- Banner -->
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

<!-- Products Section -->
<div class="pt-100 pb-70">
    <div class="container">

        <!-- ================= BODY CARE ================= -->
        <div class="section-title text-center mb-40">
            <span class="sp-title">Body Care</span>
            <h2>Nourish & Glow</h2>
            <p>Gentle formulas designed to hydrate, smooth, and enhance your skin’s natural radiance.</p>
        </div>

        <div class="product-grid mb-80">

            <!-- BODY SCRUB -->
            <div class="product-card">
                <div class="product-img">
                    <img src="{{ asset('assets/images/products/blog1.jpeg') }}" alt="Body Scrub">
                </div>

                <h3>Body Scrub</h3>

                <div class="product-ingredients">
                    Sugar crystals, natural oils, botanical extracts
                </div>

                <ul class="product-benefits">
                    <li>Gently exfoliates dead skin</li>
                    <li>Smooths and softens</li>
                    <li>Boosts natural glow</li>
                    <li>Hydrates while exfoliating</li>
                </ul>

                <div class="product-price">$18.00</div>

                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="body-scrub">
                    <input type="hidden" name="name" value="Body Scrub">
                    <input type="hidden" name="price" value="18">
                    <input type="hidden" name="image" value="blog1.jpeg">

                    <button type="submit" class="add-to-cart-btn">
                        Add to Cart
                    </button>
                </form>
            </div>

            <!-- TANNING OIL -->
            <div class="product-card">
                <div class="product-img">
                    <img src="{{ asset('assets/images/products/tanning-oil.jpg') }}" alt="Tanning Oil">
                </div>

                <h3>Tanning Oil</h3>

                <div class="product-ingredients">
                    Lightweight oils, skin-conditioning blend
                </div>

                <ul class="product-benefits">
                    <li>Enhances natural tanning</li>
                    <li>Leaves skin soft & moisturized</li>
                    <li>Fast-absorbing texture</li>
                </ul>

                <div class="product-price">$22.00</div>

                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="tanning-oil">
                    <input type="hidden" name="name" value="Tanning Oil">
                    <input type="hidden" name="price" value="22">
                    <input type="hidden" name="image" value="tanning-oil.jpg">

                    <button type="submit" class="add-to-cart-btn">
                        Add to Cart
                    </button>
                </form>
            </div>

        </div>

        <!-- ================= LIP CARE ================= -->
        <div class="section-title text-center mb-40">
            <span class="sp-title">Lip Care</span>
            <h2>Soft, Smooth & Hydrated</h2>
            <p>Everyday essentials to keep your lips healthy, nourished, and comfortable.</p>
        </div>

        <div class="product-grid mb-80">

            <!-- LIP SCRUB -->
            <div class="product-card">
                <div class="product-img">
                    <img src="{{ asset('assets/images/products/lip-scrub.jpg') }}" alt="Lip Scrub">
                </div>

                <h3>Lip Scrub</h3>

                <div class="product-ingredients">
                    Fine sugar, nourishing oils
                </div>

                <ul class="product-benefits">
                    <li>Removes dry, flaky skin</li>
                    <li>Leaves lips soft & smooth</li>
                    <li>Enhances natural texture</li>
                </ul>

                <div class="product-price">$12.00</div>

                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="lip-scrub">
                    <input type="hidden" name="name" value="Lip Scrub">
                    <input type="hidden" name="price" value="12">
                    <input type="hidden" name="image" value="lip-scrub.jpg">

                    <button type="submit" class="add-to-cart-btn">
                        Add to Cart
                    </button>
                </form>
            </div>

            <!-- LIP OIL -->
            <div class="product-card">
                <div class="product-img">
                    <img src="{{ asset('assets/images/products/lip-oil.jpg') }}" alt="Lip Oil">
                </div>

                <h3>Lip Oil</h3>

                <div class="product-ingredients">
                    Natural oils, vitamin-rich blend
                </div>

                <ul class="product-benefits">
                    <li>Deep hydration</li>
                    <li>Natural glossy finish</li>
                    <li>Comfortable, non-sticky feel</li>
                </ul>

                <div class="product-price">$15.00</div>

                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="lip-oil">
                    <input type="hidden" name="name" value="Lip Oil">
                    <input type="hidden" name="price" value="15">
                    <input type="hidden" name="image" value="lip-oil.jpg">

                    <button type="submit" class="add-to-cart-btn">
                        Add to Cart
                    </button>
                </form>
            </div>

        </div>

        <!-- ================= BEAUTY ESSENTIALS ================= -->
        <div class="section-title text-center mb-40">
            <span class="sp-title">Beauty Essentials</span>
            <h2>Defined & Nourished</h2>
            <p>Targeted care for lashes and brows with gentle, effective formulas.</p>
        </div>

        <div class="product-grid">

            <!-- LASH & EYEBROW SERUM -->
            <div class="product-card">
                <div class="product-img">
                    <img src="{{ asset('assets/images/products/lash-serum.jpg') }}" alt="Lash & Eyebrow Serum">
                </div>

                <h3>Lash & Eyebrow Serum</h3>

                <div class="product-ingredients">
                    Conditioning oils, nourishing actives
                </div>

                <ul class="product-benefits">
                    <li>Strengthens lashes & brows</li>
                    <li>Promotes fuller-looking hair</li>
                    <li>Reduces breakage</li>
                    <li>Gentle for daily use</li>
                </ul>

                <div class="product-price">$25.00</div>

                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="lash-serum">
                    <input type="hidden" name="name" value="Lash & Eyebrow Serum">
                    <input type="hidden" name="price" value="25">
                    <input type="hidden" name="image" value="lash-serum.jpg">

                    <button type="submit" class="add-to-cart-btn">
                        Add to Cart
                    </button>
                </form>
            </div>

        </div>

    </div>
</div>



@endsection
