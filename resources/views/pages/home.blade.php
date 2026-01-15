@extends('layouts.index')

@section('content')


<!-- Banner Area Two -->
<div class="banner-area-two">
    <div class="banner-slider owl-carousel owl-theme">
        <div class="banner-item">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content-two">
                            <h1>Communication Beyond Expectations</h1>
                            <p>At Call Center International, we pride ourselves in being a renowned professional outsourcing services company providing telephone and Internet-based contact center services for a wide variety of industry sectors worldwide. </p>
                            <div class="banner-btn">
                                <a href="{{ url('/about-us') }}" class="default-btn border-radius-5">Get Started</a>
                            </div>
                            {{-- <ul class="social-link">
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank">
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/" target="_blank">
                                                <i class='bx bxl-linkedin' ></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.pinterest.com/" target="_blank">
                                                <i class='bx bxl-pinterest-alt'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/" target="_blank">
                                                <i class='bx bxl-instagram'></i>
                                            </a>
                                        </li>
                                    </ul> --}}
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="banner-img-two">
                            <div class="col-lg-6">
                                <div class="banner-img-two">
                                    <video autoplay muted loop playsinline style="width:200%; height:200%; object-fit:cover;">
                                        <source src="{{ asset('assets/video/video1.mp4') }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-item">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content-two">
                            <h1>Communication Beyond Expectations</h1>
                            <p>At Call Center International, we pride ourselves in being a renowned professional outsourcing services company providing telephone and Internet-based contact center services for a wide variety of industry sectors worldwide. </p>
                            <div class="banner-btn">
                                <a href="{{ url('/about-us') }}" class="default-btn border-radius-5">Get Started</a>
                            </div>
                            {{-- <ul class="social-link">
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank">
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/" target="_blank">
                                                <i class='bx bxl-linkedin' ></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.pinterest.com/" target="_blank">
                                                <i class='bx bxl-pinterest-alt'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/" target="_blank">
                                                <i class='bx bxl-instagram'></i>
                                            </a>
                                        </li>
                                    </ul> --}}
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="banner-img-two">
                            <video autoplay muted loop playsinline style="width: 120%; height:120%; object-fit:cover;">
                                <source src="{{ asset('assets/video/video1.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="banner-item">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content-two">
                            <h1>Communication Beyond Expectations</h1>
                            <p>At Call Center International, we pride ourselves in being a renowned professional outsourcing services company providing telephone and Internet-based contact center services for a wide variety of industry sectors worldwide. </p>
                            <div class="banner-btn">
                                <a href="{{ url('/about-us') }}" class="default-btn border-radius-5">Get Started</a>
                            </div>
                            {{-- <ul class="social-link">
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank">
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/" target="_blank">
                                                <i class='bx bxl-linkedin' ></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.pinterest.com/" target="_blank">
                                                <i class='bx bxl-pinterest-alt'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/" target="_blank">
                                                <i class='bx bxl-instagram'></i>
                                            </a>
                                        </li>
                                    </ul> --}}
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="banner-img-two">
                            <video autoplay muted loop playsinline style="width:120%; height:120%; object-fit:cover;">
                                <source src="{{ asset('assets/video/video1.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area Two End -->

<!-- About Area Two -->
<div class="about-area-two pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="about-img-two">
                    <img src="assets/images/about-img/about.png" alt="About Call Center International">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-content pl-20">
                    <div class="section-title">
                        <span class="sp-title2">About Us</span>
                        <h2>Solving Problems with Clarity, Simplicity & Honesty</h2>
                        <p>
                            Call Center International (CCI) is a professional outsourcing services company delivering
                            telephone and internet-based contact solutions to businesses worldwide. With a strong
                            focus on communication beyond expectations, we help organizations achieve measurable
                            results and lasting customer satisfaction.
                        </p>
                    </div>

                    <ul class="about-list">
                        <li><i class='flaticon-arrow-pointing-to-right'></i> Global contact center solutions</li>
                        <li><i class='flaticon-arrow-pointing-to-right'></i> Reliable, high-speed infrastructure</li>
                        <li><i class='flaticon-arrow-pointing-to-right'></i> Skilled, multilingual agents</li>
                        <li><i class='flaticon-arrow-pointing-to-right'></i> Experienced international management</li>
                    </ul>

                    <div class="row pt-20 justify-content-center">

                        <div class="col-lg-4 col-6 col-md-4">
                            <div class="about-counter">
                                <h3>
                                    <span class="odometer" data-count="1000">1000</span>+
                                </h3>
                                <p>Calls Handled</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-6 col-md-4">
                            <div class="about-counter">
                                <h3>
                                    <span class="odometer" data-count="600">600</span>+
                                </h3>
                                <p>Agents Network</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-6 col-md-4">
                            <div class="about-counter">
                                <h3>
                                    <span class="odometer" data-count="8">8</span>+
                                </h3>
                                <p>Years Experience</p>
                            </div>
                        </div>

                    </div>

                    <div class="about-btn pt-20">
                        <a href="{{ route('about') }}" class="default-btn border-radius-5">
                            Learn More About Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Services Area -->

