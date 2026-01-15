@extends('layouts.index')

@section('content')
<style>
    .inner-banner-offset {
        margin-top: -5px;
    }

    .inner-bg1 {
        background-image: url("{{ asset('assets/images/news/news.jpg') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 300px;
    }

    /* FIX: Make sure product cards show CTA */
    .blog-card-two {
        overflow: visible !important;
    }

    .blog-card-two .content {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .blog-card-two .read-btn {
        display: inline-block !important;
        margin-top: 20px;
        visibility: visible !important;
        opacity: 1 !important;
    }

    /* IMAGE CONTAINER (controls size) */
.product-img-wrap {
    width: 100%;
    height: 220px;
    background: #f5f5f5;
    border-radius: 6px 6px 0 0;
    display: flex;
    align-items: center;
    justify-content: center;
}

.product-img-wrap img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}



</style>

<!-- Inner Banner -->
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

<div class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center">

            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6 d-flex mb-4">
                <div class="blog-card-two d-flex flex-column w-100">

                    <a href="{{ route('news.details', $blog['slug']) }}" class="product-img-wrap">
                        <img src="{{ asset('assets/images/blog/'.$blog['img']) }}" alt="{{ $blog['title'] }}">
                    </a>

                    <div class="content d-flex flex-column flex-grow-1 p-4">

                        <div class="mb-2 text-muted">
                            <i class="bx bx-package"></i> {{ $blog['date'] }}
                        </div>

                        <h3 class="mb-3">
                            <a href="{{ route('news.details', $blog['slug']) }} ">
                                {{ $blog['title'] }}
                            </a>
                        </h3>

                        <a href="{{ route('news.details', $blog['slug']) }}" class="read-btn mt-auto">
                            View Product
                        </a>

                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
