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
<style>
    /* Hero Section */
    .hero-section {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
        color: white;
        padding: 4rem 0;
        text-align: center;
    }

    .hero-title {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 1rem;
        color: white;
    }

    .hero-subtitle {
        font-size: 1.25rem;
        opacity: 0.9;
        margin-bottom: 0;
    }

    /* Main Content */
    .main-content {
        background-color: #f8f9fa;
        min-height: 60vh;
    }

    /* Content Sections */
    .content-section {
        padding: 4rem 0;
        background-color: white;
        margin-bottom: 2rem;
    }

    .content-section:nth-child(even) {
        background-color: #f8f9fa;
    }

    /* Section Grid */
    .section-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: center;
    }

    .section-grid.reverse {
        direction: rtl;
    }

    .section-grid.reverse > * {
        direction: ltr;
    }

    /* Section Content */
    .section-title {
        font-size: 2.5rem;
        font-weight: 600;
        color: var(--dark-color);
        margin-bottom: 1.5rem;
        line-height: 1.2;
    }

    .section-description {
        font-size: 1.125rem;
        color: var(--medium-gray);
        margin-bottom: 2rem;
        line-height: 1.6;
    }

    .action-buttons {
        display: flex;
        gap: 1rem;
        margin-bottom: 1.5rem;
        flex-wrap: wrap;
    }

    .section-footer {
        font-size: 0.95rem;
        color: var(--medium-gray);
        margin-bottom: 0;
    }

    .link-primary {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 500;
    }

    .link-primary:hover {
        color: var(--accent-color);
        text-decoration: underline;
    }

    .section-disclaimer {
        font-size: 0.875rem;
        color: #6b7280;
        margin-top: 1rem;
        margin-bottom: 0;
    }

    /* Section Images */
    .section-image {
        text-align: center;
    }

    .section-img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Services Section */
    .services-section {
        background-color: white;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }

    .service-card {
        text-align: center;
        padding: 2rem 1.5rem;
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .service-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .service-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
    }

    .service-icon i {
        font-size: 2rem;
        color: white;
    }

    .service-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--dark-color);
        margin-bottom: 1rem;
    }

    .service-description {
        color: var(--medium-gray);
        line-height: 1.6;
        margin-bottom: 0;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2rem;
        }

        .hero-subtitle {
            font-size: 1rem;
        }

        .section-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .section-title {
            font-size: 2rem;
        }

        .action-buttons {
            justify-content: center;
        }

        .services-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 480px) {
        .hero-section {
            padding: 2rem 0;
        }

        .content-section {
            padding: 2rem 0;
        }

        .action-buttons {
            flex-direction: column;
            align-items: center;
        }

        .action-buttons .btn {
            width: 100%;
            max-width: 300px;
        }
    }
</style>
@endpush

@push('scripts')
@endpush