<style>
    /* Owl Carousel fix: equal height cards */
    .services-slider-two .owl-item {
        display: flex;
    }

    .services-slider-two .services-card {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        min-height: 420px;
        /* 🔴 KEY FIX */
        width: 100%;
    }

    .services-slider-two .services-card h3 {
        min-height: 56px;
    }

    .services-slider-two .services-card p {
        flex-grow: 1;
    }

    .services-slider-two .services-card .read-btn {
        margin-top: auto;
    }

</style>

<div class="services-area-two services-area-bg pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-title2">Services</span>
            <h2>Professional Contact Center Solutions</h2>
        </div>

        <div class="services-slider-two owl-carousel owl-theme pt-45">

            <!-- Customer Care -->
            <div class="services-card">
                <br><br>
                {{-- <div class="service-icon">
                    <i class="flaticon-vector"></i>
                </div> --}}
                <h3><a href="{{ url('/services') }}">Customer Care</a></h3>
                <p>
                    With a focus on quality, CCI customer care agents have the know-how and tools to treat each
                    customer individually to ensure a personalized and appropriate response to their call.
                </p>
                <a href="{{ url('/services') }}" class="read-btn">Read More</a>
                <div class="top">
                    <img src="assets/images/services/services-top.png" alt="">
                    <img src="assets/images/services/services-top2.png" alt="">
                </div>
            </div>

            <!-- Database Management -->
            <div class="services-card">
                <br><br>
                {{-- <div class="service-icon">
                    <i class="flaticon-project-management"></i>
                </div> --}}
                <h3><a href="{{ url('/services') }}">Database Management</a></h3>
                <p>
                    Turn one time customers into loyal returning brand ambassadors by keeping in touch and making
                    them feel appreciated.
                </p>
                <a href="{{ url('/services') }}" class="read-btn">Read More</a>
                <div class="top">
                    <img src="assets/images/services/services-top.png" alt="">
                    <img src="assets/images/services/services-top2.png" alt="">
                </div>
            </div>

            <!-- Lead Generation -->
            <div class="services-card">
                <br><br>
                {{-- <div class="service-icon">
                    <i class="flaticon-digital-marketing"></i>
                </div> --}}
                <h3><a href="{{ url('/services') }}">Lead Generation</a></h3>
                <p>
                    Your database is managed and maintained by our sales team to identify the best potential buyers
                    with opportunities to cross-sell and up-sell your product or service.
                </p>
                <a href="{{ url('/services') }}" class="read-btn">Read More</a>
                <div class="top">
                    <img src="assets/images/services/services-top.png" alt="">
                    <img src="assets/images/services/services-top2.png" alt="">
                </div>
            </div>

            <!-- Omni-Channel -->
            <div class="services-card">
                <br><br>
                {{-- <div class="service-icon">
                    <i class="flaticon-content"></i>
                </div> --}}
                <h3><a href="{{ url('/services') }}">Omni-Channel Contact Center</a></h3>
                <p>
                    Maintaining constant communication across all your channels is essential to developing and
                    growing your relationship with customers whose expectations are rising.
                </p>
                <a href="{{ url('/services') }}" class="read-btn">Read More</a>
                <div class="top">
                    <img src="assets/images/services/services-top.png" alt="">
                    <img src="assets/images/services/services-top2.png" alt="">
                </div>
            </div>

            <!-- Surveys -->
            <div class="services-card">
                <br><br>
                {{-- <div class="service-icon">
                    <i class="flaticon-vector"></i>
                </div> --}}
                <h3><a href="{{ url('/services') }}">Surveys & Market Research</a></h3>
                <p>
                    The best way to know how customers feel about your product or service is to ask them.
                </p>
                <a href="{{ url('/services') }}" class="read-btn">Read More</a>
                <div class="top">
                    <img src="assets/images/services/services-top.png" alt="">
                    <img src="assets/images/services/services-top2.png" alt="">
                </div>
            </div>

            <!-- Technical Support -->
            <div class="services-card">
                <br><br>
                {{-- <div class="service-icon">
                    <i class="flaticon-project-management"></i>
                </div> --}}
                <h3><a href="{{ url('/services') }}">Technical Support</a></h3>
                <p>
                    Our technical support agents combine analytical, technical, and communication skills to
                    resolve customer issues efficiently and promptly.
                </p>
                <a href="{{ url('/services') }}" class="read-btn">Read More</a>
                <div class="top">
                    <img src="assets/images/services/services-top.png" alt="">
                    <img src="assets/images/services/services-top2.png" alt="">
                </div>
            </div>

            <!-- Telemarketing -->
            <div class="services-card">
                <br><br>
                {{-- <div class="service-icon">
                    <i class="flaticon-digital-marketing"></i>
                </div> --}}
                <h3><a href="{{ url('/services') }}">Telemarketing</a></h3>
                <p>
                    Benefit from the expertise of sales professionals dedicated to sell and up-sell your products
                    or services.
                </p>
                <a href="{{ url('/services') }}" class="read-btn">Read More</a>
                <div class="top">
                    <img src="assets/images/services/services-top.png" alt="">
                    <img src="assets/images/services/services-top2.png" alt="">
                </div>
            </div>

        </div>
    </div>
