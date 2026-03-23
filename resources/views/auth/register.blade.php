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

                            <span class="meritee-auth-subtitle">Join Mérité</span>
                            <h2>Your skincare journey starts here.</h2>
                            <p>
                                Create your Mérité account to shop with ease, save your favorites,
                                and enjoy a more personalized beauty experience.
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
                                <h3>Create Account</h3>
                                <p>Please fill in your details to create your account.</p>
                            </div>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input
                                        id="name"
                                        type="text"
                                        name="name"
                                        value="{{ old('name') }}"
                                        required
                                        autofocus
                                        autocomplete="name"
                                        class="form-control meritee-input @error('name') is-invalid @enderror"
                                        placeholder="Enter your full name"
                                    >
                                    @error('name')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input
                                        id="email"
                                        type="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required
                                        autocomplete="username"
                                        class="form-control meritee-input @error('email') is-invalid @enderror"
                                        placeholder="Enter your email address"
                                    >
                                    @error('email')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input
                                        id="password"
                                        type="password"
                                        name="password"
                                        required
                                        autocomplete="new-password"
                                        class="form-control meritee-input @error('password') is-invalid @enderror"
                                        placeholder="Enter your password"
                                    >
                                    @error('password')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                                    <input
                                        id="password_confirmation"
                                        type="password"
                                        name="password_confirmation"
                                        required
                                        autocomplete="new-password"
                                        class="form-control meritee-input @error('password_confirmation') is-invalid @enderror"
                                        placeholder="Confirm your password"
                                    >
                                    @error('password_confirmation')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="default-btn border-radius-5 w-100 meritee-main-btn">
                                    Register
                                </button>

                                <div class="meritee-divider">
                                    <span>or</span>
                                </div>

                                <div class="meritee-secondary-actions">
                                    <a href="{{ route('login') }}" class="default-btn border-radius-5 w-100">
                                        Already Registered?
                                    </a>

                                    <a href="{{ route('home') }}" class="default-btn border-radius-5 w-100 meritee-guest-btn">
                                        Continue as Guest
                                    </a>
                                </div>

                                <div class="meritee-auth-bottom">
                                    Already have an account?
                                    <a href="{{ route('login') }}">Login here</a>
                                </div>
                            </form>
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
        font-size: 46px;
        line-height: 1.15;
        font-weight: 800;
        color: #fff;
        margin-bottom: 18px;
    }

    .meritee-auth-content p {
        font-size: 16px;
        line-height: 1.9;
        color: rgba(255, 255, 255, 0.92);
        margin-bottom: 30px;
    }

    .meritee-auth-links {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
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
        font-size: 38px;
        line-height: 1.2;
        margin-bottom: 10px;
        color: #222;
        font-weight: 800;
    }

    .meritee-auth-head p {
        color: #6b7280;
        font-size: 15px;
        margin-bottom: 0;
    }

    .form-label {
        font-size: 14px;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 8px;
    }

    .meritee-input {
        height: 56px;
        border-radius: 10px;
        border: 1px solid #e5e7eb;
        padding: 12px 18px;
        font-size: 15px;
        box-shadow: none !important;
        transition: all 0.3s ease;
        background: #fff;
    }

    .meritee-input:focus {
        border-color: #d6b98c;
        box-shadow: 0 0 0 4px rgba(214, 185, 140, 0.15) !important;
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
    }

    .meritee-main-btn {
        min-width: 100%;
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

    .invalid-feedback {
        font-size: 13px;
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
