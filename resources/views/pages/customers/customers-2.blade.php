@extends('layouts.index')

@section('content')

<style>
    /* Fix banner position under fixed header */
    .inner-banner-offset {
        margin-top: -5px;
        /* adjust if your header is taller */
    }
 .inner-bg1 {
        background-image: url("{{ asset('assets/images/customers/customers.jpg') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 300px; /* adjust height if needed */
    }
</style>

<!-- Inner Banner -->
<div class="inner-banner inner-bg1 inner-banner-offset">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Customers</h3>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Customers</li>
            </ul>
        </div>
    </div>
</div>

<!-- Intro Section -->
<div class="about-area pt-80 pb-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h2 class="mb-4">Solving problems with clarity, simplicity & honesty.</h2>
                <p class="mb-3">
                    Call Center International’s large portfolio of clients comes from the technology we have put in place
                    with our partners to serve some of the largest and most demanding multi-national companies.
                </p>
                <p>
                    Our multilingual agents allow us to serve customers worldwide with trust and efficiency.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Customers Grid -->
<div class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center">

            @php
            $customers = [
            ['cust.10.png','https://facebook.com'],
            ['cust.11.png','https://instagram.com'],
            ['cust.12.png','https://linkedin.com'],
            ['cust.13.png','https://twitter.com'],
            ['cust.14.png','https://youtube.com'],
            ['cust.15.png','https://google.com'],
            ['cust.16.png','https://tiktok.com'],
            ['cust.17.png','https://whatsapp.com'],
            ['cust.18.png','https://apple.com'],
            ];
            @endphp

            @foreach($customers as $customer)
<div class="col-lg-4 col-md-6">
    <div class="blog-card-two">
        <img
            src="{{ asset('assets/images/customers/'.$customer[0]) }}"
            alt="Customer"
            style="width:100%;"
            onerror="this.src='{{ asset('assets/images/customers/default.png') }}'">
    </div>
</div>
@endforeach


        </div>

        <!-- Pagination -->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="pagination-area">

                    <a href="{{ route('customers.page1') }}" class="prev page-numbers">
                        <i class="bx bx-chevron-left"></i>
                    </a>

                    <a href="{{ route('customers.page1') }}" class="page-numbers">1</a>
                    <span class="page-numbers current">2</span>
                    <a href="{{ route('customers.page3') }}" class="page-numbers">3</a>

                    <a href="{{ route('customers.page3') }}" class="next page-numbers">
                        <i class="bx bx-chevron-right"></i>
                    </a>

                </div>
            </div>
        </div>

    </div>
</div>

@endsection
