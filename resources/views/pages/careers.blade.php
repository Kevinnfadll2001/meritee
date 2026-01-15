    @extends('layouts.index')


    @section('content')

    <style>
        /* Fix banner position under fixed header */
        .inner-banner-offset {
            margin-top: -5px;
        }
.inner-bg1 {
        background-image: url("{{ asset('assets/images/careers/careers.jpg') }}");
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
                <h3>Careers</h3>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Careers</li>
                </ul>
            </div>
        </div>
    </div>

    <br><br>

    <!-- Section Title -->
    <div class="section-title text-center">
        <span class="sp-title">Careers</span>
        <p>Fill out the form below for job opportunities.</p>
    </div>
    <br><br>
    <style>
        /* Force contact cards to be equal height */
        .contact-card-area .row {
            align-items: stretch;
        }

        .contact-card {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }

    </style>
    <!-- Info Cards Area -->
    {{-- <div class="contact-card-area pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="contact-card">
                        <i class="flaticon-phone-call-1"></i>
                        <h3>ADDRESS</h3>
                        <p>Developers Tower, New Jdeideh 12th & 13th floor - Beirut Lebanon</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="contact-card">
                        <i class="flaticon-phone-call-1"></i>
                        <h3>INTERNATIONAL</h3>
                        <p><a href="tel:+15623872011">USA: +1 562 387 2011</a></p>
                        <p><a href="tel:+33184886669">Nice: +33 1 84 88 66 69</a></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="contact-card">
                        <i class="flaticon-email"></i>
                        <h3>LOCAL</h3>
                        <p><a href="tel:+9611903456">Jdeideh: +961 1 903 456</a></p>
                        <p><a href="tel:+9616740423">Batroun: +961 6 740 423</a></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="contact-card">
                        <i class="flaticon-pin"></i>
                        <h3>EMAIL</h3>
                        <p>info@ccintl.cc</p>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}
    <!-- Info Cards Area End -->

    <!-- Careers Application Area -->
    <div class="contact-widget-area pb-70">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left Side Image -->
                <div class="col-lg-6">
                    <div class="contact-map">
                        <img src="{{ asset('assets/images/careers/job applications image.jpg') }}" alt="Careers" style="width:100%;">
                    </div>
                </div>

                <!-- Application Form -->
                <div class="col-lg-6">
                    <div class="contact-widget-form pl-20">
                        <div class="contact-form">
                            <h3>Application Form</h3>

                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif

                            <div class="mb-4">
    <h5>Voice Recording Instructions</h5>
    <p>
        Please download the script below and record a single voice memo
        reading <strong>both sections</strong> (30–45 seconds).
    </p>

    <a href="{{ asset('assets/files/call-center-application-script.pdf') }}"
       class="default-btn"
       download>
        Download Script (PDF)
    </a>
</div>

                            <form action="{{ route('careers.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">

                                    <!-- First / Last Name -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="first_name" class="form-control" placeholder="First Name*" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="last_name" class="form-control" placeholder="Last Name*" required>
                                        </div>
                                    </div>

                                    <!-- Gender / Age -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select name="gender" class="form-control" required>
                                                <option value="">Gender*</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="number" name="age" class="form-control" placeholder="Age*" required>
                                        </div>
                                    </div>

                                    <!-- Email / Phone -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email*" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control" placeholder="Phone Number*" required>
                                        </div>
                                    </div>

                                    <!-- Education / Last School -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="education_level" class="form-control" placeholder="Education Level*" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="last_school" class="form-control" placeholder="Last School Graduated From*" required>
                                        </div>
                                    </div>

                                    <!-- Address -->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="address" class="form-control" placeholder="Address*" required>
                                        </div>
                                    </div>

                                    <!-- Street / City -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="street_address" class="form-control" placeholder="Street Address*" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="city" class="form-control" placeholder="City*" required>
                                        </div>
                                    </div>

                                    <!-- Resume Upload -->
                                    <div class="col-lg-12">
                                        <div class="form-group text-center">
                                            <label class="d-block mb-2"><strong>Upload Your Resume</strong></label>
                                            <input type="file" name="resume" class="form-control" accept=".pdf,.doc,.docx" required>
                                            <small class="text-muted">
                                                PDF, DOC, or DOCX • Max 2MB
                                            </small>
                                        </div>
                                    </div>

                                    <!-- Voice Recording Upload -->
<div class="col-lg-12">
    <div class="form-group text-center">
        <label class="d-block mb-2">
            <strong>Upload Voice Recording *</strong>
        </label>

        <input type="file"
               name="voice_recording"
               class="form-control"
               accept=".mp3,.wav,.m4a"
               required>

        <small class="text-muted">
            MP3, WAV, or M4A • Max 5MB • One recording only
        </small>
    </div>
</div>


                                    <!-- Submit -->
                                    <div class="col-lg-12 text-center">
                                        <button type="submit" class="default-btn">
                                            Submit
                                        </button>
                                    </div>

                                </div>
                            </form>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Careers Application Area End -->




    <!-- Careers Application Area End -->

    @endsection
