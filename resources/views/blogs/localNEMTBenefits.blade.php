@extends('layouts.index')

@section('content')
<section class="blog-details-page section-space">
    <div class="container">
        <!-- Section Title -->
        <div class="sec-title sec-title--center">
            <div class="sec-title__top wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="150ms">
                <div class="sec-title__shape"></div>
                <h6 class="sec-title__tagline">our latest news</h6>
                <div class="sec-title__shape"></div>
            </div>
            <h3 class="sec-title__title wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                Top 5 Benefits of Choosing Local NEMT Services in the Inland Empire
            </h3>
        </div>

        <!-- Blog Content -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="blog-details">
                    <div class="blog-card blog-card--three wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <!-- Featured Image -->
                        <div class="blog-card__image mb-4 rounded shadow-sm overflow-hidden position-relative">
                            <img src="{{ asset('assets/images/services/local-nemt-inland-2.png') }}" alt="Wheelchair van Inland Empire" class="img-fluid">
                            {{-- <div class="blog-card__date bg-primary text-white rounded">
                                <span class="blog-card__date__day">10</span>
                                <span class="blog-card__date__month">Nov</span>
                            </div> --}}
                        </div>

                        <div class="blog-card__content">

                            <h3 class="text-primary mb-3">The Local Advantage in Medical Transportation</h3>
                            <p class="lead">
                                When it comes to getting to medical appointments, long drives and unreliable rides can create unnecessary stress.
                                That’s where local Non-Emergency Medical Transportation (NEMT) providers make a difference.
                            </p>
                            <p>
                                At <strong>OnSite Transportation</strong>, we proudly serve the Inland Empire — including Riverside, San Bernardino, Orange, and Los Angeles Counties — with safe, timely, and compassionate service built on local knowledge.
                                Choosing a community-based provider means your ride isn’t just convenient — it’s personal, reliable, and designed around your schedule and care needs.
                            </p>

                            <h3 class="mt-5 mb-3 text-primary">1. Faster Response Times When It Matters Most</h3>
                            <p>
                                Local presence means quicker pick-ups and faster coordination. Because our fleet is based within the Inland Empire, our dispatchers know which drivers are closest, which routes are clear, and how to adjust quickly if a last-minute trip request comes in.
                            </p>
                            <ul>
                                <li>Same-day discharges</li>
                                <li>Dialysis and recurring appointments</li>
                                <li>Time-sensitive physical therapy or follow-up care</li>
                            </ul>
                            <p>When every minute counts, proximity matters.</p>

                            {{-- <div class="my-5 text-center">
                                <img src="{{ asset('assets/images/services/nemt-fleet.jpg') }}" alt="Driver assisting patient into NEMT vehicle" class="img-fluid rounded shadow-sm mb-3">
                                <p class="text-muted">Local NEMT fleets provide faster response and smoother coordination.</p>
                            </div> --}}

                            <h3 class="mt-5 mb-3 text-primary">2. Drivers Who Know the Area — and the Patients</h3>
                            <p>
                                Our drivers aren’t just trained professionals — they’re part of your community.
                                They know which medical centers have accessible entrances, which clinics have narrow drop-off zones, and how to navigate local traffic patterns.
                            </p>
                            <p>
                                From Riverside’s medical corridors to San Bernardino’s outpatient centers and Orange County’s rehab facilities, our drivers deliver not only efficiency but also comfort through familiarity and friendly service.
                            </p>

                            <h3 class="mt-5 mb-3 text-primary">3. Support for Local Healthcare Facilities</h3>
                            <p>
                                We don’t just serve patients — we partner with facilities.
                                Hospitals, skilled nursing facilities, dialysis centers, and clinics across the Inland Empire trust OnSite Transportation for reliable patient transfers, overflow support, and after-hours coverage.
                            </p>
                            <p>
                                Our team coordinates directly with facility staff, ensuring every patient gets the right level of care and every transport is documented, secure, and punctual.
                            </p>

                            <h3 class="mt-5 mb-3 text-primary">4. ADA-Compliant Vehicles and Trained Staff</h3>
                            <p>
                                Every trip is handled with safety and dignity in mind.
                                Our ADA-compliant wheelchair vans and ambulatory vehicles are equipped with hydraulic lifts, securement systems, and climate control for comfort during every ride.
                            </p>
                            <ul>
                                <li>Wheelchair securement and passenger assistance</li>
                                <li>Defensive driving and sensitivity training</li>
                                <li>HIPAA awareness and patient confidentiality</li>
                            </ul>
                            <p>We go beyond compliance to deliver care that’s personal and professional.</p>

                            <div class="my-5 text-center">
                                <img src="{{ asset('assets/images/services/wheelchair-van.png') }}" alt="Riverside County NEMT service" class="img-fluid rounded shadow-sm mb-3">
                                <p class="text-muted">Every vehicle is ADA-compliant and designed for safe, comfortable transport.</p>
                            </div>

                            <h3 class="mt-5 mb-3 text-primary">5. Community-Focused Care You Can Count On</h3>
                            <p>
                                As a locally operated company, we’re invested in the same communities we serve.
                                Our team participates in local outreach, senior wellness programs, and healthcare collaborations across Riverside, San Bernardino, Orange, and LA Counties.
                            </p>
                            <p>
                                Choosing a local NEMT provider supports not only accessibility but also your community’s healthcare ecosystem.
                            </p>

                            <h3 class="mt-5 mb-3 text-primary">Your Local Partner in Accessible Transportation</h3>
                            <p>
                                From short-distance clinic visits to recurring dialysis trips, OnSite Transportation provides dependable wheelchair and ambulatory NEMT throughout Southern California.
                                We believe mobility is more than just movement — it’s independence, dignity, and peace of mind.
                            </p>

                            <div class="alert alert-primary my-5">
                                <h4 class="text-primary">The Takeaway</h4>
                                <p>
                                    Local NEMT services combine speed, familiarity, and compassion — ensuring every passenger reaches care safely, comfortably, and on time. At OnSite Transportation, we don’t just drive — we care.
                                </p>
                            </div>

                            <div class="mb-5 p-4 bg-secondary text-white rounded text-center shadow-sm">
                                <strong>OnSite Transportation</strong><br>
                                More Than a Ride - It’s Humanity in Motion<br>
                                Serving Los Angeles, San Bernardino, Riverside, Orange, and San Diego Counties<br>
                                <strong>Call Us:</strong> (844) 566-7483<br>
                                <strong>Visit Us:</strong>
                                <a href="https://onsitedrive.com" class="text-white text-decoration-underline" target="_blank">onsitedrive.com</a>
                            </div>

                            <h4>Disclaimer</h4>
                            <p>
                                The information in this article is for general educational purposes only. All staff references
                                are internal examples and do not include personal data. OnSite Transportation complies with
                                HIPAA and ADA standards.
                            </p>
                        </div>
                    </div><!-- /.blog-card -->
                </div><!-- /.blog-details -->
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
@endsection
