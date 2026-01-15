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
                Beyond the Ride: How NEMT Drivers Bring Comfort to Every Mile
            </h3>
        </div>

        <!-- Blog Content -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="blog-details">
                    <div class="blog-card blog-card--three wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <!-- Featured Image -->
                        <div class="blog-card__image mb-4 rounded shadow-sm overflow-hidden position-relative">
                            <img src="{{ asset('assets/images/services/nemt-driver-helping.webp') }}" alt="NEMT driver assisting patient with wheelchair" class="img-fluid">
                            {{-- <div class="blog-card__date bg-primary text-white rounded">
                                <span class="blog-card__date__day">10</span>
                                <span class="blog-card__date__month">Nov</span>
                            </div> --}}
                        </div>

                        <div class="blog-card__content">
                            <p class="lead">
                                In non-emergency medical transportation (NEMT), vehicles and logistics matter — but people matter more.
                                At <strong>OnSite Transportation</strong>, our mission extends beyond simply taking patients from Point A to Point B.
                                Every ride is an opportunity to provide comfort, dignity, and human connection for those navigating mobility challenges or recurring medical appointments.
                            </p>

                            <p>Whether serving Orange County, Riverside, San Bernardino, or Los Angeles, our drivers bring professionalism and empathy to every mile.</p>

                            <h3 class="mt-5 mb-3 text-primary">The Heart of Our Service: Our Drivers</h3>
                            <p>
                                Our drivers are the heartbeat of our operation — hand-selected, thoroughly trained, and genuinely passionate about helping others.
                                Before they ever get behind the wheel, every driver completes extensive training in:
                            </p>
                            <ul>
                                <li>ADA-compliant wheelchair handling and securement</li>
                                <li>Passenger assistance protocols (door-through-door and hand-to-hand support)</li>
                                <li>HIPAA awareness and confidentiality</li>
                                <li>Defensive driving and safety standards</li>
                            </ul>
                            <p>Beyond certifications, what sets them apart is their compassion — a calm conversation, a reassuring smile, or remembering a passenger’s favorite radio station.</p>

                            <!-- Comparison Image Section -->
                            <div class="my-5 text-center">
                                <img src="{{ asset('assets/images/services/heart.png') }}" alt="NEMT vs Ambulance transport" class="img-fluid rounded shadow-sm mb-3">
                                <p class="text-muted">NEMT focuses on comfort and accessibility, while ambulances handle emergency medical response.</p>
                            </div>

                            <h3 class="mt-5 mb-3 text-primary">Stories from the Road</h3>
                            <ul>
                                <li>A dialysis patient who rides with us three times a week says our drivers feel like “family.”</li>
                                <li>A senior in Riverside looks forward to her therapy appointments for the friendly chat with her driver.</li>
                                <li>A family in Orange County trusts us for safe, dependable wheelchair transportation for ongoing care.</li>
                            </ul>
                            <p>These real moments reflect our belief that every mile counts — not just the distance, but the experience along the way.</p>

                            <h3 class="mt-5 mb-3 text-primary">Safety, Dignity, and Dependability — Every Time</h3>
                            <p>
                                Our team follows strict safety and sanitation protocols before and after every trip. Vehicles are inspected, cleaned, and fully equipped for ADA compliance and passenger peace of mind.
                                We aim to make each ride as comfortable and consistent as possible for our regular passengers.
                            </p>

                            <h3 class="mt-5 mb-3 text-primary">Why Facilities and Families Choose OnSite</h3>
                            <p>
                                Healthcare facilities and families throughout Southern California trust OnSite Transportation because we combine professionalism with heart. We offer:
                            </p>
                            <ul>
                                <li>Reliable scheduling and punctual pick-ups</li>
                                <li>Real-time dispatch communication</li>
                                <li>Compassionate, trained drivers</li>
                                <li>Coverage across Orange, Riverside, San Bernardino, and Los Angeles Counties</li>
                            </ul>

                            {{-- <div class="my-5 text-center">
                                <img src="{{ asset('assets/images/services/driver-patient.jpg') }}" alt="Compassionate medical transport driver" class="img-fluid rounded shadow-sm mb-3">
                                <p class="text-muted">Our drivers bring empathy and care to every passenger interaction.</p>
                            </div> --}}

                            <h3 class="mt-5 mb-3 text-primary">A Promise of Care That Moves You</h3>
                            <p>
                                At OnSite Transportation, true care doesn’t stop at the clinic doors — it starts the moment our driver greets you and continues until you’ve safely arrived.
                                Because for us, it’s never just a ride — it’s reassurance, reliability, and respect.
                            </p>

                            <div class="alert alert-primary my-5">
                                <h4 class="text-primary">The Takeaway</h4>
                                <p>
                                    Every ride we provide is a promise — to deliver care, consistency, and compassion. When we help someone get to their appointment safely, we’re not just driving them; we’re helping them live healthier, more independent lives.
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
