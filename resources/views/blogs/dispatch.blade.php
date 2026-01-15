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
                Dispatch: The Heart of Non-Emergency Medical Transportation
            </h3>
        </div>

        <!-- Blog Content -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="blog-details">
                    <div class="blog-card blog-card--three wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <!-- Featured Image -->
                        <div class="blog-card__image mb-4 rounded shadow-sm overflow-hidden position-relative">
                            {{-- <img src="{{ asset('assets/images/services/Dispatch.jpg') }}" alt="Dispatch Team" class="img-fluid">
                            <div class="blog-card__date bg-primary text-white rounded">
                                <span class="blog-card__date__day">22</span>
                                <span class="blog-card__date__month">Oct</span>
                            </div> --}}
                        </div>

                        <div class="blog-card__content">
                            <p class="lead">
                                When most people think of Non-Emergency Medical Transportation (NEMT), they picture the drivers, vehicles, and passengers. But behind every smooth ride — every on-time pickup and safe drop-off — there’s a dedicated team keeping everything in motion: our dispatch team.
                            </p>

                            <p>
                                At OnSite Transportation, our dispatchers are the true heartbeat of the operation. They’re the calm voices on the radio, the steady problem-solvers during busy mornings, and the ones ensuring that every ride runs with precision and care.
                            </p>

                            <h3 class="mt-5 mb-3 text-primary">The Role of Dispatch: More Than Just Scheduling</h3>
                            <p>
                                Dispatching isn’t just about assigning rides — it’s about coordination, communication, and compassion. Every day, our dispatchers:
                            </p>
                            <ul>
                                <li>Monitor routes across San Bernardino, Riverside, and surrounding counties.</li>
                                <li>Coordinate with drivers to ensure on-time service.</li>
                                <li>Communicate with facilities, case managers, and families to confirm schedules.</li>
                                <li>Handle sudden changes — from hospital discharges to weather delays — all with professionalism and poise.</li>
                            </ul>
                            <blockquote class="blockquote border-left border-primary ps-3 my-3">
                                “Our job is to make sure every patient gets where they need to go — safely and stress-free. It’s about connection and care, not just coordination.”<br>
                                – OnSite Dispatcher, Maria G.
                            </blockquote>

                            <h3 class="mt-5 mb-3 text-primary">The Heartbeat of Compassion and Communication</h3>
                            <p>
                                Our dispatch team understands that every trip represents a person — not just a name on a schedule. Communication at OnSite is grounded in empathy. They confirm pickups for dialysis patients, coordinate same-day discharges, and always lead with patience and respect.
                            </p>
                            <p>
                                They’re trained in sensitivity, confidentiality, and HIPAA-compliant communication, ensuring every call and update protects passenger privacy.
                            </p>

                            <h3 class="mt-5 mb-3 text-primary">24/7 Coordination You Can Count On</h3>
                            <p>
                                From early-morning dialysis runs to evening drop-offs, our dispatch team keeps operations running smoothly around the clock. Using advanced routing and GPS technology, they monitor trips in real time, reducing delays and optimizing driver safety. But it’s their human touch that keeps everything connected.
                            </p>

                            <h3 class="mt-5 mb-3 text-primary">Teamwork That Moves People</h3>
                            <p>
                                The collaboration between dispatchers and drivers is what makes our system strong. Communication and trust keep every trip seamless. At OnSite, we foster this relationship through daily check-ins, shared updates, and ongoing training.
                            </p>
                            <blockquote class="blockquote border-left border-primary ps-3 my-3">
                                “When dispatch and drivers work in sync, patients feel it — everything flows.”<br>
                                – Operations Supervisor, OnSite Transportation
                            </blockquote>

                            <h3 class="mt-5 mb-3 text-primary">The Unsung Heroes of Every Successful Trip</h3>
                            <p>
                                While drivers are the face of our service, dispatchers are the voice — ensuring that “humanity in motion” stays true in every call and every route. Their compassion fuels consistency, their organization fuels efficiency, and their dedication ensures every patient arrives safely, on time, and with dignity.
                            </p>

                            <div class="alert alert-primary my-5">
                                <h4 class="text-primary">The Takeaway</h4>
                                <p>
                                    At OnSite Transportation, our dispatch team doesn’t just schedule rides — they orchestrate care. They are the link between families, facilities, and drivers, turning complex logistics into moments of connection. Because at the heart of every safe, on-time ride… is a dispatcher making it all happen.
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
