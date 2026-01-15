@extends('layouts.index')

@section('content')

<style>
    .inner-banner {
        position: relative;
        overflow: hidden;
        min-height: 460px;
        display: flex;
        align-items: center;
    }

    .inner-banner video {
        position: absolute;
        top: 50%;
        left: 50%;
        min-width: 100%;
        min-height: 100%;
        transform: translate(-50%, -50%);
        object-fit: cover;
        z-index: 1;
    }

    /* Dark overlay */
    .inner-banner::before {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.55);
        z-index: 2;
    }

    /* Content above video */
    .inner-banner .container {
        position: relative;
        z-index: 3;
    }

    .inner-banner-offset {
        margin-top: -5px;
    }
</style>


<!-- Inner Banner -->
<div class="inner-banner inner-banner-offset">

    <!-- Background Video -->
    <video autoplay muted loop playsinline>
        <source src="{{ asset('assets/video/video2.mp4') }}" type="video/mp4">
    </video>

    <div class="container">
        <div class="inner-title text-center text-white">
            <h3>About Us</h3>
            <ul class="text-white">
                <li><a href="{{ url('/') }}" style="color:#fff;">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</div>



<!-- Inner Banner End -->
<!-- About Area -->

<style>
    .about-one-section {
        padding: 100px 0;
    }

    .about-block {
        margin-bottom: 100px;
    }

    .about-text {
        max-width: 620px;
    }

    .about-text h2 {
        font-size: 36px;
        line-height: 1.3;
        margin-bottom: 20px;
    }

    .about-text h3 {
        margin-top: 35px;
        margin-bottom: 10px;
        font-size: 22px;
        font-weight: 600;
    }

    .about-text p {
        line-height: 1.8;
        margin-bottom: 18px;
        color: #555;
    }

    .about-image img {
        width: 100%;
        max-height: 900px;
        object-fit: cover;
        border-radius: 6px;
    }

    @media (max-width: 991px) {
        .about-block {
            margin-bottom: 60px;
        }
        .about-text {
            max-width: 100%;
        }
    }
</style>
<style>
/* Reduce large gap between blocks */
.about-one-section .about-block {
    margin-bottom: 20px; /* was visually too large */
}

/* Reduce space before section titles like "Our Agents" */
.about-one-section .about-text h3 {
    margin-top: 10px;
}

/* Reduce paragraph bottom spacing slightly */
.about-one-section .about-text p {
    margin-bottom: 4px;
}

/* Specifically tighten the transition after "The Management" */
.about-one-section h3 + p {
    margin-bottom: 8px;
}
</style>



<section class="about-one-section">
    <div class="container">

        <!-- BLOCK 1 : IMAGE LEFT / TEXT RIGHT -->
        <div class="row align-items-center about-block">

            <div class="col-lg-6">
                <div class="about-img">
                    <img src="assets/images/about-img/agent_750x920.jpg" alt="About Images">
                    <div class="line">
                        <img src="assets/images/about-img/about-line.png" alt="About Images">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="section-title">
                    <span class="sp-title2">About Us</span>
                    <h2>
                        Solving problems with clarity, simplicity & honesty.<br>
                        Communication Beyond Expectations
                    </h2>

                    <p>
                        At Call Center International, we pride ourselves in being a renowned professional outsourcing
                        services company providing telephone and Internet-based contact services for a wide variety
                        of industry sectors worldwide. Through our strategic partner companies, we operate a fully
                        redundant, high-speed telephone and global data network, and provide wide area wireless access
                        to Internet and private networks. In doing so, we have expanded our resources and know-how to
                        support communications and technical services globally to give you reliable and result-driven
                        solutions that ensure customer satisfaction and meet your business goals.
                    </p>

                    <h3>Our Infrastructure</h3>

                    <p>
                        Combining years of experience and strong knowledge of the field, Call Center International has
                        the resources to accommodate each client’s business needs on a global scale. Our success has
                        been proven to be the result of the development of our technological infrastructure and the
                        skills demonstrated by our agents to successfully deliver beyond expectations. In order to
                        develop the high-end infrastructure that has permitted to handle over 10 billion calls on the
                        network by 60,000 agents, CCI, with the help of its partners, have developed systems that are
                        integrated to each project and task at hand, allowing for a smooth and monitored running of
                        our operation. A high-speed Wide Area Network (WAN) interconnects CCI operational facilities
                        from our Head office in California to our contact centers in the Middle-East, allowing for
                        optimized technical resources regardless of physical distances while minimizing costs by using
                        “Class of Service” strategies to heighten bandwidth used for Voice Over Internet Protocol (VOIP).
                    </p>

                    <h3>The Management</h3>
