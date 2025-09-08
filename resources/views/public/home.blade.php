{{-- SIMPLE, WORKING HOMEPAGE --}}
@extends('layouts.app')

@section('title', 'Utility Billing System')

@section('content')
<style>
/* SIMPLE, WORKING STYLES */
body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
.hero { background: #005eb8; color: white; padding: 60px 20px; text-align: center; }
.hero h1 { font-size: 2.5rem; margin: 0 0 10px 0; }
.hero p { font-size: 1.2rem; margin: 0; }
.container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
.section { padding: 60px 20px; background: white; margin: 20px 0; }
.section:nth-child(even) { background: #f8f9fa; }
.section h2 { font-size: 2rem; margin: 0 0 20px 0; color: #333; }
.section p { font-size: 1.1rem; color: #666; margin: 0 0 20px 0; }
.btn { display: inline-block; padding: 12px 24px; background: #005eb8; color: white; text-decoration: none; border-radius: 5px; margin: 10px 10px 10px 0; }
.btn:hover { background: #004494; }
.services { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-top: 30px; }
.service-card { background: white; padding: 30px; border-radius: 10px; text-align: center; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
.service-icon { width: 60px; height: 60px; background: #005eb8; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: white; font-size: 24px; }
.service-card h3 { margin: 0 0 15px 0; color: #333; }
.service-card p { margin: 0; color: #666; }
@media (max-width: 768px) {
    .hero h1 { font-size: 2rem; }
    .hero p { font-size: 1rem; }
    .section h2 { font-size: 1.5rem; }
    .services { grid-template-columns: 1fr; }
}
</style>

<div class="hero">
    <div class="container">
        <h1>Utility Billing System</h1>
        <p>Your trusted utility service provider</p>
    </div>
</div>

<div class="container">
    <div class="section">
        <h2>Your Account at Your Fingertips</h2>
        <p>Sign in for the easiest way to pay your bill, manage your account, watch TV anywhere and more.</p>
        <a href="{{ route('signup') }}" class="btn">Create a Username</a>
        <a href="{{ route('login') }}" class="btn">Sign In</a>
        <p>Not a Spectrum Customer? <a href="#" style="color: #005eb8;">Get Started</a></p>
    </div>

    <div class="section">
        <h2>Reliably Fast Internet. Incredible Savings.</h2>
        <p>Switch to Spectrum for the fastest, most reliable Internet. Add Spectrum Mobile® to enjoy seamless connectivity wherever you go.</p>
        <a href="#" class="btn">See My Deals</a>
        <p style="font-size: 0.9rem; color: #999;">Services not available in all areas. Restrictions apply.</p>
    </div>

    <div class="section">
        <h2>Our Services</h2>
        <div class="services">
            <div class="service-card">
                <div class="service-icon">📶</div>
                <h3>Internet</h3>
                <p>High-speed internet for your home and business needs.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">📺</div>
                <h3>TV</h3>
                <p>Entertainment packages with hundreds of channels.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">📞</div>
                <h3>Phone</h3>
                <p>Reliable home phone service with great features.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">📱</div>
                <h3>Mobile</h3>
                <p>Mobile plans with nationwide coverage.</p>
            </div>
        </div>
    </div>
</div>
@endsection