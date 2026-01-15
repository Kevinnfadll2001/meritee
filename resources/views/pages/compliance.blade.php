@extends('layouts.index')

@section('content')

<!-- Compliance Section -->
<section class="compliance-section section-space" style="background: #f8f9fa; padding: 80px 0;">
    <div class="container">

        <!-- Intro -->
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <div class="sec-title wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="150ms">
                    <div class="sec-title__top">
                        <div class="sec-title__shape"></div>
                        <h6 class="sec-title__tagline">ADA & HIPAA
Compliant Medical
Transportation |
OnSite
Transportation</h6>
                    </div>
                    <h3 class="sec-title__title mt-2">
                        Built on Compliance, Safety, and Trust
                    </h3>
                </div>
                <p class="mt-3" style="font-size:1.05rem; color:#495057; line-height:1.6;">
                   Our operations meet or exceed regulatory and payer standards for NEMT providers, ensuring safe and reliable service every time.
                </p>
            </div>
        </div>

        <!-- Compliance Cards -->
        <div class="row">
            @php
                $compliance_items = [
                    [
                        'title' => 'Regulatory Alignment',
                        'icon' => 'fas fa-gavel',
                        'text' => 'Operations aligned with 42 CFR §440.170, the federal regulation that requires Medicaid to provide NEMT.'
                    ],
                    [
                        'title' => 'ADA Standards',
                        'icon' => 'fas fa-wheelchair',
                        'text' => 'All vehicles are ADA-equipped and drivers trained in patient assistance and disability etiquette.'
                    ],
                    [
                        'title' => 'Driver Credentialing',
                        'icon' => 'fas fa-id-badge',
                        'text' => 'DMV pull notice enrollment, background checks, drug/alcohol testing, CPR/First Aid certification, defensive driving, and patient handling.'
                    ],
                    [
                        'title' => 'Insurance & Risk Management',
                        'icon' => 'fas fa-shield-alt',
                        'text' => 'Commercial auto, general liability, workers’ comp, and umbrella coverage.'
                    ],
                    [
                        'title' => 'Fleet Safety',
                        'icon' => 'fas fa-car-crash',
                        'text' => 'Preventive maintenance, daily pre/post-trip inspections, and infection-control cleaning protocols.'
                    ],
                    [
                        'title' => 'Data Privacy',
                        'icon' => 'fas fa-lock',
                        'text' => 'HIPAA-compliant systems with encrypted communications.'
                    ],
                ];
            @endphp

            @foreach($compliance_items as $item)
                <div class="col-lg-6 mb-4">
                    <div class="compliance-card wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms" style="background: #ffffff; border-left: 5px solid #00578d; border-radius: 8px; padding: 25px; transition: box-shadow 0.3s ease;">
                        <div class="d-flex align-items-start mb-3">
                            <i class="{{ $item['icon'] }} fa-2x me-3 mt-1" style="color: #8a9900;"></i>
                            <div>
                                <h5 class="compliance-card__title mb-2" style="font-weight:600; color:#111827;">{{ $item['title'] }}</h5>
                                <p class="compliance-card__text mb-0" style="font-size: 0.95rem; line-height: 1.5; color:#495057;">{{ $item['text'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

@endsection
