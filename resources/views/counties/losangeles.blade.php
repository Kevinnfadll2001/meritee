@extends('layouts.index')

@section('title', 'Los Angeles County Non-Emergency Medical Transportation (NEMT) | OnSite Transportation')
@section('meta_description', 'Los Angeles County non-emergency medical transportation (NEMT). ADA-compliant wheelchair vans, trained drivers, and safe transport across LA. Book your ride today.')

@section('content')
<!-- Orange County Schema -->
 @verbatim
<script type="application/ld+json">
    {
        "@context": "https://schema.org"
        , "@type": "Service"
        , "@id": "https://onsitedrive.com/#los-angeles-countynemt"
        , "name": "Non-Emergency Medical Transportation in Los
        Angeles County ",
        "serviceType": "Non-Emergency Medical Transportation
            (NEMT)
        ",
        "provider": {
            "@id": "https://onsitedrive.com/#onsite-transportation"
        }
        , "areaServed": {
            "@type": "AdministrativeArea"
            , "name": "Los Angeles County, California"
        }
        , "description": "Wheelchair-accessible non-emergency
        medical transportation
        for patients traveling to and from
        medical appointments
        , dialysis
        , therapy
        , and hospital
        visits throughout Los Angeles County.
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
                Non-Emergency Medical Transportation in Los Angeles County (NEMT)
            </h3>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="blog-details">
                    <div class="blog-card blog-card--three wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <!-- Featured Image -->
                        <div class="blog-card__image mb-4 rounded shadow-sm overflow-hidden position-relative">
                            <img loading="lazy" src="{{ asset('assets/images/County/onsite-patient.jpg') }}" alt="Los Angeles County wheelchair van service" class="img-fluid">

                        </div>

                        <!-- Content -->
                        <div class="blog-card__content">

                            <!-- INTRO -->
                            <p class="lead">
                                OnSite Transportation offers safe, accessible, and professional non-emergency medical
                                transportation throughout Los Angeles County. With ADA-compliant wheelchair vans and
                                trained drivers, we support patients traveling to medical appointments, outpatient care,
                                hospital visits, and specialty treatments across LA.
                            </p>

                            <!-- SECTION 1 -->
                            <h3 class="mt-5 mb-3 text-primary">Wheelchair Transportation in Los Angeles County</h3>
                            <p>
                                Our wheelchair vans include ramps, securements, and ADA safety restraints to ensure safe
                                mobility transport across the county’s busy urban areas.
                            </p>

                            <!-- SECTION 2 -->
                            <h3 class="mt-5 mb-3 text-primary">Driver Training & Patient Care</h3>
                            <p>Every driver is trained in:</p>

                            <ul>
                                <li>ADA wheelchair securements</li>
                                <li>Passenger assistance</li>
                                <li>Safety protocols</li>
                                <li>Sensitivity and patient interaction</li>
                                <li>Urban defensive driving</li>
                            </ul>

                            <!-- SECTION 3 -->
                            <h3 class="mt-5 mb-3 text-primary">Healthcare Facilities Commonly Served</h3>

                            <ul>
                                <li>Cedars-Sinai Medical Center</li>
                                <li>Kaiser Los Angeles</li>
                                <li>UCLA Health</li>
                                <li>Providence & Dignity Health hospitals</li>
                                <li>Rehab centers, dialysis clinics, SNFs, specialty medical offices</li>
                            </ul>

                            <!-- Featured Image -->
                            <div class="blog-card__image mb-4 rounded shadow-sm overflow-hidden position-relative">
                                <img loading="lazy" src="{{ asset('assets/images/County/Onsite-Group-Photo.jpg') }}" alt="Professional wheelchair transport drivers serving Los Angeles medical facilities" class="img-fluid">

                            </div>

                            <!-- SECTION 4 -->
                            <h3 class="mt-5 mb-3 text-primary">Cities We Serve in Los Angeles County</h3>

                            <ul>
                                <li>Los Angeles</li>
                                <li>Long Beach</li>
                                <li>Pasadena</li>
                                <li>Glendale</li>
                                <li>Burbank</li>
                                <li>Torrance</li>
                                <li>Santa Monica</li>
                                <li>Downey</li>
                                <li>Inglewood</li>
                                <li>West Hollywood</li>
                                <li>Whittier</li>
                                <li>Norwalk</li>
                                <li>Pomona</li>
                                <li>Lancaster</li>
                                <li>Palmdale</li>
                            </ul>

                            <!-- SECTION 5 -->
                            <h3 class="mt-5 mb-3 text-primary">Why LA Facilities Choose OnSite Transportation</h3>

                            <ul>
                                <li>Reliable scheduling</li>
                                <li>ADA-compliant mobility support</li>
                                <li>County-wide coverage</li>
                                <li>Highly trained drivers</li>
                                <li>Smooth communication with facilities</li>
                            </ul>

                            <!-- SECTION 6 -->
                            <h3 class="mt-5 mb-3 text-primary">Book a Ride in Los Angeles County</h3>

                            <p>
                                To schedule mobility or medical transportation within LA County, contact our dispatch team.
                                We proudly assist patients, families, and healthcare providers with dependable, safe, and
                                accessible transportation across Los Angeles.
                            </p>

                            <!-- Featured Image -->
                            <div class="blog-card__image mb-4 rounded shadow-sm overflow-hidden position-relative">
                                <img loading="lazy" src="{{ asset('assets/images/County/Onsite-Vehicle-Photo.jpg') }}" alt="Los Angeles wheelchair van interior for NEMT services" class="img-fluid">

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

                                <a href="{{ route('sanBernardinoNemt') }}" class="taxi-booking__form__btn cityride-btn d-flex align-items-center justify-content-center mx-3 my-2" style="min-width:180px;">
                                    <span class="cityride-btn__icon"><i class="icon-front-car"></i></span>
                                    <span>San Bernardino County</span>
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
