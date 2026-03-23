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

                            <span class="meritee-auth-subtitle">Security Check</span>
                            <h2>Confirm your identity.</h2>
                            <p>
                                This is a secure area of the application. Please confirm your password
                                before continuing.
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
                                <h3>Confirm Password</h3>
                                <p>Please enter your password to continue.</p>
                            </div>

                            <form method="POST" action="{{ route('password.confirm') }}">
                                @csrf

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

                                <button type="submit" class="default-btn border-radius-5 w-100 meritee-main-btn">
                                    Confirm
                                </button>

                                <div class="meritee-divider">
                                    <span>or</span>
                                </div>

                                <div class="meritee-secondary-actions">
                                    <a href="{{ route('home') }}" class="default-btn border-radius-5 w-100 meritee-guest-btn">
                                        Cancel & Go Home
                                    </a>
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
    }

    .meritee-auth-content p {
        font-size: 16px;
        line-height: 1.8;
        margin-bottom: 30px;
    }

    .meritee-auth-links {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
    }

    .meritee-auth-right {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 65px 45px;
    }

    .meritee-auth-form-box {
        width: 100%;
        max-width: 470px;
    }

    .meritee-auth-head h3 {
        font-size: 34px;
        font-weight: 800;
        margin-bottom: 10px;
    }

    .form-label {
        font-weight: 600;
        margin-bottom: 8px;
    }

    .meritee-input {
        height: 56px;
        border-radius: 10px;
        border: 1px solid #e5e7eb;
        padding: 12px 18px;
        transition: 0.3s;
    }

    .meritee-input:focus {
        border-color: #d6b98c;
        box-shadow: 0 0 0 4px rgba(214,185,140,0.15);
    }

    .default-btn {
        display: inline-flex !important;
        align-items: center;
        justify-content: center;
        height: 50px;
        font-weight: 600;
    }

    .meritee-divider {
        text-align: center;
        margin: 20px 0;
        position: relative;
    }

    .meritee-divider::before {
        content: "";
        position: absolute;
        top: 50%;
        width: 100%;
        height: 1px;
        background: #e5e7eb;
    }

    .meritee-divider span {
        background: #fff;
        padding: 0 10px;
        position: relative;
        z-index: 2;
        color: #999;
        font-size: 12px;
    }

    .meritee-guest-btn {
        background: #f4f4f4 !important;
        color: #333 !important;
    }

    .invalid-feedback {
        font-size: 13px;
    }

    @media (max-width: 991px) {
        .meritee-auth-left {
            min-height: 320px;
        }
    }

    @media (max-width: 575px) {
        .meritee-auth-links {
            flex-direction: column;
        }

        .default-btn {
            width: 100%;
        }
    }
</style>
@endsection
