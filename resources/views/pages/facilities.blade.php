@extends('layouts.index')

@section('content')

<!-- page-title -->
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(assets/images/background/page-title-4.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">

            <span class="sub-title mb_12" style="display:inline-block; padding:8px 18px; border:2px solid #0b3752; border-radius:30px; font-weight:600; font-size:14px; letter-spacing:1px; text-transform:uppercase; color:#0b3752;">
                Facility Partnerships
            </span>

        </div>
    </div>
</section>


<!-- contact-section -->
<section class="contact-section pt_120 pb_120">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- LEFT COLUMN -->
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="form-inner">

                    <div class="sec-title mb_45">
                        <span class="sub-title mb_12">Facility Partnerships</span>
                        <h2>Partner With Halo</h2>
                    </div>

                    <p>
                        We support hospitals, skilled nursing facilities, rehabilitation centers, assisted living
                        communities, and outpatient clinics with reliable transportation solutions.
                    </p>

                    <h4 class="mt_20">Benefits for Facilities</h4>
                    <ul class="list-style-one clearfix">
                        <li>Faster discharge times</li>
                        <li>Reduced patient no-shows</li>
                        <li>Predictable transportation scheduling</li>
                        <li>Immediate availability for urgent discharges</li>
                        <li>Professional communication with staff</li>
                        <li>Custom billing options</li>
                    </ul>

                </div>
            </div>

            <!-- RIGHT COLUMN — FORM -->
            <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                <div class="form-inner ml_10">

                    <div class="sec-title mb_45">
                        <span class="sub-title mb_12">Partnership Request</span>
                        <h2>Request a Partnership</h2>
                    </div>

                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <style>
                        .field-error {
                            border: 2px solid red !important;
                        }

                        .required-msg {
                            color: red;
                            font-weight: bold;
                            font-size: 14px;
                            display: none;
                            margin-top: 5px;
                        }

                    </style>

                    <form method="POST" action="{{ route('facility.store') }}" id="facility-form" class="default-form">
                        @csrf

                        <div class="row clearfix">

                            <!-- Facility Name -->
                            <div class="col-lg-12 form-group">
                                <input type="text" name="facility_name" id="facility_name" placeholder="Facility Name">
                                <span class="required-msg">This field is required.</span>
                            </div>

                            <!-- Contact Name -->
                            <div class="col-lg-6 form-group">
                                <input type="text" name="contact_name" id="contact_name" placeholder="Contact Name">
                                <span class="required-msg">This field is required.</span>
                            </div>

                            <!-- Phone -->
                            <div class="col-lg-6 form-group">
                                <input type="text" name="phone" id="phone" placeholder="Phone">
                                <span class="required-msg">This field is required.</span>
                            </div>

                            <!-- Email -->
                            <div class="col-lg-12 form-group">
                                <input type="email" name="email" id="email" placeholder="Email">
                                <span class="required-msg">This field is required.</span>
                            </div>

                            <!-- Monthly Volume (optional) -->
                            <div class="col-lg-12 form-group">
                                <input type="text" name="monthly_volume" id="monthly_volume" placeholder="Estimated Monthly Volume($)">
                                <span class="required-msg">This field is required.</span>
                            </div>


                            <!-- Preferred Services -->
                            <div class="col-lg-12 form-group">
                                <select name="preferred_services" id="preferred_services" class="form-control">
                                    <option value="">Select Preferred Service Types</option>
                                    <option>Wheelchair Transport</option>
                                    <option>Ambulatory Transport</option>
                                    <option>Gurney / Stretcher</option>
                                    <option>Hospital Discharge</option>
                                    <option>Interfacility Transfers</option>
                                    <option>Long-Distance Transport</option>
                                </select>
                                <span class="required-msg">This field is required.</span>
                            </div>

                            <!-- Message -->
                            <div class="col-lg-12 form-group">
                                <textarea name="message" placeholder="Message or Additional Details (Optional)"></textarea>
                            </div>

                            <!-- Submit -->
                            <div class="col-lg-12 form-group message-btn">
                                <button type="submit" class="theme-btn btn-one">Submit Partnership Request</button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- JS VALIDATION -->
<script>
document.getElementById("facility-form").addEventListener("submit", function(event) {

    event.preventDefault();

    let formValid = true; // ✅ FIXED — must be defined

    let required = [
        "facility_name",
        "contact_name",
        "phone",
        "email",
        "preferred_services",
        "monthly_volume"
    ];

    required.forEach(id => {
        let field = document.getElementById(id);
        let msg = field.parentElement.querySelector(".required-msg");

        field.classList.remove("field-error");
        msg.style.display = "none";

        // EMPTY FIELD CHECK
        if (!field.value.trim()) {
            field.classList.add("field-error");
            msg.textContent = "This field is required.";
            msg.style.display = "block";
            formValid = false;
            return;
        }

        // NUMBER CHECK FOR MONTHLY VOLUME
        if (id === "monthly_volume" && isNaN(field.value)) {
            field.classList.add("field-error");
            msg.textContent = "Please enter a valid amount.";
            msg.style.display = "block";
            formValid = false;
        }
    });

    if (formValid) this.submit();
});
</script>


@endsection