</div>
<br><br>
<!-- Services Area End -->


<!-- Project Area Two -->
{{-- <div class="project-area-two pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-title2">Project</span>
            <h2>Our Recent Project Case</h2>
        </div>

        <div class="row pt-45">
            <div class="col-lg-7">
                <div class="project-slider-two owl-carousel owl-theme" data-slider-id="1">
                    <div class="project-slider-img">
                        <img src="assets/images/projects/project-style1.jpg" alt="Images">
                    </div>

                    <div class="project-slider-img">
                        <img src="assets/images/projects/project-style2.jpg" alt="Images">
                    </div>

                    <div class="project-slider-img">
                        <img src="assets/images/projects/project-style3.jpg" alt="Images">
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="thumbs-wrap">
                    <div class="owl-thumbs project-area-thumb" data-slider-id="1">
                        <div class="owl-thumb-item">
                            <div class="content">
                                <h3>Customer Service</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                            </div>
                        </div>

                        <div class="owl-thumb-item">
                            <div class="content">
                                <h3>Design Service</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                            </div>
                        </div>

                        <div class="owl-thumb-item">
                            <div class="content">
                                <h3>Executive Admin</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Project Area Two End -->

<!-- Pricing Area End -->
{{-- <div class="pricing-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-title2">Pricing Plan</span>
            <h2>Select Pricing Plan To Get More</h2>
        </div>

        <div class="row pt-45 justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <div class="pricing-card">
                    <div class="top">
                        <img src="assets/images/price/shape1.png" alt="Images">
                        <img src="assets/images/price/shape2.png" alt="Images">
                    </div>
                    <div class="price-icon">
                        <img src="assets/images/price/price-icon1.png" alt="Images">
                    </div>
                    <h3>Entrepreneur Plan</h3>
                    <h4>$399 <span>/Weekly</span></h4>
                    <ul>
                        <li><i class='bx bx-check-circle'></i> 12 Hours Per Month</li>
                        <li><i class='bx bx-check-circle'></i> Dedicated Assistant</li>
                        <li><i class='bx bx-check-circle'></i> 1 User Included</li>
                    </ul>

                    <div class="price-btn-area text-center">
                        <a href="pricing.html" class="price-btn">Subscribe Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="pricing-card">
                    <div class="top">
                        <img src="assets/images/price/shape1.png" alt="Images">
                        <img src="assets/images/price/shape2.png" alt="Images">
                    </div>
                    <div class="price-icon">
                        <img src="assets/images/price/price-icon2.png" alt="Images">
                    </div>
                    <h3>Small Business Plan</h3>
                    <h4>$999 <span>/Monthly</span></h4>
                    <ul>
                        <li><i class='bx bx-check-circle'></i> 18 Hours Per Month</li>
                        <li><i class='bx bx-check-circle'></i> Dedicated Assistant</li>
                        <li><i class='bx bx-check-circle'></i> 2 User Included</li>
                    </ul>

                    <div class="price-btn-area text-center">
                        <a href="pricing.html" class="price-btn">Subscribe Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="pricing-card">
                    <div class="top">
                        <img src="assets/images/price/shape1.png" alt="Images">
                        <img src="assets/images/price/shape2.png" alt="Images">
                    </div>
                    <div class="price-icon">
                        <img src="assets/images/price/price-icon3.png" alt="Images">
                    </div>
                    <h3>Team Plan</h3>
                    <h4>$1090 <span>/Yearly </span></h4>
                    <ul>
                        <li><i class='bx bx-check-circle'></i> 24 Hours Per Month</li>
                        <li><i class='bx bx-check-circle'></i> Dedicated Assistant</li>
                        <li><i class='bx bx-check-circle'></i> 4 User Included</li>
                    </ul>

                    <div class="price-btn-area text-center">
                        <a href="pricing.html" class="price-btn">Subscribe Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Pricing Area End -->

<!-- Testimonial Area Two -->
<div class="testimonial-area-two pt-100 pb-70">
    <div class="container">
        <div class="testimonial-slider-two owl-carousel owl-theme">
            <div class="testimonial-item-two">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="testimonial-item-img">
                            <div class="testimonial-item-box">
                                <img src="assets/images/testimonial/testimonials.png" alt="Images">
                            </div>

                            <div class="testimonial-shape">
                                <img src="assets/images/testimonial/sub-img.png" alt="Images">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="testimonial-item-content pl-20">
                            <div class="section-title">
                                <span class="sp-title2">Testimonial</span>
                                <h2>See What other People Thinking About Vconn</h2>
                            </div>
                            <div class="quote">
                                <i class='flaticon-straight-quotes'></i>
                            </div>
                            <p>
                                We decided to outsource our customer service and telephone operator to allow our staff to spend more time on their daily tasks. We were especially impressed by the agents at Call Center International, who demonstrated empathy and attention towards our clients and displayed thorough knowledge of our company through the way they greeted and assisted every caller.

                            </p>
                            <h3>Moris Jacker</h3>
                            <span>Developer</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonial-item-two">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="testimonial-item-img">
                            <div class="testimonial-item-box">
                                <img src="assets/images/testimonial/tes2.jpeg" alt="Images">
                            </div>

                            <div class="testimonial-shape">
                                <img src="assets/images/testimonial/sub-img.png" alt="Images">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="testimonial-item-content pl-20">
                            <div class="section-title">
                                <span class="sp-title2">Testimonial</span>
                                <h2>See What other People Thinking About Vconn</h2>
                            </div>
                            <div class="quote">
                                <i class='flaticon-straight-quotes'></i>
                            </div>
                            <p>
                                As an initiative to support our in-house sales team, we contacted CCI to outsource our sales force. As a result, our current clients’ loyalty has been reinforced thanks to our team having more time to assist them and new customers were gained through the sales agents’ up-selling techniques. We also benefited from valuable insights from the reports that helped improve our sales and marketing plan.

                            </p>
                            <h3>Lithiya Gera</h3>
                            <span>Designer</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonial-item-two">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="testimonial-item-img">
                            <div class="testimonial-item-box">
                                <img src="assets/images/testimonial/tes3.jpeg" alt="Images">
                            </div>

                            <div class="testimonial-shape">
                                <img src="assets/images/testimonial/sub-img.png" alt="Images">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="testimonial-item-content pl-20">
                            <div class="section-title">
                                <span class="sp-title2">Testimonial</span>
                                <h2>See What other People Thinking About Vconn</h2>
                            </div>
                            <div class="quote">
                                <i class='flaticon-straight-quotes'></i>
                            </div>
                            <p>
                                I would highly recommend Call Center International’s Technical Support agents for their professionalism and reliability. We were impressed by their infrastructure and the systems they had at hand. They demonstrated excellent technical skills that align with our service and always met their SLAs which were of great assistance to our in-house technical team who can now focus on developing our service. </p>
                            <h3>Orbindu Jeason</h3>
                            <span>Manager</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item-two">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="testimonial-item-img">
                            <div class="testimonial-item-box">
                                <img src="assets/images/testimonial/tes4.jpeg" alt="Images">
                            </div>

                            <div class="testimonial-shape">
                                <img src="assets/images/testimonial/sub-img.png" alt="Images">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="testimonial-item-content pl-20">
                            <div class="section-title">
                                <span class="sp-title2">Testimonial</span>
                                <h2>See What other People Thinking About Vconn</h2>
                            </div>
                            <div class="quote">
                                <i class='flaticon-straight-quotes'></i>
                            </div>
                            <p>
 We had a new project in the pipeline and wanted to make use of our contact directory to increase our reach. We met with CCI to share our strategy and introduce our products, shortly after which the sales agents were trained on their tasks and delivered as promised. With the detailed reporting and updates to our database, we quickly noticed an increase in our brand awareness and customer’s loyalty.                            <h3>Orbindu Jeason</h3>
                            <span>Manager</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Area Two End -->

<!-- Contact Area -->
{{-- <div class="contact-area">
    <div class="container">
        <div class="contact-form">
            <div class="section-title">
                <span class="sp-title2">Contact Us</span>
                <h2>We Would Love to Hear from Our Clients</h2>
            </div>
            <form id="contactForm">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" required data-error="Please Enter Your Name" placeholder="Name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" required data-error="Please Enter Your Email" placeholder="Email">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="phone_number" id="phone_number" required data-error="Please Enter Your number" class="form-control" placeholder="Phone Number">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please Enter Your Subject" placeholder="Your Subject">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="agree-label">
                            <input type="checkbox" id="chb1">
                            <label for="chb1">
                                Accept <a href="terms-condition.html">Terms & Conditions</a> And <a href="privacy-policy.html">Privacy Policy.</a>
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn">
                            Submit Now
                        </button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> --}}
<!-- Contact Area End -->

<!-- Blog Area -->
{{-- <div class="blog-area blog-area-mt-10 pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-title">News Update</span>
            <h2>Blog News & Update</h2>
        </div>

        <div class="row pt-45">
            <div class="col-lg-6">
                <div class="blog-card">
                    <a href="blog-details.html">
                        <img src="assets/images/blog/blog-img1.jpg" alt="Blog Images">
                    </a>
                    <div class="content">
                        <ul>
                            <li><a href="author.html"> <i class='bx bx-user'></i>By John </a></li>
                            <li><i class='bx bx-calendar'></i> 16 April </li>
                            <li><i class='bx bx-comment-dots'></i> 3 Comments </li>
                        </ul>
                        <h3><a href="blog-details.html">Why You Need Virtual Assistant for Your Company</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <a href="blog-details.html" class="read-btn">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-left-content">
                            <div class="blog-left-img">
                                <a href="blog-details.html">
                                    <img src="assets/images/blog/blog-sub1.jpg" alt="Blog Images">
                                </a>
                            </div>
                            <div class="content">
                                <ul>
                                    <li><a href="author.html"> <i class='bx bx-user'></i>By Willam </a></li>
                                    <li><i class='bx bx-calendar'></i> 17 April </li>
                                    <li><i class='bx bx-comment-dots'></i> 5 Comments </li>
                                </ul>
                                <h3><a href="blog-details.html">10 Things to Outsource To a Virtual Assistant</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                                <a href="blog-details.html" class="read-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="blog-left-content">
                            <div class="blog-left-img">
                                <a href="blog-details.html">
                                    <img src="assets/images/blog/blog-sub2.jpg" alt="Blog Images">
                                </a>
                            </div>
                            <div class="content">
                                <ul>
                                    <li><a href="author.html"> <i class='bx bx-user'></i>By Jeason </a></li>
                                    <li><i class='bx bx-calendar'></i> 18 April </li>
                                    <li><i class='bx bx-comment-dots'></i> 7 Comments </li>
                                </ul>
                                <h3><a href="blog-details.html">5 work flow Automation Tips for Your Team</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                                <a href="blog-details.html" class="read-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="blog-left-content">
                            <div class="blog-left-img">
                                <a href="blog-details.html">
                                    <img src="assets/images/blog/blog-sub3.jpg" alt="Blog Images">
                                </a>
                            </div>
                            <div class="content">
                                <ul>
                                    <li><a href="author.html"> <i class='bx bx-user'></i>By Smith </a></li>
                                    <li><i class='bx bx-calendar'></i> 19 April </li>
                                    <li><i class='bx bx-comment-dots'></i> 1 Comments </li>
                                </ul>
                                <h3><a href="blog-details.html">How To use Virtually Assistant Effectively</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                                <a href="blog-details.html" class="read-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Blog Area End -->
@endsection
