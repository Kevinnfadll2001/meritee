@extends('layouts.index')

@section('title', 'Orange County Non-Emergency Medical Transportation (NEMT) | OnSite Transportation')
@section('meta_description', 'Orange County non-emergency medical transportation. ADA-compliant wheelchair vans and trained drivers serving all OC cities. Safe, reliable, and professional. Book today.')

@section('content')
<!-- Orange County Schema -->
 @verbatim
<script type="application/ld+json">
    {
        "@context": "https://schema.org"
        , "@type": "Service"
        , "@id": "https://onsitedrive.com/#orange-county-nemt"
        , "name": "Non-Emergency Medical Transportation in Orange
        County ",
        "serviceType": "Non-Emergency Medical Transportation
            (NEMT)
        ",
        "provider": {
            "@id": "https://onsitedrive.com/#onsite-transportation"
        }
        , "areaServed": {
            "@type": "AdministrativeArea"
            , "name": "Orange County, California"
        }
        , "description": "Wheelchair-accessible non-emergency
        medical transportation
        for patients traveling to and from
        medical appointments
        , dialysis
        , therapy
        , and hospital
        visits throughout Orange County.
        "
    }

</script>
@endverbatim
<section class="blog-details-page section-space">
    <div class="container">

        <!-- Section Title -->
        <div class="sec-title sec-title--center">
            <div class="sec-title__top wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="150ms">
                <div class="sec-title__shape"></div>
                <h6 class="sec-title__tagline">County Services</h6>
                <div class="sec-title__shape"></div>
            </div>
            <h3 class="sec-title__title wow fadeInUp text-primary" data-wow-duration="1500ms" data-wow-delay="200ms">
                Non-Emergency Medical Transportation in Orange County (NEMT)
            </h3>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="blog-details">
                    <div class="blog-card blog-card--three wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <!-- Featured Image -->
                        <div class="blog-card__image mb-4 rounded shadow-sm overflow-hidden position-relative">
                            <img loading="lazy" src="{{ asset('assets/images/County/onsite-patient.jpg') }}" alt="Orange County wheelchair van service" class="img-fluid">

                        </div>

                        <!-- Content -->
                        <div class="blog-card__content">

                            <!-- INTRO -->
                            <p class="lead">
                                OnSite Transportation provides dependable non-emergency medical transportation across
                                Orange County, offering wheelchair-accessible rides to medical appointments, procedures,
                                therapy, and specialty clinics. Our team ensures prompt, safe, and professional transportation
                                for patients throughout all OC cities.
                            </p>

                            <!-- SECTION 1 -->
                            <h3 class="mt-5 mb-3 text-primary">Wheelchair Van Service in Orange County</h3>
                            <p>
                                Our ADA-compliant fleet includes modern, accessible vehicles equipped for safe wheelchair
                                transport. We focus on comfort, safety, and professionalism for every patient.
                            </p>

                            <!-- SECTION 2 -->
                            <h3 class="mt-5 mb-3 text-primary">ADA Trained Drivers & Safety Standards</h3>
                            <p>OnSite drivers are trained in:</p>

                            <ul>
                                <li>ADA wheelchair securements</li>
                                <li>Patient care and sensitivity</li>
                                <li>Safe loading and unloading procedures</li>
                                <li>Medical appointment coordination</li>
                            </ul>

                            <!-- SECTION 3 -->
                            <h3 class="mt-5 mb-3 text-primary">Medical Centers We Frequently Serve in Orange County</h3>

                            <ul>
                                <li>Hoag Hospital Newport Beach</li>
                                <li>UCI Medical Center</li>
                                <li>Kaiser Anaheim / Irvine</li>
                                <li>Mission Hospital</li>
                                <li>Outpatient clinics, dialysis centers, and SNFs</li>
                            </ul>

                            <!-- Featured Image -->
                            <div class="blog-card__image mb-4 rounded shadow-sm overflow-hidden position-relative">
                                <img loading="lazy" src="{{ asset('assets/images/County/Onsite-Group-Photo.jpg') }}" alt="OnSite Transportation’s ADA-trained driver group serving OC medical centers" class="img-fluid">

                            </div>

                            <!-- SECTION 4 -->
                            <h3 class="mt-5 mb-3 text-primary">Cities We Serve in Orange County</h3>

                            <ul>
                                <li>Irvine</li>
                                <li>Anaheim</li>
                                <li>Santa Ana</li>
                                <li>Huntington Beach</li>
                                <li>Newport Beach</li>
                                <li>Garden Grove</li>
                                <li>Costa Mesa</li>
                                <li>Orange</li>
                                <li>Fullerton</li>
                                <li>Tustin</li>
                                <li>Lake Forest</li>
                                <li>Mission Viejo</li>
                                <li>Laguna Hills</li>
                                <li>Fountain Valley</li>
                            </ul>

                            <!-- SECTION 5 -->
                            <h3 class="mt-5 mb-3 text-primary">Why Orange County Trusts OnSite Transportation</h3>

                            <ul>
                                <li>Punctual pickups</li>
                                <li>Modern ADA-compliant vehicles</li>
                                <li>Professional medical transport drivers</li>
                                <li>Clear communication with families & facilities</li>
                                <li>Local, county-wide coverage</li>
                            </ul>

                            <!-- SECTION 6 -->
                            <h3 class="mt-5 mb-3 text-primary">Book a Ride in Orange County</h3>

                            <p>
                                To schedule wheelchair or mobility transportation in Orange County, contact our dispatch team.
                                We proudly support patients, families, and healthcare providers across OC with dependable,
                                ADA-compliant NEMT solutions.
                            </p>

                            <!-- Featured Image -->
                            <div class="blog-card__image mb-4 rounded shadow-sm overflow-hidden position-relative">
                                <img loading="lazy" src="{{ asset('assets/images/County/Onsite-Vehicle-Photo.jpg') }}" alt="Orange County NEMT wheelchair van interior" class="img-fluid">

                            </div>

                            <!-- NAVIGATION BUTTONS -->

                            <div class="mt-5 mb-5 d-flex justify-content-center flex-wrap">

                                <!-- Home Button -->
                                <a href="{{ route('home') }}" class="taxi-booking__form__btn cityride-btn d-flex align-items-center justify-content-center mx-3 my-2" style="min-width:180px;">
                                    <span class="cityride-btn__icon"><i class="icon-front-car"></i></span>
                                    <span>Home</span>
                                </a>

                                <!-- Services Button -->
                                <a href="{{ route('services') }}" class="taxi-booking__form__btn cityride-btn d-flex align-items-center justify-content-center mx-3 my-2" style="min-width:180px;">
                                    <span class="cityride-btn__icon"><i class="icon-front-car"></i></span>
                                    <span>Services</span>
                                </a>

                                <!-- Contact Us Button -->
                                <a href="{{ route('contact') }}" class="taxi-booking__form__btn cityride-btn d-flex align-items-center justify-content-center mx-3 my-2" style="min-width:180px;">
                                    <span class="cityride-btn__icon"><i class="icon-front-car"></i></span>
                                    <span>Contact Us</span>
                                </a>

                                <a href="{{ route('riversideNemt') }}" class="taxi-booking__form__btn cityride-btn d-flex align-items-center justify-content-center mx-3 my-2" style="min-width:180px;">
                                    <span class="cityride-btn__icon"><i class="icon-front-car"></i></span>
                                    <span>Orange County</span>
                                </a>

                            </div>

                        </div><!-- /.blog-card__content -->

                    </div><!-- /.blog-card -->
                </div><!-- /.blog-details -->

            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->

    </div><!-- /.container -->
</section>
@endsection
