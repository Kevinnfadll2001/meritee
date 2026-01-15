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
                More Than a Ride: Stories of Compassion on the Road
            </h3>
        </div>

        <!-- Blog Content -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="blog-details">
                    <div class="blog-card blog-card--three wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <!-- Featured Image -->
                        <div class="blog-card__image mb-4 rounded shadow-sm overflow-hidden position-relative">
                            <img src="{{ asset('assets/images/services/team.jpg') }}" alt="More Than a Ride" class="img-fluid">
                            {{-- <div class="blog-card__date bg-primary text-white rounded">
                                <span class="blog-card__date__day">16</span>
                                <span class="blog-card__date__month">Oct</span>
                            </div> --}}
                        </div>

                        <div class="blog-card__content">
                            <p class="lead">
                                Every day, our drivers don’t just move vehicles — they move lives.
                                At OnSite Transportation, we believe that every ride should feel safe, dignified, and personal.
                                For many of our passengers, transportation isn’t just about getting from point A to point B;
                                it’s about showing up for dialysis, a follow-up appointment, or a loved one waiting at home.
                                It’s about independence, healing, and human connection.
                            </p>

                            <h3 class="mt-5 mb-3 text-primary">The Heart Behind Every Ride</h3>
                            <p>
                                Non-Emergency Medical Transportation (NEMT) fills an essential gap in our healthcare system —
                                ensuring that individuals with mobility challenges, disabilities, or chronic conditions can still access
                                the care they deserve. But behind every van, every route, and every trip, there’s a story — one of compassion,
                                patience, and purpose.
                            </p>
                            <blockquote class="blockquote border-left border-primary ps-3 my-3">
                                One of our drivers, Marcus, recalls helping a dialysis patient who was anxious about her first treatment.
                                <br><em>“She was quiet at first,” he shared, “but by the end of the week, she was greeting me with a smile
                                and telling me about her grandchildren. That’s when you realize — this isn’t just transportation. It’s care.”</em>
                            </blockquote>

                            <div class="bg-light p-4 rounded shadow-sm mt-4">
                                <h3 class="mb-3 text-primary">A Commitment to Dignity and Safety</h3>
                                <p>
                                    Our fleet of wheelchair-accessible vans, gurney units, and ambulatory vehicles are equipped with
                                    state-of-the-art safety features and maintained to the highest standards. But what truly makes OnSite different
                                    is our training in humanity — every driver is not only CPR-certified and safety-trained, but also taught the
                                    value of compassion, patience, and respect. Whether it’s helping a patient into a wheelchair, securing a gurney,
                                    or waiting those few extra minutes for a caregiver, our goal is simple: to make every ride feel comfortable,
                                    calm, and human.
                                </p>
                            </div>

                            <div class="row g-3 my-5">
                                <div class="col-md-6">
                                    <img src="{{ asset('assets/images/services/wheelchair.jpg') }}"
                                         alt="Driver helping patient" class="img-fluid rounded shadow-sm">
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ asset('assets/images/services/Interfacility-old.png') }}"
                                         alt="Wheelchair van" class="img-fluid rounded shadow-sm">
                                </div>
                            </div>

                            <h3 class="mb-3 text-primary">Connecting Communities Across Southern California</h3>
                            <p>
                                From San Bernardino to Riverside to Orange County, we’re proud to be a trusted partner for hospitals,
                                care facilities, and families. Our mission goes beyond logistics — it’s about accessibility, community,
                                and restoring trust in medical transport. Each route represents a promise — to arrive on time, to provide
                                safe passage, and to treat every passenger like family.
                            </p>

                            <div class="alert alert-primary my-5">
                                <h4 class="text-primary">The Journey Ahead</h4>
                                <p>
                                    This blog series, <strong>“More Than a Ride: Stories of Compassion on the Road,”</strong> will highlight the people
                                    and moments that make NEMT meaningful — from our drivers and dispatchers to the patients who inspire us daily.
                                    We invite you to follow along as we share real experiences, practical tips, and behind-the-scenes glimpses
                                    into what it means to deliver care on wheels. Because at the end of the day, transportation isn’t just about
                                    miles — it’s about moments.
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
                                        <p>The information in this article is for general educational purposes only. All staff references are internal examples and do not include personal data. OnSite Transportation complies with HIPAA and ADA standards.</p>
                        </div>
                    </div><!-- /.blog-card -->
                </div><!-- /.blog-details -->
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
@endsection
