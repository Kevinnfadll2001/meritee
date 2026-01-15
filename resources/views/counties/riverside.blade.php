@extends('layouts.index')

@section('title', 'Riverside County Non-Emergency Medical Transportation (NEMT) | OnSite Transportation')
@section('meta_description', 'Reliable wheelchair-accessible non-emergency medical transportation in Riverside County. ADA-compliant vans, trained drivers, and safe transport for medical appointments. Book today.')
@section('content')
<!-- Riverside Schema -->
 @verbatim
<script type="application/ld+json">
    {
        "@context": "https://schema.org"
        , "@type": "Service"
        , "@id": "https://onsitedrive.com/#riverside-nemt"
        , "name": "Non-Emergency Medical Transportation in
        Riverside County ",
        "serviceType": "Non-Emergency Medical Transportation
            (NEMT)
        ",
        "provider": {
            "@id": "https://onsitedrive.com/#onsite-transportation"
        }
        , "areaServed": {
            "@type": "AdministrativeArea"
            , "name": "Riverside County, California"
        }
        , "description": "Wheelchair-accessible non-emergency
        medical transportation
        for patients traveling to and from
        medical appointments
        , dialysis
        , therapy
        , and hospital
        visits throughout Riverside County.
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
                Non-Emergency Medical Transportation in Riverside County (NEMT)
            </h3>
        </div>

        <!-- Content Section -->
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="blog-details">
                    <div class="blog-card blog-card--three wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <!-- Featured Image -->
                        <div class="blog-card__image mb-4 rounded shadow-sm overflow-hidden position-relative">
                            <img loading="lazy" src="{{ asset('assets/images/County/onsite-patient.jpg') }}" alt="Riverside County wheelchair van service"  class="img-fluid">

                        </div>

                        <!-- Content -->
                        <div class="blog-card__content">

                            <!-- INTRODUCTION -->
                            <p class="lead">
                                OnSite Transportation proudly provides reliable, ADA-compliant non-emergency medical
                                transportation (NEMT) throughout Riverside County. Our wheelchair-accessible vehicles and
                                professionally trained drivers support patients traveling to medical appointments, outpatient
                                procedures, physical therapy, dialysis, hospital discharges, and other essential care.
                            </p>

                            <p>
                                We offer safe, on-time transportation across all Riverside communities with a focus on
                                compassion, professionalism, and accessibility.
                            </p>

                            <!-- SECTION 1 -->
                            <h3 class="mt-5 mb-3 text-primary">Wheelchair Transportation in Riverside County</h3>
                            <p>
                                Our wheelchair vans are fully ADA-compliant, equipped with securements, ramps, and safety
                                restraints designed for safe mobility transport. Whether patients require a standard wheelchair
                                ride or specialized mobility assistance, our team ensures comfort and secure handling throughout
                                the journey.
                            </p>

                            <!-- SECTION 2 -->
                            <h3 class="mt-5 mb-3 text-primary">ADA-Compliant Vehicles & Driver Training</h3>
                            <p>Every OnSite driver completes:</p>

                            <ul>
                                <li>ADA securement training</li>
                                <li>Passenger assistance training</li>
                                <li>Safety protocol certification</li>
                                <li>Sensitivity & patient care training</li>
                            </ul>

                            <p>
                                We follow strict ADA standards for loading, securements, and safe transport — giving patients
                                and facilities confidence in every ride.
                            </p>

                            <!-- Featured Image -->
                            <div class="blog-card__image mb-4 rounded shadow-sm overflow-hidden position-relative">
                                <img loading="lazy" src="{{ asset('assets/images/County/Onsite-Group-Photo.jpg') }}" alt="OnSite Transportation’s ADA-trained driver staff in Riverside County" class="img-fluid">

                            </div>

                            <!-- SECTION 3 -->
                            <h3 class="mt-5 mb-3 text-primary">Medical Appointments & Facilities We Commonly Serve</h3>

                            <ul>
                                <li>Kaiser Permanente Riverside</li>
                                <li>Riverside Community Hospital</li>
                                <li>Loma Linda University Medical Center – Murrieta</li>
                                <li>Temecula Valley Hospital</li>
                                <li>Dialysis centers, rehab facilities, SNFs, and specialty clinics</li>
                            </ul>

                            <!-- SECTION 4 -->
                            <h3 class="mt-5 mb-3 text-primary">Cities We Serve in Riverside County</h3>

                            <ul>
                                <li>Riverside</li>
                                <li>Corona</li>
                                <li>Moreno Valley</li>
                                <li>Hemet</li>
                                <li>Perris</li>
                                <li>Murrieta</li>
                                <li>Temecula</li>
                                <li>Lake Elsinore</li>
                                <li>Menifee</li>
                                <li>Beaumont</li>
                                <li>Banning</li>
                                <li>Wildomar</li>
                                <li>Jurupa Valley</li>
                                <li>Canyon Lake</li>
                                <li>Eastvale</li>
                            </ul>

                            <!-- SECTION 5 -->
                            <h3 class="mt-5 mb-3 text-primary">Why Riverside Facilities Choose OnSite Transportation</h3>

                            <ul>
                                <li>Reliable, on-time pickup and drop-off</li>
                                <li>Wheelchair-accessible vans with modern securements</li>
                                <li>Professional drivers dedicated to patient care</li>
                                <li>7-day availability</li>
                                <li>Transparent communication with facilities and caregivers</li>
                            </ul>

                            <!-- SECTION 6 -->
                            <h3 class="mt-5 mb-3 text-primary">Book a Ride in Riverside County</h3>

                            <p>
                                To schedule or request transportation in Riverside County, contact our dispatch team.
                                We proudly support patients, families, and healthcare providers throughout the region with
                                dependable non-emergency medical transportation.
                            </p>

                            <!-- Featured Image -->
                            <div class="blog-card__image mb-4 rounded shadow-sm overflow-hidden position-relative">
                                <img loading="lazy" src="{{ asset('assets/images/County/Onsite-Vehicle-Photo.jpg') }}" alt="Riverside County ADA wheelchair van exterior" class="img-fluid">

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

                                <a href="{{ route('losAngelesNemt') }}" class="taxi-booking__form__btn cityride-btn d-flex align-items-center justify-content-center mx-3 my-2" style="min-width:180px;">
                                    <span class="cityride-btn__icon"><i class="icon-front-car"></i></span>
                                    <span>Los Angeles County</span>
                                </a>
                            </div>





                        </div> <!-- /.blog-card__content -->

                    </div> <!-- /.blog-card -->
                </div> <!-- /.blog-details -->

            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->

    </div><!-- /.container -->
</section>
@endsection