<p>
    CCI management brings together decades of expertise in telecom operations, network architecture,
    training design and delivery, project management, operational oversight, as well as operating
    call centers globally.
</p>
                </div>
            </div>

        </div>

        <!-- BLOCK 2 : TEXT LEFT / IMAGE RIGHT -->
        <div class="row align-items-center about-block">

            <div class="col-lg-6">
                <div class="about-text">

                    <h3>Our Agents</h3>
                    <p>
                        Our team has played a major role in CCI’s development in the past years and have made Call Center
                        International the reputable company it is today. To achieve this, we invest in our agents’
                        communication and technical skills by adopting a learning culture within our organization with
                        the use of a state-of-the-art Learning Management System (LMS), allowing every agent to access
                        daily courses specifically created to support your organization’s goals, enhance their
                        communication abilities and further develop their technical skills. The system is designed to
                        track their progress to ensure that each agent is up to date with their learning schedule,
                        giving them a self-paced e-learning platform that is only a click away and creating measurable
                        results. In addition to their communication and technical skills, CCI agents can provide
                        assistance to callers from different countries and regions thanks to their ability to
                        communicate in several languages, putting your customer at ease at every interaction.
                    </p>

                    {{-- <h3>The Management</h3>
                    <p>
                        CCI management brings together decades of expertise in telecom operations, network architecture,
                        training design and delivery, project management, operational oversight, as well as operating
                        call centers globally.
                    </p> --}}

                    <h3>Our Contact Centers</h3>
                    <p>
                        Call Center International launched from Irvine, California where it has developed the depth of
                        resources, project management experience and technical prowess to successfully deliver high-end
                        results to today’s customer focused businesses. That expertise was brought to the Middle-East
                        with the opening of our first contact center in Batroun, Lebanon. Accommodating 75 agents in a
                        state-of-the-art facility, the first phase of our growth plan has proven to be successful and
                        is now being expanding to meet increasing demands for professional customer service in the area.
                        CCI expanded and now occupies two full floors in the prestigious Developers Tower / Beirut
                        Entrance, New Jdeideh Sector, adding huge accessibility to vast human resources.
                    </p>

                    <p>
                        CCI has been awarded one of only five licenses issued by the Lebanese government to operate
                        contact centers in their country. Along with this license comes the full support and
                        encouragement of the Lebanese government to help ensure a successful operation. Our plan is to
                        continue to create, staff, and operate five contact centers in Lebanon linked to USA.
                    </p>

                    <p>
                        The second phase of our expansion plan in the country has begun with a new contact center in
                        Beirut, designed to support up to 300 agents and high-end systems. Our next phase is also
                        starting to take shape as a third contact center will soon be operational in Tripoli, Lebanon
                        adding up to 500 agent seats to our team.
                    </p>

                </div>
            </div>

           <div class="col-lg-6">
                <div class="about-img">
                    <img src="assets/images/about-img/about2.jpg" alt="About Images">
                    <div class="line">
                        <img src="assets/images/about-img/about-line.png" alt="About Images">
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- About Area End -->


