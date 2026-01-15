@extends('layouts.index')

@section('content')
<section class="blog-page section-space">
    <div class="container">
        <!-- Section Title -->
        <div class="sec-title sec-title--center">
            <div class="sec-title__top wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="150ms">
                <div class="sec-title__shape"></div>
                <h6 class="sec-title__tagline">our latest news</h6>
                <div class="sec-title__shape"></div>
            </div>
        </div>

        <div class="row gutter-y-30">
            @php
            $blogs = [
            ['img' => 'blog1.png', 'title' => 'More Than a Ride: Stories of Compassion on the Road', 'route' => 'latestNews'],
            ['img' => 'NEMTVS.png', 'title' => 'NEMT vs. Ambulance: What’s the Difference and When to Use Each', 'route' => 'nemtVsAmbulance'],
            ['img' => 'paratransit.png', 'title' => 'Serving Our Community: How We Support Patients Across San Bernardino and Riverside Counties', 'route' => 'servingCommunity'],
            ['img' => 'Dispatch.jpg', 'title' => 'Dispatch: The Heart of Non-Emergency Medical Transportation', 'route' => 'dispatch'],
            ['img' => 'Non-Emergency-Mobile-Medical-Van-01.webp', 'title' => 'Beyond the Ride: How NEMT Drivers Bring Comfort to Every Mile', 'route' => 'beyondTheRide'],
            ['img' => 'local-nemt-inland.jpg', 'title' => 'Top 5 Benefits of Choosing Local NEMT Services in the Inland Empire', 'route' => 'localNEMTBenefits'],
            ['img' => 'wheelHome.png', 'title' => 'Wheelchair-Accessible Transportation: What to Expect from
            Your Ride', 'route' => 'wheelchairTransport'],
            ['img' => 'blog-readmission-1.jpg', 'title' => 'How NEMT Reduces Hospital Readmission Rates in Southern California', 'route' => 'nemtReadmission'],
            ['img' => 'senior-1.jpg', 'title' => 'Transportation for Seniors: How NEMT Supports Independent Living', 'route' => 'seniorTransportation'],
            ];
            @endphp

            @foreach($blogs as $index => $blog)
            <div class="col-md-6 col-lg-4">
                <div class="blog-card wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="{{ $index * 100 }}ms" style="display:flex; flex-direction:column; height:100%;">
                    <div class="blog-card__image" style="flex-shrink:0; margin-bottom:15px; overflow:hidden; border-radius:8px;">
                        <a href="{{ route($blog['route']) }}">
                            <img src="{{ asset('assets/images/services/' . $blog['img']) }}" alt="{{ $blog['title'] }}" style="width:100%; height:220px; object-fit:cover; transition:transform 0.4s ease;">
                        </a>
                    </div>
                    <div class="blog-card__content" style="flex:1; display:flex; flex-direction:column; justify-content:space-between;">
                        <h3 class="blog-card__title" style="font-size:18px; font-weight:600; line-height:1.4;">
                            <a href="{{ route($blog['route']) }}" style="color:inherit; text-decoration:none;">
                                {{ $blog['title'] }}
                            </a>
                        </h3>
                        <a href="{{ route($blog['route']) }}" class="blog-card__link" style="margin-top:auto; color:#00578d;">
                            <i class="icon-double-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    /* === BLOG CARD HOVER EFFECT === */
    .blog-card__image img:hover {
        transform: scale(1.05);
    }

    .blog-card__title a:hover {
        color: #8a9900;
        /* subtle hover color */
    }

</style>
@endsection
