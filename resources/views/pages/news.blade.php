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
            <h3>News</h3>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>News</li>
            </ul>
        </div>
    </div>
</div>
<div class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center">

            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6" style="display:flex; align-items:stretch; margin-bottom:30px;">
                <div class="blog-card-two"
                    style="
                            width:100%;
                            display:flex;
                            flex-direction:column;
                            height:auto !important;
                            overflow:visible !important;
                         ">

                    <a href="{{ route('news.details', $blog['slug']) }}" style="display:block;">
                        <img
                            src="{{ asset('assets/images/blog/'.$blog['img']) }}"
                            alt="News Image">

                    </a>

                    <div class="content"
                        style="
                                padding:20px;
                                display:flex;
                                flex-direction:column;
                                flex:1;
                                height:auto !important;
                                overflow:visible !important;
                             ">

                        <div style="margin-bottom:10px;">
                            <i class="bx bx-calendar"></i> {{ $blog['date'] }}
                        </div>

                        <h3 style="
                                margin:0 0 14px 0;
                                line-height:1.45;
                                height:auto !important;
                                max-height:none !important;
                                overflow:visible !important;
                            ">
                            <a href="{{ route('news.details', $blog['slug']) }}"
                                style="
                                        display:block;
                                        white-space:normal !important;
                                        overflow:visible !important;
                                        word-break:break-word;
                                   ">
                                {{ $blog['title'] }}
                            </a>
                        </h3>

                        <a href="{{ route('news.details', $blog['slug']) }}"
                            class="read-btn"
                            style="margin-top:auto;">
                            Read More
                        </a>

                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>


@endsection