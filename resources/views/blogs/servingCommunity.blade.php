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
                Serving Our Community: How We Support Patients Across San Bernardino and Riverside Counties
            </h3>
        </div>

        <!-- Blog Content -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="blog-details">
                    <div class="blog-card blog-card--three wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <!-- Featured Image -->
                        <div class="blog-card__image mb-4 rounded shadow-sm overflow-hidden position-relative">
                            <img src="{{ asset('assets/images/services/paratransit.png') }}" alt="Serving Our Community" class="img-fluid">
                            {{-- <div class="blog-card__date bg-primary text-white rounded">
                                <span class="blog-card__date__day">20</span>
                                <span class="blog-card__date__month">Oct</span>
                            </div> --}}
                        </div>

                        <div class="blog-card__content">
                            <p class="lead">
                                Every day, hundreds of people across San Bernardino and Riverside Counties rely on dependable, compassionate transportation to access their medical care.
                                For many, it’s not just about getting to an appointment - it’s about being treated with dignity, patience, and understanding along the way.
                                At OnSite Transportation, that’s exactly what we provide. We’re more than a fleet of vehicles - we’re a team committed to making healthcare accessible, safe, and personal for every passenger we serve.
                            </p>

                            <h3 class="mt-5 mb-3 text-primary">A Mission Rooted in Care</h3>
                            <p>
                                Founded on the belief that transportation is part of healthcare, OnSite Transportation bridges the gap between patients and their medical providers.
                                We proudly serve the Inland Empire community with Non-Emergency Medical Transportation (NEMT) that covers:
                            </p>
                            <ul>
                                <li><strong>San Bernardino County:</strong> Including Fontana, Colton, Ontario, Rancho Cucamonga, and surrounding cities.</li>
                                <li><strong>Riverside County:</strong> Including Moreno Valley, Riverside, Corona, Hemet, and Perris.</li>
                            </ul>
                            <p>Our mission is simple: to make sure no patient misses the care they need because of transportation challenges.</p>

                            <h3 class="mt-5 mb-3 text-primary">Supporting Every Type of Passenger</h3>
                            <p>Our services are designed for patients with a variety of mobility and health needs:</p>
                            <ul>
                                <li><strong>Wheelchair Transportation:</strong> ADA-compliant vehicles with secure lifts and straps.</li>
                                <li><strong>Gurney and Stretcher Rides:</strong> Safe, comfortable transfers for lying-down transport or hospital discharges.</li>
                                <li><strong>Ambulatory Assistance:</strong> Gentle support for those who can walk but need extra help.</li>
                            </ul>
                            <p>All drivers are CPR-certified, patient-care trained, and dedicated to ensuring smooth, respectful, and on-time trips.</p>

                            <h3 class="mt-5 mb-3 text-primary">Building Trust with Facilities and Families</h3>
                            <p>
                                We work closely with hospitals, dialysis centers, rehabilitation facilities, skilled nursing and assisted living centers, case managers, and healthcare coordinators.
                                By maintaining open communication and punctual scheduling, we help facilities reduce no-shows and ensure patients arrive safely, prepared, and stress-free.
                                Families trust us because we treat every passenger like our own loved one - with patience, empathy, and professionalism.
                            </p>

                            <h3 class="mt-5 mb-3 text-primary">Our Community Commitment</h3>
                            <p>
                                Serving San Bernardino and Riverside isn’t just our business - it’s our home. We participate in local community efforts, support regional healthcare initiatives, and continuously expand our fleet to meet growing patient needs.
                                Every new route we add represents another person gaining access to care: another family that can rest easier knowing transportation is taken care of.
                            </p>

                            <h3 class="mt-5 mb-3 text-primary">Looking Ahead</h3>
                            <p>
                                As our region grows, so does our responsibility to ensure every resident - regardless of mobility or circumstance - can access quality care.
                                We’re investing in fleet expansion, ongoing staff training, and technology upgrades to improve scheduling, tracking, and safety.
                                Our vision is to create a seamless, trusted transportation network that reflects our slogan - “More Than a Ride - It’s Humanity in Motion.”
                            </p>

                            <div class="alert alert-primary my-5">
                                <h4 class="text-primary">The Takeaway</h4>
                                <p>
                                    Every ride we provide across San Bernardino and Riverside Counties is a promise - a promise to deliver care, consistency, and compassion.
                                    When we help someone get to their appointment safely, we’re not just driving them - we’re helping them live healthier, more independent lives.
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
