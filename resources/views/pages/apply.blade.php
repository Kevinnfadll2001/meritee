@extends('layouts.index')

@section('content')
<style>
    /* Color palette */
    :root {
        --primary-blue: #00578d;
        --highlight-gold: #8a9900;
    }

    .primary-bg {
        background-color: var(--primary-blue);
        color: #fff;
    }

    .highlight {
        color: var(--highlight-gold);
    }

    .section-title {
        border-bottom: 2px solid var(--highlight-gold);
        padding-bottom: 5px;
        margin-bottom: 20px;
        font-weight: bold;
        font-size: 1.3rem;
    }

    .form-section {
        background: #f8f9fa;
        padding: 25px;
        border-radius: 10px;
        margin-bottom: 30px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .form-control:focus {
        border-color: var(--primary-blue);
        box-shadow: 0 0 0 0.2rem rgba(0, 87, 141, 0.25);
    }

    .btn-primary {
        background-color: var(--highlight-gold);
        border-color: var(--highlight-gold);
        color: #fff;
    }

    .btn-primary:hover {
        background-color: var(--primary-blue);
        border-color: var(--primary-blue);
        color: #fff;
    }

    label.form-label {
        font-weight: 500;
    }

</style>

<div class="container my-5">
    <div class="text-center">
        <h1 class="highlight">Employment Application</h1>
        <p class="lead text-muted">Please fill out the form below to apply for a position with us.</p>
    </div>

    <form action="{{ route('careers.submit') }}" method="POST" enctype="multipart/form-data" class="mt-4">
        @csrf

        {{-- Applicant Information --}}
        <div class="form-section">
            <h4 class="section-title">Applicant Information</h4>
            <div class="row g-3">
                <div class="col-md-4">
                    <label for="first_name" class="form-label">First Name *</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" required>
                </div>
                <div class="col-md-2">
                    <label for="middle_initial" class="form-label">Middle Initial</label>
                    <input type="text" name="middle_initial" id="middle_initial" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="last_name" class="form-label">Last Name *</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email *</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="phone" class="form-label">Phone *</label>
                    <input type="tel" name="phone" id="phone" class="form-control" required>
                </div>
                <div class="col-12">
                    <label for="street_address" class="form-label">Street Address</label>
                    <input type="text" name="street_address" id="street_address" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="city" class="form-label">City</label>
                    <input type="text" name="city" id="city" class="form-control" required>
                </div>
                <div class="col-md-4">
                    <label for="state" class="form-label">State</label>
                    <input type="text" name="state" id="state" class="form-control" required>
                </div>
                <div class="col-md-2">
                    <label for="zip_code" class="form-label">Zip Code</label>
                    <input type="text" name="zip_code" id="zip_code" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="position_applied_for" class="form-label">Position Applied For</label>
                    <input type="text" name="position_applied_for" id="position_applied_for" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="desired_salary" class="form-label">Desired Salary($)</label>
                    <input type="number" name="desired_salary" id="desired_salary" class="form-control" step="0.01" required>
                </div>
                <div class="col-md-6">
                    <label for="date_available" class="form-label">Date Available</label>
                    <input type="date" name="date_available" id="date_available" class="form-control" min="{{ date('Y-m-d') }}" required>
                </div>
                <script>
                    const today = new Date().toISOString().split('T')[0];
                    document.getElementById('date_available').setAttribute('min', today);

                </script>

                <div class="col-md-6">
                    <label for="social_security_number" class="form-label">Social Security Number</label>
                    <input type="text" name="social_security_number" id="social_security_number" class="form-control" required>
                </div>
            </div>
            <div class="row mt-3">
                <!-- US Citizen Question -->
                <div class="col-md-6">
                    <label class="form-label d-block">Are you a US Citizen? *</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="is_us_citizen" id="citizen_yes" value="yes" required>
                        <label class="form-check-label" for="citizen_yes">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="is_us_citizen" id="citizen_no" value="no" required>
                        <label class="form-check-label" for="citizen_no">No</label>
                    </div>
                </div>

                <!-- Authorized to Work Question (hidden by default) -->
                <div class="col-md-6 mt-2" id="authorized_work_section" style="display: none;">
                    <label class="form-label d-block">Are you authorized to work? *</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="is_authorized_to_work" id="auth_yes" value="yes">
                        <label class="form-check-label" for="auth_yes">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="is_authorized_to_work" id="auth_no" value="no">
                        <label class="form-check-label" for="auth_no">No</label>
                    </div>
                </div>

                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        const citizenYes = document.getElementById("citizen_yes");
                        const citizenNo = document.getElementById("citizen_no");
                        const authorizedSection = document.getElementById("authorized_work_section");
                        const authRadios = authorizedSection.querySelectorAll('input[name="is_authorized_to_work"]');

                        function toggleAuthorizedSection() {
                            if (citizenNo.checked) {
                                authorizedSection.style.display = "block";
                                authRadios.forEach(radio => radio.required = true);
                            } else {
                                authorizedSection.style.display = "none";
                                authRadios.forEach(radio => {
                                    radio.required = false;
                                    radio.checked = false;
                                });
                            }
                        }

                        citizenYes.addEventListener("change", toggleAuthorizedSection);
                        citizenNo.addEventListener("change", toggleAuthorizedSection);

                        toggleAuthorizedSection();
                    });

                </script>

                <div class="row mt-3">
                    <!-- Worked for Company -->
                    <div class="col-md-6">
                        <div class="d-flex align-items-center gap-3">
                            <label class="form-label mb-0">
                                Have you ever worked for this company? *
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="worked_for_company" id="worked_for_company_yes" value="yes" required>
                                <label class="form-check-label" for="worked_for_company_yes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="worked_for_company" id="worked_for_company_no" value="no" required>
                                <label class="form-check-label" for="worked_for_company_no">No</label>
                            </div>
                            <input type="text" name="worked_for_company_when" placeholder="when?" class="form-control" style="max-width: 180px; display:none;" id="worked_for_company_when">
                        </div>
                    </div>

                    <!-- Felony Conviction -->
                    <div class="col-md-6">
                        <div class="d-flex align-items-center gap-3">
                            <label class="form-label mb-0">
                                Have you ever been convicted of a felony? *
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="felony_conviction" id="felony_yes" value="yes" required>
                                <label class="form-check-label" for="felony_yes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="felony_conviction" id="felony_no" value="no" required>
                                <label class="form-check-label" for="felony_no">No</label>
                            </div>
                            <textarea name="felony_explanation" placeholder="explain" class="form-control" style="max-width: 200px; height: 38px; display:none;" id="felony_explanation"></textarea>
                        </div>
                    </div>
                </div>

                <script>
                    // Worked for company logic
                    const workedYes = document.getElementById('worked_for_company_yes');
                    const workedNo = document.getElementById('worked_for_company_no');
                    const workedInput = document.getElementById('worked_for_company_when');

                    function toggleWorkedInput() {
                        if (workedYes.checked) {
                            workedInput.style.display = 'block';
                            workedInput.required = true;
                        } else {
                            workedInput.style.display = 'none';
                            workedInput.required = false;
                            workedInput.value = '';
                        }
                    }

                    workedYes.addEventListener('change', toggleWorkedInput);
                    workedNo.addEventListener('change', toggleWorkedInput);

                    // Felony conviction logic
                    const felonyYes = document.getElementById('felony_yes');
                    const felonyNo = document.getElementById('felony_no');
                    const felonyTextarea = document.getElementById('felony_explanation');

                    function toggleFelonyExplanation() {
                        if (felonyYes.checked) {
                            felonyTextarea.style.display = 'block';
                            felonyTextarea.required = true;
                        } else {
                            felonyTextarea.style.display = 'none';
                            felonyTextarea.required = false;
                            felonyTextarea.value = '';
                        }
                    }

                    felonyYes.addEventListener('change', toggleFelonyExplanation);
                    felonyNo.addEventListener('change', toggleFelonyExplanation);

                </script>
            </div>

        </div>
        {{-- Education --}}
        <div class="form-section">
            <h4 class="section-title">Education</h4>

            {{-- High School --}}
            <div class="mb-4">
                <h5 class="text-muted">High School</h5>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="high_school" class="form-label">High School Name</label>
                        <input type="text" name="high_school" id="high_school" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="high_school_address" class="form-label">Address</label>
                        <input type="text" name="high_school_address" id="high_school_address" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="hs_from" class="form-label">From</label>
                        <input type="date" name="hs_from" id="hs_from" class="form-control" required>
                    </div>
                    <div class="col-md-3">
                        <label for="hs_to" class="form-label">To</label>
                        <input type="date" name="hs_to" id="hs_to" class="form-control" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label d-block">Graduated?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="hs_graduated" id="hs_graduated_yes" value="yes">
                            <label class="form-check-label" for="hs_graduated_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="hs_graduated" id="hs_graduated_no" value="no">
                            <label class="form-check-label" for="hs_graduated_no">No</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="hs_diploma" class="form-label">Diploma</label>
                        <input type="text" name="hs_diploma" id="hs_diploma" class="form-control">
                    </div>
                </div>
            </div>

            {{-- College --}}
            <div class="mb-4">
                <h5 class="text-muted">College</h5>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="college" class="form-label">College Name</label>
                        <input type="text" name="college" id="college" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="college_address" class="form-label">Address</label>
                        <input type="text" name="college_address" id="college_address" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="college_from" class="form-label">From</label>
                        <input type="date" name="college_from" id="college_from" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="college_to" class="form-label">To</label>
                        <input type="date" name="college_to" id="college_to" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label d-block">Graduated?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="college_graduated" id="college_graduated_yes" value="yes">
                            <label class="form-check-label" for="college_graduated_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="college_graduated" id="college_graduated_no" value="no">
                            <label class="form-check-label" for="college_graduated_no">No</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="college_degree" class="form-label">Degree</label>
                        <input type="text" name="college_degree" id="college_degree" class="form-control">
                    </div>
                </div>
            </div>

            {{-- Other School --}}
            <div class="mb-4">
                <h5 class="text-muted">Other School</h5>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="other_school" class="form-label">School Name</label>
                        <input type="text" name="other_school" id="other_school" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="other_address" class="form-label">Address</label>
                        <input type="text" name="other_address" id="other_address" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="other_from" class="form-label">From</label>
                        <input type="date" name="other_from" id="other_from" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="other_to" class="form-label">To</label>
                        <input type="date" name="other_to" id="other_to" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label d-block">Graduated?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="other_graduated" id="other_graduated_yes" value="yes">
                            <label class="form-check-label" for="other_graduated_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="other_graduated" id="other_graduated_no" value="no">
                            <label class="form-check-label" for="other_graduated_no">No</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="other_degree" class="form-label">Degree</label>
                        <input type="text" name="other_degree" id="other_degree" class="form-control">
                    </div>
                </div>
            </div>
        </div>


        {{-- References --}}
        <div class="form-section">
            <h4 class="section-title">References</h4>
            <p class="text-muted">Please list 3 professional references.</p>

            <!-- Reference 1 -->
            <h5 class="text-muted">Reference 1</h5>
            <div class="row g-3 mb-3">
                <div class="col-md-4">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="ref1_name" class="form-control" value="{{ old('ref1_name') }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Relationship</label>
                    <input type="text" name="ref1_relationship" class="form-control" value="{{ old('ref1_relationship') }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Company</label>
                    <input type="text" name="ref1_company" class="form-control" value="{{ old('ref1_company') }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Phone</label>
                    <input type="text" name="ref1_phone" class="form-control" value="{{ old('ref1_phone') }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Address</label>
                    <input type="text" name="ref1_address" class="form-control" value="{{ old('ref1_address') }}">
                </div>
            </div>

            <!-- Reference 2 -->
            <h5 class="text-muted">Reference 2</h5>
            <div class="row g-3 mb-3">
                <div class="col-md-4">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="ref2_name" class="form-control" value="{{ old('ref2_name') }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Relationship</label>
                    <input type="text" name="ref2_relationship" class="form-control" value="{{ old('ref2_relationship') }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Company</label>
                    <input type="text" name="ref2_company" class="form-control" value="{{ old('ref2_company') }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Phone</label>
                    <input type="text" name="ref2_phone" class="form-control" value="{{ old('ref2_phone') }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Address</label>
                    <input type="text" name="ref2_address" class="form-control" value="{{ old('ref2_address') }}">
                </div>
            </div>

            <!-- Reference 3 -->
            <h5 class="text-muted">Reference 3</h5>
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="ref3_name" class="form-control" value="{{ old('ref3_name') }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Relationship</label>
                    <input type="text" name="ref3_relationship" class="form-control" value="{{ old('ref3_relationship') }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Company</label>
                    <input type="text" name="ref3_company" class="form-control" value="{{ old('ref3_company') }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Phone</label>
                    <input type="text" name="ref3_phone" class="form-control" value="{{ old('ref3_phone') }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Address</label>
                    <input type="text" name="ref3_address" class="form-control" value="{{ old('ref3_address') }}">
                </div>
            </div>
        </div>



        {{-- Employment --}}
        <div class="form-section">
            <h4 class="section-title">Employment History</h4>

            <div id="employment-history-wrapper">
                <!-- Job 1 (template) -->
                <div class="employment-entry mb-4">
                    <h5 class="text-muted">Job 1</h5>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="job1_company" class="form-label">Company</label>
                            <input type="text" name="job1_company" id="job1_company" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="job1_phone" class="form-label">Phone</label>
                            <input type="tel" name="job1_phone" id="job1_phone" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label for="job1_address" class="form-label">Address</label>
                            <input type="text" name="job1_address" id="job1_address" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="job1_supervisor" class="form-label">Supervisor</label>
                            <input type="text" name="job1_supervisor" id="job1_supervisor" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="job1_title" class="form-label">Job Title</label>
                            <input type="text" name="job1_title" id="job1_title" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="job1_start_salary" class="form-label">Starting Salary($)</label>
                            <input type="number" name="job1_start_salary" id="job1_start_salary" class="form-control" step="0.01" required>
                        </div>
                        <div class="col-md-6">
                            <label for="job1_end_salary" class="form-label">Ending Salary($)</label>
                            <input type="number" name="job1_end_salary" id="job1_end_salary" class="form-control" step="0.01" required>
                        </div>
                        <div class="col-12">
                            <label for="job1_responsibilities" class="form-label">Responsibilities</label>
                            <textarea name="job1_responsibilities" id="job1_responsibilities" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="col-md-3">
                            <label for="job1_from" class="form-label">From</label>
                            <input type="date" name="job1_from" id="job1_from" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <label for="job1_to" class="form-label">To</label>
                            <input type="date" name="job1_to" id="job1_to" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label d-block">Can we contact this supervisor?</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="job1_contact_supervisor" id="job1_contact_yes" value="yes" required>
                                <label class="form-check-label" for="job1_contact_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="job1_contact_supervisor" id="job1_contact_no" value="no" required>
                                <label class="form-check-label" for="job1_contact_no">No</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Button to add more jobs -->
            <button type="button" id="add-job-btn" class="btn btn-primary btn-lg">+ Add Job</button>
        </div>

        <script>
            let jobCount = 1;
            const minJobs = 2;
            const maxJobs = 5;

            const wrapper = document.getElementById('employment-history-wrapper');
            const addJobBtn = document.getElementById('add-job-btn');

            function updateJobHeaders() {
                const jobs = wrapper.querySelectorAll('.employment-entry');
                jobs.forEach((job, index) => {
                    job.querySelector('h5').innerText = "Job " + (index + 1);

                    // Remove old delete button
                    const oldDeleteBtn = job.querySelector('.delete-job-btn');
                    if (oldDeleteBtn) oldDeleteBtn.remove();

                    // Add delete button only if more than minimum jobs exist
                    if (jobs.length > minJobs) {
                        const deleteBtn = document.createElement('button');
                        deleteBtn.type = "button";
                        deleteBtn.className = "btn btn-danger btn-sm mt-2 delete-job-btn";
                        deleteBtn.innerText = "Delete Job";
                        deleteBtn.onclick = function() {
                            if (jobs.length > minJobs) {
                                job.remove();
                                jobCount--;
                                updateJobHeaders();
                                if (jobCount < maxJobs) addJobBtn.style.display = "inline-block";
                            } else {
                                alert("You must have at least " + minJobs + " jobs.");
                            }
                        };
                        job.appendChild(deleteBtn);
                    }
                });
            }

            addJobBtn.addEventListener('click', function() {
                if (jobCount >= maxJobs) return;

                jobCount++;
                const firstJob = wrapper.querySelector('.employment-entry');
                const newJob = firstJob.cloneNode(true);

                // Clear all inputs and textareas
                newJob.querySelectorAll('input, textarea').forEach(el => {
                    if (el.type === "radio" || el.type === "checkbox") {
                        el.checked = false;
                    } else {
                        el.value = "";
                    }
                });

                wrapper.appendChild(newJob);
                updateJobHeaders();

                // Hide button if max reached
                if (jobCount >= maxJobs) {
                    addJobBtn.style.display = "none";
                }
            });

            // Initialize with at least 2 jobs
            for (let i = 1; i < minJobs; i++) {
                addJobBtn.click();
            }

            updateJobHeaders();

        </script>









        {{-- Military Service --}}

        <div class="form-section">
            <h4 class="section-title">Military Service</h4>
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="military_branch" class="form-label">Branch</label>
                    <input type="text" name="military_branch" id="military_branch" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="military_from" class="form-label">From</label>
                    <input type="date" name="military_from" id="military_from" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="military_to" class="form-label">To</label>
                    <input type="date" name="military_to" id="military_to" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="rank_at_discharge" class="form-label">Rank at Discharge</label>
                    <input type="text" name="rank_at_discharge" id="rank_at_discharge" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="type_of_discharge" class="form-label">Type of Discharge</label>
                    <input type="text" name="type_of_discharge" id="type_of_discharge" class="form-control">
                </div>
                <div class="col-12">
                    <label for="other_than_honorable_explanation" class="form-label">If other than honorable, please
                        explain</label>
                    <textarea name="other_than_honorable_explanation" id="other_than_honorable_explanation" class="form-control"></textarea>
                </div>
            </div>
        </div>

        {{-- Resume & Disclaimer --}}
        <div class="form-section">
            <h4 class="section-title">Final Details</h4>

            <div class="mb-3">
                <p>
                    I certify that my answers are true and complete to the best of my knowledge.
                    I authorize <strong>Onsite Transportation</strong> to run a national background and a driving record
                    as part of the hiring process.
                    If this application leads to employment, I understand that false or misleading information in my
                    application or interview may result in my release.
                </p>
            </div>

            <div class="col-md-6 d-flex align-items-center">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="agree_disclaimer" value="1" id="agree_disclaimer" required>
                    <label class="form-check-label" for="agree_disclaimer">
                        <strong>I agree to the disclaimer</strong>
                    </label>
                </div>
            </div>
        </div>

</div>

<div class="text-center mt-4">
    <button type="submit" class="btn btn-primary btn-lg">Submit Application</button>
</div>
{{-- Add extra spacing --}}
<div class="mb-5"></div>
</form>
</div>
</div>
@endsection
