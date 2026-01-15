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
                NEMT vs. Ambulance: What’s the Difference and When to Use Each
            </h3>
        </div>

        <!-- Blog Content -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="blog-details">
                    <div class="blog-card blog-card--three wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <!-- Featured Image -->
                        <div class="blog-card__image mb-4 rounded shadow-sm overflow-hidden position-relative">
                            <img src="{{ asset('assets/images/services/NEMTVS1.png') }}" alt="NEMT vs Ambulance" class="img-fluid">
                            {{-- <div class="blog-card__date bg-primary text-white rounded">
                                <span class="blog-card__date__day">16</span>
                                <span class="blog-card__date__month">Oct</span>
                            </div> --}}
                        </div>

                        <!-- Content -->
                        <div class="blog-card__content">
                            <p class="lead">
                                When someone needs transportation to a medical facility, many families wonder:
                                <em>“Should I call an ambulance, or is there another service that fits our needs?”</em>
                                The answer depends on the situation and the level of care required during transport.
                                While ambulances are designed for emergency medical care, Non-Emergency Medical
                                Transportation (NEMT) focuses on providing safe, comfortable, and reliable transportation
                                for individuals who need medical-related travel without the need for emergency response.
                            </p>

                            <p>
                                At OnSite Transportation, we proudly serve our community by bridging that gap —
                                helping patients get to their appointments safely, compassionately, and on time.
                            </p>

                            <h3 class="mt-5 mb-3 text-primary">What Is Non-Emergency Medical Transportation (NEMT)?</h3>
                            <p>
                                Non-Emergency Medical Transportation (NEMT) is designed for passengers who need help getting
                                to and from medical appointments but do not require active medical attention during the ride.
                            </p>

                            <ul>
                                <li>Traveling to dialysis, physical therapy, or follow-up appointments.</li>
                                <li>Needing assistance with wheelchairs, walkers, or gurneys.</li>
                                <li>Requiring trained personnel to help them safely enter, ride in, and exit a vehicle.</li>
                            </ul>

                            <p>
                                NEMT services like OnSite Transportation are staffed by trained, CPR-certified professionals
                                who prioritize safety, dignity, and comfort. Our goal is to ensure every patient arrives securely —
                                not just on time, but with compassion.
                            </p>

                            <h3 class="mt-5 mb-3 text-primary">What Is Ambulance Transportation?</h3>
                            <p>
                                An ambulance provides transportation for emergency or medically critical situations. These
                                vehicles are equipped with paramedics or EMTs who can provide real-time care during transit.
                            </p>

                            <ul>
                                <li>Life-threatening injuries or medical events (like heart attacks, severe bleeding, or trauma).</li>
                                <li>Patients requiring oxygen, IV therapy, or medical monitoring.</li>
                                <li>Unstable medical conditions that need continuous attention during the ride.</li>
                            </ul>

                            <p>
                                Ambulances are dispatched by calling 911 or through hospital coordination, ensuring patients
                                in distress receive immediate medical attention.
                            </p>

                            <h3 class="mt-5 mb-3 text-primary">Key Differences Between NEMT and Ambulance Services</h3>

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Feature</th>
                                            <th>NEMT (Non-Emergency)</th>
                                            <th>Ambulance (Emergency)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Purpose</td>
                                            <td>Transportation for non-urgent medical appointments</td>
                                            <td>Immediate response to emergencies</td>
                                        </tr>
                                        <tr>
                                            <td>Personnel</td>
                                            <td>Trained, CPR-certified drivers</td>
                                            <td>Paramedics / EMTs providing medical care</td>
                                        </tr>
                                        <tr>
                                            <td>Equipment</td>
                                            <td>Wheelchair lifts, gurneys, seatbelts, oxygen (if authorized)</td>
                                            <td>Advanced medical gear and monitoring</td>
                                        </tr>
                                        <tr>
                                            <td>Cost</td>
                                            <td>Lower, may be covered by insurance or Medicaid</td>
                                            <td>Higher, billed as emergency medical service</td>
                                        </tr>
                                        <tr>
                                            <td>Scheduling</td>
                                            <td>Pre-booked or recurring</td>
                                            <td>911 dispatch or hospital-initiated</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h3 class="mt-5 mb-3 text-primary">When to Use Each Service</h3>
                            <h5>When NEMT Is Typically Appropriate</h5>
                            <ul>
                                <li>Regular dialysis, therapy, or specialist visits.</li>
                                <li>Hospital discharges when the patient is stable but mobility is limited.</li>
                                <li>Patients requiring wheelchair or gurney support for safe travel.</li>
                            </ul>

                            <h5>When an Ambulance Is Required</h5>
                            <ul>
                                <li>Chest pain, difficulty breathing, severe bleeding, or loss of consciousness.</li>
                                <li>Sudden medical emergencies requiring advanced medical care.</li>
                            </ul>

                            <div class="alert alert-primary my-5">
                                <h4 class="text-primary">The Takeaway</h4>
                                <p>
                                    Both NEMT and ambulance services play crucial roles in healthcare transportation — each
                                    designed for a different level of need.
                                </p>
                                <ul>
                                    <li>Ambulances provide emergency medical care in critical, life-threatening situations.</li>
                                    <li>NEMT providers like OnSite Transportation ensure ongoing access to care for those
                                        with mobility or transportation barriers.</li>
                                </ul>
                                <p>
                                    At the end of the day, both exist to serve the same mission:
                                    <strong>helping people reach the care they deserve safely and with dignity.</strong>
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
