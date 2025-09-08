{{-- resources/views/public/home.blade.php --}}
@extends('layouts.app')

@section('title', $settings['site_name'] ?? config('app.name', 'Utility Site'))

@section('content')
    {{-- Hero Section --}}
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">{{ $settings['site_name'] ?? 'Utility Billing System' }}</h1>
                <p class="hero-subtitle">Your trusted utility service provider</p>
            </div>
        </div>
    </section>

    {{-- Main Content Sections --}}
    <div class="main-content">
        
        {{-- Account Section --}}
        <section class="content-section account-section">
            <div class="container">
                <div class="section-grid">
                    <div class="section-content">
                        <h2 class="section-title">{{ $settings['hp_account_headline'] ?? 'Your Account at Your Fingertips' }}</h2>
                        <p class="section-description">{{ $settings['hp_account_subtext'] ?? 'Sign in for the easiest way to pay your bill, manage your account, watch TV anywhere and more.' }}</p>
                        <div class="action-buttons">
                            <a href="{{ route('signup') }}" class="btn btn-outline-primary">{{ $settings['hp_account_create_text'] ?? 'Create a Username' }}</a>
                            <a href="{{ route('login') }}" class="btn btn-primary">{{ $settings['hp_account_signin_text'] ?? 'Sign In' }}</a>
                        </div>
                        <p class="section-footer"> 
                            {{ $settings['hp_account_notcustomer_text'] ?? 'Not a Spectrum Customer?' }} 
                            <a href="{{ $settings['hp_account_getstarted_url'] ?? '#' }}" class="link-primary">{{ $settings['hp_account_getstarted_text'] ?? 'Get Started' }}</a> 
                        </p>
                    </div>
                    <div class="section-image">
                        <img src="{{ $settings['hp_account_image_url'] ?? asset('images/utility-logo.svg') }}" alt="Account Management" class="section-img">
                    </div>
                </div>
            </div>
        </section>

        {{-- Internet Services Section --}}
        <section class="content-section internet-section">
            <div class="container">
                <div class="section-grid reverse">
                    <div class="section-content">
                        <h2 class="section-title">{{ $settings['hp_internet_headline'] ?? 'Reliably Fast Internet. Incredible Savings.' }}</h2>
                        <p class="section-description">{{ $settings['hp_internet_subtext'] ?? 'Switch to Spectrum for the fastest, most reliable Internet. Add Spectrum Mobile® to enjoy seamless connectivity wherever you go.' }}</p>
                        <a href="{{ $settings['hp_internet_button_url'] ?? '#' }}" class="btn btn-primary">{{ $settings['hp_internet_button_text'] ?? 'See My Deals' }}</a>
                        <p class="section-disclaimer">{{ $settings['hp_internet_disclaimer'] ?? 'Services not available in all areas. Restrictions apply.' }}</p>
                    </div>
                    <div class="section-image">
                        <img src="{{ $settings['hp_internet_bg_image_url'] ?? asset('images/utility-logo.svg') }}" alt="Internet Services" class="section-img">
                    </div>
                </div>
            </div>
        </section>

        {{-- Services Overview Section --}}
        <section class="content-section services-section">
            <div class="container">
                <h2 class="section-title text-center">Our Services</h2>
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-wifi"></i>
                        </div>
                        <h3 class="service-title">Internet</h3>
                        <p class="service-description">High-speed internet for your home and business needs.</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-tv"></i>
                        </div>
                        <h3 class="service-title">TV</h3>
                        <p class="service-description">Entertainment packages with hundreds of channels.</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h3 class="service-title">Phone</h3>
                        <p class="service-description">Reliable home phone service with great features.</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3 class="service-title">Mobile</h3>
                        <p class="service-description">Mobile plans with nationwide coverage.</p>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection

@push('styles')
{{-- Styles are now in complete.css --}}
@endpush

@push('scripts')
@endpush