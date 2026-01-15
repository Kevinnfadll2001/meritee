@extends('layouts.index')

@section('content')
<style>
    /* Fix banner position under fixed header */
    .inner-banner-offset {
        margin-top: -5px;
        /* adjust if your header is taller */
    }

    .inner-bg1 {
        background-image: url("{{ asset('assets/images/contact/contacts.jpg') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 300px;
        /* adjust height if needed */
    }

</style>

<!-- Inner Banner -->
<div class="inner-banner inner-bg1 inner-banner-offset">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Contact Us</h3>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<br><br>
<div class="section-title text-center">
    <span class="sp-title">Contact Us</span>
    {{-- <h2>Professional Contact Center Solutions</h2> --}}
</div>
<!-- Contact Card Area -->
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

<!-- <div class="contact-card-area pt-100 pb-70">
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
                    <h3>EMAIL</h3>
                    <p>info@ccintl.cc</p>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="contact-card">
                    <i class="flaticon-phone-call-1"></i>
                    <h3>LOCAL</h3>
                    <p><a href="tel:+9611903456">Dbaye: +961 1 903 456</a></p>
                    <p><a href="tel:+9616740423">Batroun: +961 6 740 423</a></p>
                </div>
            </div>



        </div>
    </div>
</div> -->

<!-- Contact Card Area End -->

<!-- Contact widget Area -->
<div class="contact-widget-area pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="contact-map">
                    <img src="assets/images/contact/erer.jpeg" alt="Images" class="contact-map-img">
                </div>

            </div>

            <div class="col-lg-6">
                <div class="contact-widget-form pl-20">
                    <div class="contact-form">
                        <h3>Get in touch with us!</h3>

                        {{-- Success Message --}}
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf

                            <div class="row">
                                <!-- Name -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Name*" required>
                                        @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email*" required>
                                        @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" class="form-control" value="{{ old('phone_number') }}" placeholder="Phone Number*" required>
                                        @error('phone_number')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Address -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="address" class="form-control" value="{{ old('address') }}" placeholder="Address*" required>
                                        @error('address')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Message -->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" rows="5" placeholder="Your Message*" required>{{ old('message') }}</textarea>
                                        @error('message')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Terms -->
                                <div class="col-lg-12">
                                    <div class="agree-label">
                                        <input type="checkbox" id="chb1" required>
                                        <label for="chb1">
                                            Accept <a href="#">Terms & Conditions</a> And <a href="#">Privacy Policy</a>
                                        </label>
                                    </div>
                                </div>

                                <!-- Submit -->
                                <div class="col-lg-12">
                                    <button type="submit" class="default-btn">
                                        Send Message
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
<!-- Contact widget Area End -->



@endsection
