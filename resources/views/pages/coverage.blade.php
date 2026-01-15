@extends('layouts.index')

@section('content')

<!-- Coverage Section -->
<section class="coverage-section section-space" style="background: #f0f4f8; padding: 80px 0;">
    <div class="container">

        <!-- Centered Title, Tagline, and Intro -->
        <div class="text-center mb-5 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="150ms">
            <div class="sec-title mb-3 d-inline-block text-center">
                <div class="sec-title__top d-flex justify-content-center align-items-center mb-3">
                   <div class="sec-title__shape"></div>
                    <h6 class="sec-title__tagline mb-0" style="font-size: 1.25rem; color:#00578d; font-weight:500;">
                        ADA-Compliant Medical Transportation for San Bernardino, Riverside & Orange Counties | OnSite Transportation
                    </h6>
                </div>
                <h3 class="sec-title__title mb-3" style="font-size: 2rem; color:#00578d; font-weight:600;">
                    Full Dispatch Support Across Southern California
                </h3>
                <p class="coverage-intro mb-0" style="font-size: 1rem; color:#333; max-width:700px; margin:0 auto;">
                    We maintain full dispatch coverage across Southern California, providing facility and patient support in the following regions:
                </p>
            </div>
        </div>

        <div class="row gutter-y-40 align-items-start">

            <!-- Left Column: Map/Image -->
<div class="col-lg-6 mb-4 mb-lg-0 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="150ms">
    <div class="coverage-image" style="margin-top: 150px;"> <!-- added margin-top -->
        <img src="assets/images/coverage/coverage-map.png" alt="Coverage Map" class="img-fluid rounded shadow">
        <p class="coverage-image__text mt-3 text-center text-muted">Southern California Dispatch Coverage</p>
    </div>
</div>


            <!-- Right Column: Counties & Details -->
            <div class="col-lg-6 wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="150ms">
                <div class="row g-3">
                    @php
                        $counties = [
                            ['name' => 'Los Angeles County', 'text' => 'ADA-compliant, HIPAA-trained, and community-focused. OnSite Transportation ensures safe, respectful rides for every passenger, every day.'],
                            ['name' => 'Orange County', 'text' => 'OnSite provides ADA-compliant rides for patients in Anaheim, Santa Ana, and Irvine.'],
                            ['name' => 'Riverside County', 'text' => 'Our Riverside coverage includes Corona, Moreno Valley, and Temecula. We partner with local hospitals and rehab facilities.'],
                            ['name' => 'San Bernardino County', 'text' => 'We serve Fontana, Ontario, and Rancho Cucamonga with wheelchair, ambulatory, and dialysis transport.'],
                            ['name' => 'San Diego County', 'text' => 'A transportation partner you can count on. We help healthcare providers deliver continuity of care through safe, reliable NEMT services.'],
                        ];
                    @endphp

                    @foreach($counties as $county)
                    <div class="col-md-12">
                        <div class="county-card p-3 rounded shadow-sm d-flex align-items-start" style="background: #ffffff; transition: all 0.3s ease;">
                            <i class="fas fa-map-marker-alt fa-2x" style="color:#8a9900; margin-right:15px;"></i>
                            <div>
                                <h5 class="mb-2" style="color:#00578d;">{{ $county['name'] }}</h5>
                                <p class="mb-0" style="color:#333; line-height:1.6;">{{ $county['text'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Note Box -->
                <div class="coverage-note mt-4 p-3 rounded" style="background: #e0f7fa; border-left: 5px solid #00acc1;">
                    <p class="mb-0"><strong>Note:</strong> If you are just outside these areas, call our dispatch team — we often extend coverage based on patient need and facility demand.</p>
                </div>
            </div>

        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<!-- Custom Styles -->
@push('styles')
<style>
    .county-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }

    .county-card h5 {
        font-size: 1.25rem;
        margin-bottom: 5px;
    }

    .county-card p {
        font-size: 1rem;
    }
</style>
@endpush

@endsection
