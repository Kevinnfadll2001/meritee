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

                            <span class="meritee-auth-subtitle">Welcome Back</span>
                            <h2>Glow starts here.</h2>
                            <p>
                                Log in to your Mérité account to continue shopping, save your favorites,
                                and enjoy a smoother skincare experience.
                            </p>

                            <div class="meritee-auth-links">
                                <a href="{{ route('home') }}" class="outline-btn">Back to Home</a>
                                <a href="{{ route('register') }}" class="solid-light-btn">Create Account</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT PANEL -->
                <div class="col-lg-6">
                    <div class="meritee-auth-right">
                        <div class="meritee-auth-form-box">
                            <div class="meritee-auth-head">
                                <h3>Login</h3>
                                <p>Please enter your details to access your account.</p>
                            </div>

                            <x-auth-session-status class="mb-3 text-success" :status="session('status')" />

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input
                                        id="email"
                                        type="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required
                                        autofocus
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
                                        autocomplete="current-password"
                                        class="form-control meritee-input @error('password') is-invalid @enderror"
                                        placeholder="Enter your password"
                                    >
                                    @error('password')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="meritee-auth-options">
                                    <label class="remember-me">
                                        <input id="remember_me" type="checkbox" name="remember">
                                        <span>Remember me</span>
                                    </label>

                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="forgot-link">
                                            Forgot Password?
                                        </a>
                                    @endif
                                </div>

                                <button type="submit" class="meritee-auth-btn">
                                    Log In
                                </button>

                                <div class="meritee-divider">
                                    <span>or</span>
                                </div>

                                <div class="meritee-secondary-actions">
                                    <a href="{{ route('register') }}" class="meritee-secondary-btn">
                                        Create New Account
                                    </a>

                                    <a href="{{ route('home') }}" class="meritee-back-btn">
                                        Continue as Guest
                                    </a>
                                </div>

                                <div class="meritee-auth-bottom">
                                    New to Mérité?
                                    <a href="{{ route('register') }}">Register here</a>
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
        background:
            radial-gradient(circle at top left, rgba(11, 77, 28, 0.08), transparent 35%),
            linear-gradient(180deg, #f8f8f8 0%, #f2f5f3 100%);
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
        background: linear-gradient(180deg, rgba(7, 63, 25, 0.78) 0%, rgba(7, 63, 25, 0.90) 100%);
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
        color: #dff1e4;
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

    .meritee-auth-links a {
        min-width: 150px;
        height: 46px;
        border-radius: 999px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        font-weight: 700;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .outline-btn {
        border: 1px solid rgba(255,255,255,0.9);
        color: #fff;
        background: transparent;
    }

    .outline-btn:hover {
        background: #fff;
        color: #0b4d1c;
    }

    .solid-light-btn {
        border: 1px solid #fff;
        background: #fff;
        color: #0b4d1c;
    }

    .solid-light-btn:hover {
        background: #eaf5ed;
        color: #0b4d1c;
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
        color: #0b163f;
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
        border-radius: 14px;
        border: 1px solid #d9d9d9;
        padding: 12px 18px;
        font-size: 15px;
        box-shadow: none !important;
        transition: all 0.3s ease;
        background: #fff;
    }

    .meritee-input:focus {
        border-color: #0b4d1c;
        box-shadow: 0 0 0 4px rgba(11, 77, 28, 0.08) !important;
    }

    .meritee-auth-options {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 15px;
        flex-wrap: wrap;
        margin-bottom: 24px;
    }

    .remember-me {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        color: #555;
        cursor: pointer;
    }

    .remember-me input {
        accent-color: #0b4d1c;
    }

    .forgot-link {
        font-size: 14px;
        color: #0b4d1c;
        text-decoration: none;
        font-weight: 700;
    }

    .forgot-link:hover {
        text-decoration: underline;
        color: #083915;
    }

    .meritee-auth-btn {
        width: 100%;
        height: 56px;
        border: none;
        border-radius: 14px;
        background: linear-gradient(135deg, #0b4d1c 0%, #14652a 100%);
        color: #fff;
        font-size: 16px;
        font-weight: 700;
        letter-spacing: 0.2px;
        transition: all 0.3s ease;
        box-shadow: 0 12px 25px rgba(11, 77, 28, 0.20);
    }

    .meritee-auth-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 16px 30px rgba(11, 77, 28, 0.25);
        background: linear-gradient(135deg, #083915 0%, #0f5a24 100%);
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

    .meritee-secondary-btn,
    .meritee-back-btn {
        height: 52px;
        border-radius: 14px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        font-size: 15px;
        font-weight: 700;
        transition: all 0.3s ease;
    }

    .meritee-secondary-btn {
        background: #f3f7f4;
        color: #0b4d1c;
        border: 1px solid #dbe7df;
    }

    .meritee-secondary-btn:hover {
        background: #e9f2ec;
        color: #0b4d1c;
    }

    .meritee-back-btn {
        background: transparent;
        color: #374151;
        border: 1px solid #d1d5db;
    }

    .meritee-back-btn:hover {
        background: #f9fafb;
        color: #111827;
    }

    .meritee-auth-bottom {
        margin-top: 24px;
        text-align: center;
        font-size: 15px;
        color: #6b7280;
    }

    .meritee-auth-bottom a {
        color: #0b4d1c;
        font-weight: 700;
        text-decoration: none;
    }

    .meritee-auth-bottom a:hover {
        text-decoration: underline;
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

        .meritee-auth-options {
            flex-direction: column;
            align-items: flex-start;
        }

        .meritee-auth-links a {
            width: 100%;
        }
    }
</style>
@endsection
