@extends('layouts.index')

@section('content')

<style>
    /* Fix banner position under fixed header */
    .inner-banner-offset {
        margin-top: -5px;
    }

    /* Banner background image */
    .inner-bg1 {
        background-image: url("{{ asset('assets/images/services/services.png') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 300px; /* adjust height if needed */
    }
</style>

<!-- Inner Banner -->
<div class="inner-banner inner-bg1 inner-banner-offset">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Services</h3>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Services</li>
            </ul>
        </div>
    </div>
</div>


         <!-- Services Area -->

         <style>
/* ===== Services Tabs Improvements ===== */

.services-tab .tabs {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 12px;
    padding: 0;
    margin: 0 auto;
    list-style: none;
}

/* Tab buttons */
.services-tab .tabs li a {
    display: inline-block;
    padding: 12px 22px;
    background: #f2f2f2;
    color: #222;
    font-weight: 500;
    font-size: 15px;
    border-radius: 6px;
    transition: all 0.3s ease;
    text-align: center;
    min-width: 210px;
}

/* Hover effect */
.services-tab .tabs li a:hover {
    background: #113412;
    color: #fff;
}

/* Active tab (your script already adds .current) */
.services-tab .tabs li.current a {
    background: #113412;
    color: #fff;
    box-shadow: 0 8px 20px rgba(15, 15, 15, 0.3);
}

/* Second row alignment (Technical Support + Telemarketing) */
.services-tab .tabs li:nth-child(6),
.services-tab .tabs li:nth-child(7) {
    margin-top: 8px;
}

/* Mobile responsiveness */
@media (max-width: 768px) {
    .services-tab .tabs li a {
        min-width: 100%;
    }
}
</style>

<div class="services-area-two pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-title">Services</span>
            <h2>Professional Contact Center Solutions</h2>
        </div>

        <div class="tab services-tab pt-45">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="tabs">
                        <li><a href="#">Customer Care</a></li>
                        <li><a href="#">Database Management</a></li>
                        <li><a href="#">Lead Generation</a></li>
                        <li><a href="#">Omni-Channel Contact Center</a></li>
                        <li><a href="#">Surveys & Market Research</a></li>
                        <li><a href="#">Technical Support</a></li>
                        <li><a href="#">Telemarketing</a></li>
                    </ul>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="tab_content current active pt-45">

                        <!-- 1. Customer Care -->
                        <div class="tabs_item current">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="services-tab-img">
                                        <img src="assets/images/services/serv1.jpeg" alt="Images">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="services-tab-content pl-20">
                                        <h2>Customer Care</h2>
                                        <p>
                                            With a focus on quality, Call Center International customer care agents
                                            treat every caller individually, ensuring a personalized, professional,
                                            and effective response that enhances customer satisfaction.
                                        </p>
                                        <ul class="services-tab-list">
                                            <li><i class="flaticon-arrow-pointing-to-right"></i> Personalized customer interaction</li>
                                            <li><i class="flaticon-arrow-pointing-to-right"></i> Quality-driven service delivery</li>
                                            <li><i class="flaticon-arrow-pointing-to-right"></i> Customer satisfaction focused</li>
                                        </ul>
                                        {{-- <a href="{{ url('/services') }}" class="default-btn border-radius-5">Read More</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2. Database Management -->
                        <div class="tabs_item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="services-tab-content pr-20">
                                        <h2>Database Management</h2>
                                        <p>
                                            Turn one-time customers into loyal returning brand ambassadors by keeping
                                            databases accurate, up to date, and actively managed for ongoing engagement.
                                        </p>
                                        <ul class="services-tab-list">
                                            <li><i class="flaticon-arrow-pointing-to-right"></i> CRM database maintenance</li>
                                            <li><i class="flaticon-arrow-pointing-to-right"></i> Customer data organization</li>
                                            <li><i class="flaticon-arrow-pointing-to-right"></i> Long-term relationship building</li>
                                        </ul>
                                        {{-- <a href="{{ url('/services') }}" class="default-btn border-radius-5">Read More</a> --}}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="services-tab-img">
                                        <img src="assets/images/services/serv2.jpeg" alt="Images">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 3. Lead Generation -->
                        <div class="tabs_item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="services-tab-img">
                                        <img src="assets/images/services/serv3.jpeg" alt="Images">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="services-tab-content pl-20">
                                        <h2>Lead Generation</h2>
                                        <p>
                                            Our sales teams identify and qualify potential buyers, creating
                                            opportunities to cross-sell and up-sell products and services while
                                            maximizing conversion rates.
                                        </p>
                                        <ul class="services-tab-list">
                                            <li><i class="flaticon-arrow-pointing-to-right"></i> Qualified lead identification</li>
                                            <li><i class="flaticon-arrow-pointing-to-right"></i> Sales-focused outreach</li>
                                            <li><i class="flaticon-arrow-pointing-to-right"></i> Conversion optimization</li>
                                        </ul>
                                        {{-- <a href="{{ url('/services') }}" class="default-btn border-radius-5">Read More</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 4. Omni-Channel -->
                        <div class="tabs_item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="services-tab-content pr-20">
                                        <h2>Omni-Channel Contact Center</h2>
                                        <p>
                                            Maintaining constant communication across voice, email, chat, and digital
                                            platforms is essential to building strong customer relationships.
                                        </p>
                                        <ul class="services-tab-list">
                                            <li><i class="flaticon-arrow-pointing-to-right"></i> Multi-channel engagement</li>
                                            <li><i class="flaticon-arrow-pointing-to-right"></i> Unified customer experience</li>
                                            <li><i class="flaticon-arrow-pointing-to-right"></i> Real-time communication</li>
                                        </ul>
                                        {{-- <a href="{{ url('/services') }}" class="default-btn border-radius-5">Read More</a> --}}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="services-tab-img">
                                        <img src="assets/images/services/serv4.jpeg" alt="Images">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 5. Surveys & Market Research -->
                        <div class="tabs_item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="services-tab-img">
                                        <img src="assets/images/services/serv5.jpeg" alt="Images">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="services-tab-content pl-20">
                                        <h2>Surveys & Market Research</h2>
                                        <p>
                                            The best way to understand how customers feel about your product or
                                            service is to ask them through structured surveys and research programs.
                                        </p>
                                        <ul class="services-tab-list">
                                            <li><i class="flaticon-arrow-pointing-to-right"></i> Customer feedback collection</li>
                                            <li><i class="flaticon-arrow-pointing-to-right"></i> Market insight analysis</li>
                                            <li><i class="flaticon-arrow-pointing-to-right"></i> Data-driven decisions</li>
                                        </ul>
                                        {{-- <a href="{{ url('/services') }}" class="default-btn border-radius-5">Read More</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 6. Technical Support -->
                        <div class="tabs_item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="services-tab-content pr-20">
                                        <h2>Technical Support</h2>
                                        <p>
                                            Our technical support agents combine analytical, technical, and
                                            communication skills to resolve customer issues efficiently and promptly.
                                        </p>
                                        <ul class="services-tab-list">
                                            <li><i class="flaticon-arrow-pointing-to-right"></i> Issue diagnosis</li>
                                            <li><i class="flaticon-arrow-pointing-to-right"></i> Technical troubleshooting</li>
                                            <li><i class="flaticon-arrow-pointing-to-right"></i> Fast resolution</li>
                                        </ul>
                                        {{-- <a href="{{ url('/services') }}" class="default-btn border-radius-5">Read More</a> --}}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="services-tab-img">
                                        <img src="assets/images/services/serv6.jpeg" alt="Images">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 7. Telemarketing -->
                        <div class="tabs_item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="services-tab-img">
                                        <img src="assets/images/services/serv7.jpeg" alt="Images">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="services-tab-content pl-20">
                                        <h2>Telemarketing</h2>
                                        <p>
                                            Benefit from experienced sales professionals dedicated to selling,
                                            cross-selling, and up-selling your products and services effectively.
                                        </p>
                                        <ul class="services-tab-list">
                                            <li><i class="flaticon-arrow-pointing-to-right"></i> Sales-driven outreach</li>
                                            <li><i class="flaticon-arrow-pointing-to-right"></i> Upselling opportunities</li>
                                            <li><i class="flaticon-arrow-pointing-to-right"></i> Revenue growth support</li>
                                        </ul>
                                        {{-- <a href="{{ url('/services') }}" class="default-btn border-radius-5">Read More</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Area End -->


        <!-- Choose Area Two -->
        <div class="choose-area-two pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center justify-content-center">

            <!-- LEFT CONTENT -->
            <div class="col-lg-6">
                <div class="choose-content-left">
                    <div class="section-title">
                        <span class="sp-title">Why Choose Us</span>

                        <!-- NEW PROFESSIONAL TITLE -->
                        <h2>More Than Outsourcing — A True Extension of Your Brand</h2>

                        <!-- YOUR TEXT (PLACED CLEANLY) -->
                        <p>
                            At Call Center International (CCI), we go beyond outsourced support to
                            become a seamless extension of your brand. With U.S. headquarters and
                            global teams, we combine international reach with strict quality
                            standards, clear communication, and a human-first approach.
                        </p>

                        <p>
                            Our highly trained, fluent agents deliver consistent, professional
                            service, while our scalable solutions adapt quickly to your business
                            needs without compromising performance or customer experience.
                        </p>

                        <p>
                            Supported by secure infrastructure, structured QA systems, and
                            data-driven reporting, CCI is built to handle high-volume operations
                            across customer care, lead generation, dispatch, and back-office
                            support — always with a partnership-focused mindset centered on
                            long-term success.
                        </p>
                    </div>
                </div>
            </div>

            <!-- RIGHT IMAGE (UNCHANGED) -->
            <div class="col-lg-6">
                <div class="choose-img-three">
                    <img src="assets/images/choose-img/choose.jpg" alt="Images">
                    <div class="line">
                        <img src="assets/images/choose-img/choose-line.png" alt="Choose Images">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

        <!-- Choose Area End -->

@endsection