{{-- <!-- Services Area -->

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
                <div class="service-icon">
                    <i class="flaticon-vector"></i>
                </div>
                <h3><a href="#">Customer Care</a></h3>
                <p>
                    With a focus on quality, CCI customer care agents have the know-how and tools to treat each
                    customer individually to ensure a personalized and appropriate response to their call.
                </p>
                <a href="#" class="read-btn">Read More</a>
                <div class="top">
                    <img src="assets/images/services/services-top.png" alt="">
                    <img src="assets/images/services/services-top2.png" alt="">
                </div>
            </div>

            <!-- Database Management -->
            <div class="services-card">
                <div class="service-icon">
                    <i class="flaticon-project-management"></i>
                </div>
                <h3><a href="#">Database Management</a></h3>
                <p>
                    Turn one time customers into loyal returning brand ambassadors by keeping in touch and making
                    them feel appreciated.
                </p>
                <a href="#" class="read-btn">Read More</a>
                <div class="top">
                    <img src="assets/images/services/services-top.png" alt="">
                    <img src="assets/images/services/services-top2.png" alt="">
                </div>
            </div>

            <!-- Lead Generation -->
            <div class="services-card">
                <div class="service-icon">
                    <i class="flaticon-digital-marketing"></i>
                </div>
                <h3><a href="#">Lead Generation</a></h3>
                <p>
                    Your database is managed and maintained by our sales team to identify the best potential buyers
                    with opportunities to cross-sell and up-sell your product or service.
                </p>
                <a href="#" class="read-btn">Read More</a>
                <div class="top">
                    <img src="assets/images/services/services-top.png" alt="">
                    <img src="assets/images/services/services-top2.png" alt="">
                </div>
            </div>

            <!-- Omni-Channel -->
            <div class="services-card">
                <div class="service-icon">
                    <i class="flaticon-content"></i>
                </div>
                <h3><a href="#">Omni-Channel Contact Center</a></h3>
                <p>
                    Maintaining constant communication across all your channels is essential to developing and
                    growing your relationship with customers whose expectations are rising.
                </p>
                <a href="#" class="read-btn">Read More</a>
                <div class="top">
                    <img src="assets/images/services/services-top.png" alt="">
                    <img src="assets/images/services/services-top2.png" alt="">
                </div>
            </div>

            <!-- Surveys -->
            <div class="services-card">
                <div class="service-icon">
                    <i class="flaticon-vector"></i>
                </div>
                <h3><a href="#">Surveys & Market Research</a></h3>
                <p>
                    The best way to know how customers feel about your product or service is to ask them.
                </p>
                <a href="#" class="read-btn">Read More</a>
                <div class="top">
                    <img src="assets/images/services/services-top.png" alt="">
                    <img src="assets/images/services/services-top2.png" alt="">
                </div>
            </div>

            <!-- Technical Support -->
            <div class="services-card">
                <div class="service-icon">
                    <i class="flaticon-project-management"></i>
                </div>
                <h3><a href="#">Technical Support</a></h3>
                <p>
                    Our technical support agents combine analytical, technical, and communication skills to
                    resolve customer issues efficiently and promptly.
                </p>
                <a href="#" class="read-btn">Read More</a>
                <div class="top">
                    <img src="assets/images/services/services-top.png" alt="">
                    <img src="assets/images/services/services-top2.png" alt="">
                </div>
            </div>

            <!-- Telemarketing -->
            <div class="services-card">
                <div class="service-icon">
                    <i class="flaticon-digital-marketing"></i>
                </div>
                <h3><a href="#">Telemarketing</a></h3>
                <p>
                    Benefit from the expertise of sales professionals dedicated to sell and up-sell your products
                    or services.
                </p>
                <a href="#" class="read-btn">Read More</a>
                <div class="top">
                    <img src="assets/images/services/services-top.png" alt="">
                    <img src="assets/images/services/services-top2.png" alt="">
                </div>
            </div>

        </div>
    </div>
</div>
<br><br> --}}
<!-- Services Area End -->

<!-- Project Area -->
<!-- <div class="project-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-title">Project</span>
                    <h2>Our Recent Project Case</h2>
                </div>

                <div class="project-slider owl-carousel owl-theme pt-45">
                    <div class="project-item">
                        <a href="project-details.html">
                            <img src="assets/images/projects/project-img1.jpg" alt="Project Images">
                        </a>
                        <div class="content">
                            <h3><a href="project-details.html">Project Management</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                        </div>
                    </div>

                    <div class="project-item">
                        <a href="project-details.html">
                            <img src="assets/images/projects/project-img2.jpg" alt="Project Images">
                        </a>
                        <div class="content">
                            <h3><a href="project-details.html">Media Marketing</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                        </div>
                    </div>

                    <div class="project-item">
                        <a href="project-details.html">
                            <img src="assets/images/projects/project-img3.jpg" alt="Project Images">
                        </a>
                        <div class="content">
                            <h3><a href="project-details.html">Book Keeping</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                        </div>
                    </div>

                    <div class="project-item">
                        <a href="project-details.html">
                            <img src="assets/images/projects/project-img4.jpg" alt="Project Images">
                        </a>
                        <div class="content">
                            <h3><a href="project-details.html">Technology Service</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                        </div>
                    </div>

                    <div class="project-item">
                        <a href="project-details.html">
                            <img src="assets/images/projects/project-img5.jpg" alt="Project Images">
                        </a>
                        <div class="content">
                            <h3><a href="project-details.html">Data Entry </a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
<!-- Project Area End -->

@endsection
