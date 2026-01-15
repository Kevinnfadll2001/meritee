@extends('layouts.index')

@section('content')
<style>
    /* Fix banner position under fixed header */
    .inner-banner-offset {
        margin-top: -5px;
        /* adjust if your header is taller */
    }

    .inner-bg1 {
        background-image: url("{{ asset('assets/images/news/news.jpg') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 300px;
        /* adjust height if needed */
    }

</style>
<!-- Inner Banner -->
<div class="inner-banner inner-bg1 inner-banner-offset">
    <div class="container">
        <div class="inner-title text-center">
            <h3>News-Details</h3>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/news') }}">News</a></li>
                <li>News-Details</li>
            </ul>
        </div>
    </div>
</div>
<div class="page-with-fixed-header">
    <div class="container pt-100 pb-70">

        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">

                <span class="sp-title2">Product Benefits</span>

                <h2 class="product-title">
                    {{ $post['title'] }}
                </h2>

                <p class="product-intro">
                    Carefully crafted to support your daily self-care routine with gentle,
                    effective, and thoughtfully selected ingredients.
                </p>

                <ul class="product-benefits">
                    @foreach(explode('•', $post['content']) as $benefit)
                        @if(trim($benefit))
                            <li>{{ trim($benefit) }}</li>
                        @endif
                    @endforeach
                </ul>

            </div>
        </div>

    </div>
</div>

@endsection
