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
        min-height: 300px; /* adjust height if needed */
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
<div class="blog-details-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-10">
                <img src="{{ asset('assets/images/blog/'.$post['img']) }}"
                     style="width:100%; margin-bottom:25px;">

                <div style="margin-bottom:15px;">
                    <i class="bx bx-calendar"></i> {{ $post['date'] }}
                </div>

                <h2 style="margin-bottom:20px;">
                    {{ $post['title'] }}
                </h2>

                <p style="line-height:1.8;">
                    {{ $post['content'] }}
                </p>
            </div>

        </div>
    </div>
</div>

@endsection
