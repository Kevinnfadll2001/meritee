@extends('layouts.index')

@section('content')

<style>
/* ===============================
   INNER BANNER
================================ */
.inner-banner {
    position: relative;
    overflow: hidden;
    min-height: 460px;
    display: flex;
    align-items: center;
}

.inner-banner video {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 1;
}

.inner-banner::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.55);
    z-index: 2;
}

.inner-banner .container {
    position: relative;
    z-index: 3;
}

.inner-banner-offset {
    margin-top: -5px;
}

/* ===============================
   ABOUT SECTION
================================ */
.about-one-section {
    padding: 100px 0;
}

.about-block {
    margin-bottom: 90px;
}

.about-heading {
    color: #113412;
    font-weight: 600;
    letter-spacing: -0.4px;
}

.about-text p {
    color: #555;
    line-height: 1.8;
    max-width: 560px;
}

/* Image */
.about-image img {
    width: 100%;
    border-radius: 8px;
    object-fit: cover;
}

/* ===============================
   VALUES GRID
================================ */
.about-values {
    list-style: none;
    padding: 0;
    margin-top: 35px;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 18px 40px;
}

.about-values li {
    position: relative;
    padding-left: 28px;
    font-size: 16px;
    line-height: 1.6;
    color: #555;
}

.about-values li::before {
    content: "✓";
    position: absolute;
    left: 0;
    color: #113412;
    font-weight: 600;
}

/* ===============================
   CENTER SECTIONS
================================ */
.about-center {
    text-align: center;
}

.about-center p {
    margin: 0 auto;
    max-width: 620px;
}

/* ===============================
   RESPONSIVE
================================ */
@media (max-width: 991px) {
    .about-block {
        margin-bottom: 60px;
    }

    .about-text p {
        max-width: 100%;
    }
}

@media (max-width: 767px) {
    .about-heading {
        font-size: 28px;
    }

    .about-values {
        grid-template-columns: 1fr;
        gap: 14px;
    }

    .about-text p,
    .about-values li {
        font-size: 15px;
    }
}
</style>

<!-- ===============================
     INNER BANNER
================================ -->
<div class="inner-banner inner-banner-offset">
    <video autoplay muted loop playsinline>
        <source src="{{ asset('assets/video/video2.mp4') }}" type="video/mp4">
    </video>

    <div class="container">
        <div class="inner-title text-center text-white">
            <h3>About Us</h3>
            <ul class="text-white">
                <li><a href="{{ url('/') }}" style="color:#fff;">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</div>

<!-- ===============================
     ABOUT CONTENT
================================ -->
<section class="about-one-section">
    <div class="container">

        <!-- OUR STORY -->
        <div class="row align-items-center about-block">
            <div class="col-lg-6">
                <div class="about-text">
                    {{-- <span class="sp-title">Our Story</span> --}}
                    <h2 class="about-heading">How It All Began</h2>

                    <p>
                        Mérîté was born from a simple dream — to create skincare that feels natural,
                        honest, and made with intention.
                    </p>

                    <p>
                        What began as a personal vision evolved through time, research, and careful
                        self-testing. Every formula was crafted with patience, curiosity, and respect
                        for the skin.
                    </p>

                    <p>
                        Today, Mérîté represents the belief that dreams can become reality —
                        and that everyone deserves moments of mindful self-care.
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-image">
                    <img src="{{ asset('assets/images/about-img/merite-story.jpg') }}" alt="Mérîté Story">
                </div>
            </div>
        </div>

        <!-- MISSION -->
        <div class="row about-block justify-content-center">
            <div class="col-lg-8 about-center">
                {{-- <span class="sp-title">Our Purpose</span> --}}
                <h2 class="about-heading">Our Mission</h2>

                <p>
                    To create gentle, natural, and effective skincare that is accessible,
                    enjoyable, and inspiring — helping everyone feel confident in their skin.
                </p>
            </div>
        </div>

        <!-- VALUES -->
        <div class="row about-block justify-content-center">
            <div class="col-lg-10 about-center">
                {{-- <span class="sp-title">Our Philosophy</span> --}}
                <h2 class="about-heading">Our Values</h2>

                <ul class="about-values">
                    <li>100% natural & clean ingredients</li>
                    <li>Handmade with care and intention</li>
                    <li>Personally tested before being shared</li>
                    <li>Gentle and suitable for all skin types</li>
                    <li>Simple, honest, thoughtful formulations</li>
                </ul>
            </div>
        </div>

        <!-- BRAND PROMISE -->
        <div class="row justify-content-center">
            <div class="col-lg-8 about-center">
                {{-- <span class="sp-title">Our Commitment</span> --}}
                <h2 class="about-heading">Brand Promise</h2>

                <p>
                    We promise skincare that feels luxurious yet effortless —
                    designed to support your skin and elevate your everyday routine.
                </p>
            </div>
        </div>

    </div>
</section>

@endsection
