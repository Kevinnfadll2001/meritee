@extends('layouts.index')

@section('title', 'San Bernardino County Non-Emergency Medical Transportation (NEMT) | OnSite Transportation')
@section('meta_description', 'Safe and reliable NEMT in San Bernardino County. Wheelchair-accessible, ADA-compliant transportation for medical appointments. Serving all SB cities. Book now.')

@section('content')
<!-- San Bernardino County Page Schema -->
 @verbatim
<script type="application/ld+json">
    {
        "@context": "https://schema.org"
        , "@type": "Service"
        , "@id": "https://onsitedrive.com/#san-bernardino-nemt"
        , "name": "Non-Emergency Medical Transportation in San
        Bernardino County ",
        "serviceType": "Non-Emergency Medical Transportation
            (NEMT)
        ",
        "provider": {
            "@id": "https://onsitedrive.com/#onsite-transportation"
        }
        , "areaServed": {
            "@type": "AdministrativeArea"
            , "name": "San Bernardino County, California"
        }
        , "description": "Wheelchair-accessible non-emergency
        medical transportation
        for patients traveling to and from
        medical appointments
        , dialysis
        , therapy
        , and hospital
        visits throughout San Bernardino County.
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
                Non-Emergency Medical Transportation in San Bernardino County (NEMT)
            </h3>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="blog-details">
                    <div class="blog-card blog-card--three wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <!-- Featured Image -->
                        <div class="blog-card__image mb-4 rounded shadow-sm overflow-hidden position-relative">
                            <img loading="lazy" src="{{ asset('assets/images/County/onsite-patient.jpg') }}" alt="San Bernardino County wheelchair van service" class="img-fluid">

                        </div>

                        <!-- Page Content -->
                        <div class="blog-card__content">

                            <!-- INTRO -->
                            <p class="lead">
                                OnSite Transportation delivers safe, professional non-emergency medical transportation
                                throughout San Bernardino County. Our ADA-compliant wheelchair vans support patients
                                going to medical appointments, therapies, dialysis, specialist visits, and hospital discharges.
                                We proudly serve the largest county in the nation with reliable, accessible patient transport.
                            </p>

                            <!-- SECTION 1 -->
                            <h3 class="mt-5 mb-3 text-primary">Wheelchair Transportation in San Bernardino County</h3>
                            <p>
                                Our wheelchair vans include hydraulic ramps, securement points, and ADA safety restraints.
                                We aim to make every ride comfortable, safe, and stress-free for patients and caregivers.
                            </p>

                            <!-- SECTION 2 -->
                            <h3 class="mt-5 mb-3 text-primary">Driver Training & ADA Compliance</h3>
                            <p>OnSite drivers are trained extensively in:</p>

                            <ul>
                                <li>Wheelchair securement</li>
                                <li>Patient assistance</li>
                                <li>ADA-compliance</li>
                                <li>Defensive driving</li>
                                <li>Sensitivity & medical transport professionalism</li>
                            </ul>

                            <!-- SECTION 3 -->
                            <h3 class="mt-5 mb-3 text-primary">Healthcare Facilities We Commonly Serve</h3>

                            <ul>
                                <li>Arrowhead Regional Medical Center</li>
                                <li>Loma Linda University Medical Center (SB Campus)</li>
                                <li>St. Bernardine Medical Center</li>
                                <li>Redlands Community Hospital</li>
                                <li>Local dialysis centers, SNFs, and rehab clinics</li>
                            </ul>

                            <!-- Featured Image -->
                            <div class="blog-card__image mb-4 rounded shadow-sm overflow-hidden position-relative">
                                <img loading="lazy" src="{{ asset('assets/images/County/Onsite-Group-Photo.jpg') }}" alt="San Bernardino County ADA-certified medical transport drivers" class="img-fluid">

                            </div>
                            <!-- SECTION 4 -->
                            <h3 class="mt-5 mb-3 text-primary">Cities We Serve in San Bernardino County</h3>

                            <ul>
                                <li>San Bernardino</li>
                                <li>Fontana</li>
                                <li>Ontario</li>
                                <li>Upland</li>
                                <li>Redlands</li>
                                <li>Rancho Cucamonga</li>
                                <li>Chino</li>
                                <li>Chino Hills</li>
                                <li>Colton</li>
                                <li>Rialto</li>
                                <li>Highland</li>
                                <li>Hesperia</li>
                                <li>Victorville</li>
                                <li>Apple Valley</li>
                                <li>Loma Linda</li>
                            </ul>

                            <!-- SECTION 5 -->
                            <h3 class="mt-5 mb-3 text-primary">Why Facilities Choose OnSite</h3>

                            <ul>
                                <li>Reliable pickup windows</li>
                                <li>ADA-compliant vans</li>
                                <li>Trained, professional drivers</li>
                                <li>Consistent communication</li>
                                <li>7-day operations</li>
                            </ul>

                            <!-- SECTION 6 -->
                            <h3 class="mt-5 mb-3 text-primary">Book a Ride in San Bernardino County</h3>

                            <p>
                                Contact our dispatch team to schedule transportation anywhere in San Bernardino County.
                                We proudly support patients, families, and healthcare facilities with dependable
                                non-emergency medical transportation.
                            </p>

                            <!-- Featured Image -->
                            <div class="blog-card__image mb-4 rounded shadow-sm overflow-hidden position-relative">
                                <img loading="lazy" src="{{ asset('assets/images/County/Onsite-Vehicle-Photo.jpg') }}" alt="San Bernardino County medical transport van exterior" class="img-fluid">

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

                                <a href="{{ route('orangeNemt') }}" class="taxi-booking__form__btn cityride-btn d-flex align-items-center justify-content-center mx-3 my-2" style="min-width:180px;">
                                    <span class="cityride-btn__icon"><i class="icon-front-car"></i></span>
                                    <span>Riverside County</span>
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
