@extends('layouts.index')

@section('content')
<div class="meritee-auth-page">
    <div class="container">
        <div class="meritee-auth-wrapper">
            <div class="row g-0 align-items-stretch">

                <!-- LEFT PANEL -->
                <div class="col-lg-6">
                    <div class="meritee-auth-left">
                        <div class="meritee-auth-overlay"></div>

                        <div class="meritee-auth-content">
                            <a href="{{ route('home') }}" class="meritee-auth-logo">
                                <img src="{{ asset('assets/images/logos/logo.png') }}" alt="Mérité Logo">
                            </a>

                            <span class="meritee-auth-subtitle">Email Verification</span>
                            <h2>Verify your email address.</h2>
                            <p>
                                Thanks for signing up. Before getting started, please verify your
                                email address by clicking the link we just emailed to you.
                            </p>

                            <div class="meritee-auth-links">
                                <a href="{{ route('home') }}" class="default-btn border-radius-5">
                                    Back to Home
                                </a>
                                <a href="{{ route('login') }}" class="default-btn border-radius-5 meritee-light-btn">
                                    Login
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT PANEL -->
                <div class="col-lg-6">
                    <div class="meritee-auth-right">
                        <div class="meritee-auth-form-box">

                            <div class="meritee-auth-head">
                                <h3>Verify Email</h3>
                                <p>
                                    Check your inbox and click the verification link. If you didn’t
                                    receive the email, you can request another one below.
                                </p>
                            </div>

                            @if (session('status') == 'verification-link-sent')
                                <div class="alert alert-success meritee-status-alert">
                                    A new verification link has been sent to the email address you provided during registration.
                                </div>
                            @endif

                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf

                                <button type="submit" class="default-btn border-radius-5 w-100 meritee-main-btn">
                                    Resend Verification Email
                                </button>
                            </form>

                            <div class="meritee-divider">
                                <span>or</span>
                            </div>

                            <div class="meritee-secondary-actions">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="default-btn border-radius-5 w-100 meritee-guest-btn meritee-full-btn">
                                        Log Out
                                    </button>
                                </form>
                            </div>

                            <div class="meritee-auth-bottom">
                                Already verified?
                                <a href="{{ route('login') }}">Login here</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /RIGHT PANEL -->

            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<style>
    .meritee-auth-page {
        padding: 120px 0 80px;
        background: linear-gradient(180deg, #fdfbf8 0%, #f7f4ef 100%);
        min-height: 100vh;
    }

    .meritee-auth-wrapper {
        background: #fff;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.10);
    }

    .meritee-auth-left {
        position: relative;
        min-height: 680px;
        height: 100%;
        background: url('{{ asset('assets/images/slider/slider-1.jpg') }}') center center / cover no-repeat;
        display: flex;
        align-items: center;
        padding: 60px 55px;
    }

    .meritee-auth-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(0, 0, 0, 0.35) 0%, rgba(0, 0, 0, 0.55) 100%);
    }

    .meritee-auth-content {
        position: relative;
        z-index: 2;
        max-width: 430px;
        color: #fff;
    }

    .meritee-auth-logo {
        display: inline-block;
        margin-bottom: 28px;
    }

    .meritee-auth-logo img {
        max-width: 145px;
        filter: brightness(0) invert(1);
    }

    .meritee-auth-subtitle {
        display: inline-block;
        margin-bottom: 14px;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        color: #f5e7d2;
    }

    .meritee-auth-content h2 {
        font-size: 42px;
        font-weight: 800;
        margin-bottom: 18px;
        line-height: 1.15;
    }

    .meritee-auth-content p {
        font-size: 16px;
        line-height: 1.8;
        margin-bottom: 30px;
        color: rgba(255, 255, 255, 0.92);
    }

    .meritee-auth-links {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
    }

    .meritee-auth-right {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 65px 45px;
        background: #fff;
    }

    .meritee-auth-form-box {
        width: 100%;
        max-width: 470px;
    }

    .meritee-auth-head {
        margin-bottom: 28px;
    }

    .meritee-auth-head h3 {
        font-size: 34px;
        font-weight: 800;
        margin-bottom: 10px;
        color: #222;
    }

    .meritee-auth-head p {
        color: #6b7280;
        font-size: 15px;
        margin-bottom: 0;
        line-height: 1.7;
    }

    .default-btn {
        display: inline-flex !important;
        align-items: center;
        justify-content: center;
        min-width: 170px;
        height: 50px;
        padding: 0 24px;
        text-align: center;
        font-weight: 600;
        transition: all 0.3s ease;
        text-decoration: none;
        border: none;
        cursor: pointer;
    }

    .meritee-main-btn {
        min-width: 100%;
    }

    .meritee-full-btn {
        width: 100%;
    }

    .meritee-light-btn {
        background: #fff !important;
        color: #222 !important;
        border: 1px solid #fff;
    }

    .meritee-light-btn:hover {
        background: #f7f7f7 !important;
        color: #222 !important;
    }

    .meritee-divider {
        position: relative;
        text-align: center;
        margin: 22px 0;
    }

    .meritee-divider::before {
        content: "";
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        height: 1px;
        background: #e5e7eb;
        transform: translateY(-50%);
    }

    .meritee-divider span {
        position: relative;
        z-index: 2;
        background: #fff;
        padding: 0 14px;
        color: #9ca3af;
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
    }

    .meritee-secondary-actions {
        display: grid;
        gap: 12px;
    }

    .meritee-guest-btn {
        background: #f4f4f4 !important;
        color: #333 !important;
        border: 1px solid #e2e2e2;
    }

    .meritee-guest-btn:hover {
        background: #ebebeb !important;
        color: #222 !important;
    }

    .meritee-auth-bottom {
        margin-top: 24px;
        text-align: center;
        font-size: 15px;
        color: #6b7280;
    }

    .meritee-auth-bottom a {
        color: #b88b4a;
        font-weight: 700;
        text-decoration: none;
    }

    .meritee-auth-bottom a:hover {
        text-decoration: underline;
    }

    .meritee-status-alert {
        border-radius: 12px;
        padding: 14px 16px;
        margin-bottom: 20px;
        font-size: 14px;
        line-height: 1.6;
    }

    @media (max-width: 991px) {
        .meritee-auth-page {
            padding: 90px 0 60px;
        }

        .meritee-auth-left {
            min-height: 360px;
            padding: 40px 28px;
        }

        .meritee-auth-content h2 {
            font-size: 34px;
        }

        .meritee-auth-right {
            padding: 38px 24px;
        }

        .meritee-auth-head h3 {
            font-size: 30px;
        }
    }

    @media (max-width: 575px) {
        .meritee-auth-page {
            padding: 70px 0 50px;
        }

        .meritee-auth-wrapper {
            border-radius: 18px;
        }

        .meritee-auth-left {
            min-height: 280px;
            padding: 28px 20px;
        }

        .meritee-auth-content h2 {
            font-size: 28px;
        }

        .meritee-auth-content p {
            font-size: 14px;
            line-height: 1.7;
        }

        .meritee-auth-right {
            padding: 28px 18px;
        }

        .meritee-auth-head h3 {
            font-size: 26px;
        }

        .meritee-auth-links {
            flex-direction: column;
        }

        .meritee-auth-links a,
        .default-btn {
            width: 100%;
        }
    }
</style>
@endsection
