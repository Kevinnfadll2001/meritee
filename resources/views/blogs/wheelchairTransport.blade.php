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
                Wheelchair-Accessible Transportation: What to Expect from
                Your Ride
            </h3>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="blog-details">
                    <div class="blog-card blog-card--three wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <!-- Featured Image -->
                        <div class="blog-card__image mb-4 rounded shadow-sm overflow-hidden position-relative">
                            <img src="{{ asset('assets/images/services/wheel2.png') }}" alt="Wheelchair Accessible Transportation" class="img-fluid">
                            {{-- <div class="blog-card__date bg-primary text-white rounded">
                                <span class="blog-card__date__day">20</span>
                                <span class="blog-card__date__month">Nov</span>
                            </div> --}}
                        </div>

                        <div class="blog-card__content">

                            <p class="lead">
                                Our wheelchair-accessible transportation is built on safety, comfort, and reliability.
                                Every vehicle, feature, and driver is chosen with care to ensure passengers travel securely
                                and with complete peace of mind.
                            </p>

                            <!-- Wheelchair Van Features -->
                            <h3 class="mt-5 mb-3 text-primary">Inside Our Wheelchair Van Fleet</h3>

                            <p>Each wheelchair van in our lineup is hand-selected and professionally maintained to guarantee a
                                smooth ride.
                                Here’s what you can expect when you step aboard:</p>

                            <ul>
                                <li>Hydraulic or electric lifts with 800+ lb. capacity for safe boarding.</li>
                                <li>Four-point securement systems that keep wheelchairs stable through every turn.</li>
                                <li>Climate-controlled cabins for comfort during Southern California’s varied weather.</li>
                                <li>Clean, sanitized interiors inspected before and after every trip.</li>
                                <li>Spacious configurations to accommodate manual and power chairs alike.</li>
                            </ul>

                            <p>
                                These features allow patients, families, and facilities to ride with peace of mind, knowing every
                                detail of accessibility has been planned for.
                            </p>

                            <!-- ADA Compliance -->
                            <h3 class="mt-5 mb-3 text-primary">ADA-Compliant Transportation You Can Trust</h3>

                            <p>
                                We take ADA compliance seriously. Our practices align with Title III of the Americans with
                                Disabilities Act, ensuring both vehicles and drivers meet all accessibility requirements.
                            </p>

                            <p>Every driver receives hands-on training in:</p>

                            <ul>
                                <li>Proper wheelchair handling and securement techniques</li>
                                <li>Passenger-assistance protocols (door-through-door and hand-to-hand care)</li>
                                <li>Safety procedures during boarding, transit, and unloading</li>
                                <li>Respectful communication and sensitivity training</li>
                            </ul>

                            <p>
                                Compliance isn’t just paperwork — it’s about giving every passenger equal access to safe,
                                dependable transportation.
                            </p>

                            <!-- Drivers -->
                            <h3 class="mt-5 mb-3 text-primary">Our Drivers: Trained, Trusted, and Compassionate</h3>

                            <p>
                                Beyond technical expertise, our drivers are selected for professionalism and empathy.
                                They understand the challenges many passengers face — whether recovering from surgery,
                                managing mobility limitations, or attending recurring medical visits.
                            </p>

                            <p>
                                Facilities throughout Riverside, San Bernardino, Orange, and LA Counties trust our team
                                for recurring rides, same-day discharges, and after-hours transports.
                            </p>

                            <!-- Comfort -->
                            <h3 class="mt-5 mb-3 text-primary">Your Ride, Your Comfort</h3>

                            <p>Passengers can expect:</p>

                            <ul>
                                <li>Door-to-door assistance</li>
                                <li>Smooth scheduling through our dispatch center</li>
                                <li>Timely pick-ups for dialysis, physical therapy, or follow-up care</li>
                                <li>Continuous communication before, during, and after each ride</li>
                            </ul>

                            <p>
                                Every trip is tailored to your needs so you can focus on your health — not transportation logistics.
                            </p>

                            <!-- Why Choose -->
                            <h3 class="mt-5 mb-3 text-primary">Why Facilities and Families Choose OnSite Transportation</h3>

                            <ul>
                                <li>Fully ADA-compliant wheelchair NEMT fleet</li>
                                <li>Professionally trained and background-checked drivers</li>
                                <li>Multi-county coverage: Orange • Riverside • San Bernardino • Los Angeles</li>
                                <li>Advanced scheduling and real-time dispatch tracking</li>
                                <li>HIPAA-aware, patient-centered service</li>
                            </ul>

                            <p>
                                Our partnerships with hospitals, dialysis centers, and rehabilitation facilities reflect
                                a shared commitment to dependable, compassionate mobility.
                            </p>

                            <!-- Booking -->
                            <h3 class="mt-5 mb-3 text-primary">Book Your Wheelchair Ride Today</h3>

                            <p>
                                Need reliable wheelchair-accessible transportation for yourself or a loved one?
                                Contact OnSite Transportation or request a ride online to experience the difference
                                that care, compliance, and comfort make on every journey.
                            </p>

                            <!-- CTA Box -->
                            <div class="mb-5 p-4 bg-secondary text-white rounded text-center shadow-sm">
                                <strong>OnSite Transportation</strong><br>
                                More Than a Ride - It’s Humanity in Motion<br>
                                Serving Los Angeles, San Bernardino, Riverside, Orange, and San Diego Counties<br>
                                <strong>Call Us:</strong> (844) 566-7483<br>
                                <strong>Visit Us:</strong>
                                <a href="https://onsitedrive.com" target="_blank" class="text-white text-decoration-underline">
                                    onsitedrive.com
                                </a>
                            </div>

                            <!-- Disclaimer -->
                            <h4>Disclaimer</h4>
                            <p>
                                The information in this article is for general informational purposes only.
                                OnSite Transportation complies with HIPAA and ADA standards.
                                No personal passenger information is shared.
                            </p>

                        </div>
                    </div><!-- /.blog-card -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
