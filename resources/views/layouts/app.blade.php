<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Add CSRF Token - important for forms and JS requests --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $pageTitle ?? config('app.name', 'Laravel') }}</title>

    {{-- Google Fonts & Font Awesome can stay as external links --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- === CORRECT ASSET LOADING using Vite === --}}
    {{-- Remove the old asset() link for style.css --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}

    {{-- Complete CSS with ALL styles - guaranteed to work --}}
    <link rel="stylesheet" href="{{ asset('css/complete.css') }}" type="text/css">
    
    {{-- INLINE STYLES TO FIX LAYOUT IMMEDIATELY --}}
    <style>
        /* Force homepage styles to work */
        .hero-section {
            background: linear-gradient(135deg, #005eb8 0%, #00a9e0 100%) !important;
            color: white !important;
            padding: 4rem 0 !important;
            text-align: center !important;
            margin-bottom: 0 !important;
        }
        
        .hero-title {
            font-size: 3rem !important;
            font-weight: 700 !important;
            margin-bottom: 1rem !important;
            color: white !important;
        }
        
        .hero-subtitle {
            font-size: 1.25rem !important;
            opacity: 0.9 !important;
            margin-bottom: 0 !important;
            color: white !important;
        }
        
        .main-content {
            background-color: #f8f9fa !important;
            min-height: 60vh !important;
        }
        
        .content-section {
            padding: 4rem 0 !important;
            background-color: white !important;
            margin-bottom: 2rem !important;
        }
        
        .content-section:nth-child(even) {
            background-color: #f8f9fa !important;
        }
        
        .section-grid {
            display: grid !important;
            grid-template-columns: 1fr 1fr !important;
            gap: 4rem !important;
            align-items: center !important;
        }
        
        .section-grid.reverse {
            direction: rtl !important;
        }
        
        .section-grid.reverse > * {
            direction: ltr !important;
        }
        
        .section-title {
            font-size: 2.5rem !important;
            font-weight: 600 !important;
            color: #333 !important;
            margin-bottom: 1.5rem !important;
            line-height: 1.2 !important;
        }
        
        .section-description {
            font-size: 1.125rem !important;
            color: #666 !important;
            margin-bottom: 2rem !important;
            line-height: 1.6 !important;
        }
        
        .action-buttons {
            display: flex !important;
            gap: 1rem !important;
            margin-bottom: 1.5rem !important;
            flex-wrap: wrap !important;
        }
        
        .section-footer {
            font-size: 0.95rem !important;
            color: #666 !important;
            margin-bottom: 0 !important;
        }
        
        .link-primary {
            color: #005eb8 !important;
            text-decoration: none !important;
            font-weight: 500 !important;
        }
        
        .link-primary:hover {
            color: #00a9e0 !important;
            text-decoration: underline !important;
        }
        
        .section-disclaimer {
            font-size: 0.875rem !important;
            color: #6b7280 !important;
            margin-top: 1rem !important;
            margin-bottom: 0 !important;
        }
        
        .section-image {
            text-align: center !important;
        }
        
        .section-img {
            max-width: 100% !important;
            height: auto !important;
            border-radius: 8px !important;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1) !important;
        }
        
        .services-section {
            background-color: white !important;
        }
        
        .services-grid {
            display: grid !important;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)) !important;
            gap: 2rem !important;
            margin-top: 3rem !important;
        }
        
        .service-card {
            text-align: center !important;
            padding: 2rem 1.5rem !important;
            background-color: white !important;
            border-radius: 12px !important;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1) !important;
            transition: transform 0.3s ease, box-shadow 0.3s ease !important;
        }
        
        .service-card:hover {
            transform: translateY(-4px) !important;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15) !important;
        }
        
        .service-icon {
            width: 80px !important;
            height: 80px !important;
            background: linear-gradient(135deg, #005eb8, #00a9e0) !important;
            border-radius: 50% !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            margin: 0 auto 1.5rem !important;
        }
        
        .service-icon i {
            font-size: 2rem !important;
            color: white !important;
        }
        
        .service-title {
            font-size: 1.5rem !important;
            font-weight: 600 !important;
            color: #333 !important;
            margin-bottom: 1rem !important;
        }
        
        .service-description {
            color: #666 !important;
            line-height: 1.6 !important;
            margin-bottom: 0 !important;
        }
        
        /* Footer improvements */
        .spectrum-footer {
            background: #041E42 !important;
            color: #f0f0f0 !important;
            padding: 3rem 0 1rem 0 !important;
            font-size: 0.9rem !important;
            margin-top: 3rem !important;
        }
        
        .footer-nav-columns {
            display: grid !important;
            grid-template-columns: repeat(3, 1fr) !important;
            gap: 2rem !important;
            margin-bottom: 2rem !important;
            padding-bottom: 2rem !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important;
        }
        
        .footer-nav-col h4 {
            font-size: 1rem !important;
            font-weight: 600 !important;
            color: white !important;
            margin-bottom: 1rem !important;
            text-transform: uppercase !important;
            letter-spacing: 0.5px !important;
        }
        
        .footer-nav-col ul {
            list-style: none !important;
            padding: 0 !important;
            margin: 0 !important;
        }
        
        .footer-nav-col ul li {
            margin-bottom: 0.5rem !important;
        }
        
        .footer-nav-col ul li a {
            color: #f0f0f0 !important;
            text-decoration: none !important;
            font-size: 0.9rem !important;
            transition: color 0.2s ease !important;
        }
        
        .footer-nav-col ul li a:hover {
            color: white !important;
            text-decoration: underline !important;
        }
        
        .footer-social-icons {
            display: flex !important;
            gap: 1rem !important;
            margin-top: 1rem !important;
        }
        
        .footer-social-icons a {
            width: 40px !important;
            height: 40px !important;
            background-color: rgba(255, 255, 255, 0.1) !important;
            border-radius: 50% !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            color: white !important;
            text-decoration: none !important;
            transition: background-color 0.2s ease !important;
        }
        
        .footer-social-icons a:hover {
            background-color: #005eb8 !important;
        }
        
        .footer-bottom-section {
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            gap: 1rem !important;
            padding-top: 1.5rem !important;
            text-align: center !important;
            border-top: 1px solid rgba(255, 255, 255, 0.1) !important;
        }
        
        .footer-bottom-logo img {
            max-height: 30px !important;
            filter: brightness(0) invert(1) !important;
        }
        
        .footer-bottom-links {
            font-size: 0.8rem !important;
            color: rgba(255, 255, 255, 0.7) !important;
            line-height: 1.5 !important;
        }
        
        .footer-bottom-links a {
            color: rgba(255, 255, 255, 0.7) !important;
            text-decoration: none !important;
        }
        
        .footer-bottom-links a:hover {
            color: white !important;
            text-decoration: underline !important;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem !important;
            }
            
            .hero-subtitle {
                font-size: 1rem !important;
            }
            
            .section-grid {
                grid-template-columns: 1fr !important;
                gap: 2rem !important;
            }
            
            .section-title {
                font-size: 2rem !important;
            }
            
            .action-buttons {
                justify-content: center !important;
            }
            
            .services-grid {
                grid-template-columns: 1fr !important;
            }
            
            .footer-nav-columns {
                grid-template-columns: 1fr !important;
                gap: 1.5rem !important;
            }
        }
        
        @media (max-width: 480px) {
            .hero-section {
                padding: 2rem 0 !important;
            }
            
            .content-section {
                padding: 2rem 0 !important;
            }
            
            .action-buttons {
                flex-direction: column !important;
                align-items: center !important;
            }
            
            .action-buttons .btn {
                width: 100% !important;
                max-width: 300px !important;
            }
        }
    </style>

    {{-- Stack for page-specific styles --}}
    @stack('styles')
</head>
<body>

    {{-- Include the PUBLIC header partial --}}
    @include('partials.public_header')

    <main>
        {{-- Main content area for child views --}}
        @yield('content')
    </main>

    {{-- Include the PUBLIC footer partial --}}
    @include('partials.public_footer')

    {{-- Stack for page-specific scripts --}}
    @stack('scripts')

    {{-- NOTE: @vite includes app.js, so no separate <script> tag for it needed here --}}
</body>
</html>