@extends('layouts.MainLayout')
@section('title', 'Digital Store Services')

{{-- ============================================= --}}
{{-- PUSH CUSTOM STYLES (including fonts)         --}}
{{-- ============================================= --}}
@push('styles')
    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        /* ─── Root variables (matching the original design) ─── */
        :root {
            --font-heading: 'Outfit', sans-serif;
            --font-body: 'Inter', sans-serif;

            --bg-color: #0b0f19;
            --panel-bg: rgba(20, 27, 45, 0.7);
            --panel-border: rgba(255, 255, 255, 0.08);
            --panel-border-hover: rgba(255, 255, 255, 0.16);

            --text-primary: #f3f4f6;
            --text-secondary: #9ca3af;
            --text-muted: #6b7280;

            --color-primary: #6366f1;
            --color-primary-rgb: 99, 102, 241;
            --color-secondary: #a855f7;
            --color-accent: #f43f5e;

            --gradient-accent: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
            --gradient-glow: linear-gradient(135deg, rgba(99, 102, 241, 0.15) 0%, rgba(168, 85, 247, 0.15) 100%);

            --transition-smooth: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            --transition-fast: all 0.2s ease;
        }

        /* ─── Make the hero full‑width (break out of the layout's container) ─── */
        .hero-cover {
            margin-left: calc(-50vw + 50%);
            margin-right: calc(-50vw + 50%);
            padding-left: calc(50vw - 50%);
            padding-right: calc(50vw - 50%);
            background-color: var(--bg-color);
            position: relative;
            overflow: hidden;
            padding-top: 4rem;
            padding-bottom: 5rem;
            z-index: 1;
            /* ensure it sits above the layout's background */
        }

        /* ─── Hero inner container (uses the same grid as the layout) ─── */
        .hero-cover .container {
            max-width: 1140px;
            /* or whatever your layout uses */
            padding-left: 15px;
            padding-right: 15px;
        }

        /* ─── Ambient glows ─── */
        .hero-cover::before {
            content: '';
            position: absolute;
            width: 40vw;
            height: 40vw;
            top: 10%;
            right: 5%;
            background: radial-gradient(circle, rgba(99, 102, 241, 0.12) 0%, transparent 70%);
            pointer-events: none;
            filter: blur(80px);
            z-index: 1;
        }

        .hero-cover::after {
            content: '';
            position: absolute;
            width: 30vw;
            height: 30vw;
            bottom: 5%;
            left: 5%;
            background: radial-gradient(circle, rgba(168, 85, 247, 0.08) 0%, transparent 70%);
            pointer-events: none;
            filter: blur(60px);
            z-index: 1;
        }

        .hero-content-column,
        .hero-image-column {
            position: relative;
            z-index: 2;
        }

        /* ─── Badge ─── */
        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            padding: 0.5rem 1rem;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid var(--panel-border);
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 500;
            letter-spacing: 0.5px;
            color: var(--text-primary);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .pulse-dot {
            width: 8px;
            height: 8px;
            background-color: var(--color-primary);
            border-radius: 50%;
            position: relative;
            display: inline-block;
        }

        .pulse-dot::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: var(--color-primary);
            border-radius: 50%;
            animation: pulse-dot-wave 1.6s infinite ease-in-out;
        }

        @keyframes pulse-dot-wave {
            0% {
                transform: scale(1);
                opacity: 1;
            }
            100% {
                transform: scale(2.5);
                opacity: 0;
            }
        }

        /* ─── Title ─── */
        .hero-title {
            font-family: var(--font-heading);
            font-weight: 800;
            font-size: 3.5rem;
            line-height: 1.15;
            letter-spacing: -1.5px;
            color: var(--text-primary);
        }

        @media (max-width: 767.98px) {
            .hero-title {
                font-size: 2.5rem;
            }
        }

        .gradient-text {
            background: var(--gradient-accent);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-description {
            font-family: var(--font-body);
            font-size: 1.1rem;
            line-height: 1.6;
            color: var(--text-secondary);
            max-width: 540px;
        }

        /* ─── Buttons ─── */
        .btn-primary-glow {
            background: var(--gradient-accent);
            color: white;
            border: none;
            padding: 0.8rem 1.8rem;
            font-size: 1rem;
            font-family: var(--font-heading);
            font-weight: 600;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(99, 102, 241, 0.4);
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: var(--transition-smooth);
            text-decoration: none;
        }

        .btn-primary-glow:hover {
            box-shadow: 0 8px 30px rgba(99, 102, 241, 0.6);
            transform: translateY(-2px);
            color: white;
        }

        .btn-primary-glow i {
            transition: transform 0.2s ease;
        }

        .btn-primary-glow:hover i {
            transform: translateX(4px);
        }

        .btn-secondary-outline {
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid var(--panel-border);
            color: var(--text-primary);
            padding: 0.8rem 1.8rem;
            font-size: 1rem;
            font-family: var(--font-heading);
            font-weight: 600;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            transition: var(--transition-smooth);
            text-decoration: none;
        }

        .btn-secondary-outline:hover {
            background: rgba(255, 255, 255, 0.06);
            border-color: var(--panel-border-hover);
            color: var(--text-primary);
            transform: translateY(-2px);
        }

        /* ─── Stats ─── */
        .hero-stats {
            border-color: rgba(255, 255, 255, 0.08) !important;
        }

        .stat-value {
            font-family: var(--font-heading);
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text-primary);
            background: linear-gradient(135deg, #ffffff 0%, #a855f7 180%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .stat-label {
            font-family: var(--font-body);
            font-size: 0.8rem;
            color: var(--text-muted);
            margin-top: 0.2rem;
        }

        /* ─── Tags / Badges ─── */
        .hero-tags .badge {
            font-weight: 500;
            font-size: 0.75rem;
            border: 1px solid rgba(255, 255, 255, 0.08);
            background: rgba(255, 255, 255, 0.03);
        }

        /* ─── SVG Background ─── */
        .svg-bg-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
            pointer-events: none;
        }

        .svg-bg {
            width: 100%;
            height: 100%;
            display: block;
        }

        .grid-layer {
            animation: move-grid 40s infinite linear;
        }

        @keyframes move-grid {
            0% {
                transform: translate(0, 0);
            }
            100% {
                transform: translate(80px, 80px);
            }
        }

        .neon-wave {
            stroke-dasharray: 400 800;
            animation: neon-flow 25s infinite linear;
            transform-origin: center;
        }

        .wave-a {
            animation-duration: 18s;
            animation-delay: 0s;
        }
        .wave-b {
            animation-duration: 26s;
            animation-delay: -4s;
        }
        .wave-c {
            animation-duration: 22s;
            animation-delay: -8s;
        }
        .wave-d {
            animation-duration: 30s;
            animation-delay: -12s;
        }

        @keyframes neon-flow {
            0% {
                stroke-dashoffset: 0;
                transform: translateY(0) scaleY(1);
            }
            50% {
                transform: translateY(-20px) scaleY(1.04) skewX(0.5deg);
            }
            100% {
                stroke-dashoffset: -1200;
                transform: translateY(0) scaleY(1);
            }
        }

        .floating-symbol {
            animation: float-symbol 15s infinite ease-in-out alternate;
        }

        .symbol-1 {
            animation-duration: 12s;
        }
        .symbol-2 {
            animation-duration: 18s;
            animation-delay: -3s;
        }

        @keyframes float-symbol {
            0% {
                transform: translateY(0px) rotate(0deg);
            }
            50% {
                transform: translateY(-15px) rotate(8deg);
            }
            100% {
                transform: translateY(10px) rotate(-8deg);
            }
        }

        .sparkle {
            animation: flash-sparkle 4s infinite ease-in-out alternate;
            transform-origin: center;
        }
        .sparkle-1 { animation-duration: 3s; animation-delay: 0s; }
        .sparkle-2 { animation-duration: 5s; animation-delay: 1s; }
        .sparkle-3 { animation-duration: 4s; animation-delay: 2s; }
        .sparkle-4 { animation-duration: 6s; animation-delay: 0.5s; }
        .sparkle-5 { animation-duration: 3.5s; animation-delay: 1.5s; }
        .sparkle-6 { animation-duration: 4.5s; animation-delay: 2.5s; }

        @keyframes flash-sparkle {
            0% {
                opacity: 0.2;
                transform: scale(0.8);
            }
            50% {
                opacity: 0.8;
                transform: scale(1.2);
            }
            100% {
                opacity: 0.2;
                transform: scale(0.8);
            }
        }

        /* ─── Responsive tweaks ─── */
        @media (max-width: 991.98px) {
            .hero-cover {
                padding-top: 2rem;
                padding-bottom: 3rem;
            }
            .min-vh-90 {
                min-height: auto;
            }
        }

        @media (max-width: 767.98px) {
            .hero-description {
                max-width: 100%;
            }
        }

        /* ─── Ensure the layout's body background is not overridden ─── */
        body {
            background-color: var(--bg-color);
        }
    </style>
@endpush

@section('content')
    <section class="hero-cover" id="hero-cover-page">
        {{-- Animated SVG Background --}}
        <div class="svg-bg-container">
            <svg class="svg-bg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 800" preserveAspectRatio="xMidYMid slice">
                <defs>
                    <linearGradient id="neon-grad-1" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="#6366f1" stop-opacity="0.25" />
                        <stop offset="50%" stop-color="#a855f7" stop-opacity="0.15" />
                        <stop offset="100%" stop-color="#6366f1" stop-opacity="0.05" />
                    </linearGradient>
                    <linearGradient id="neon-grad-2" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="#a855f7" stop-opacity="0.2" />
                        <stop offset="50%" stop-color="#f43f5e" stop-opacity="0.15" />
                        <stop offset="100%" stop-color="#a855f7" stop-opacity="0.05" />
                    </linearGradient>
                    <linearGradient id="neon-grad-3" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="#06b6d4" stop-opacity="0.2" />
                        <stop offset="50%" stop-color="#6366f1" stop-opacity="0.1" />
                        <stop offset="100%" stop-color="#06b6d4" stop-opacity="0.05" />
                    </linearGradient>
                    <pattern id="grid-pattern" width="80" height="80" patternUnits="userSpaceOnUse">
                        <path d="M 80 0 L 0 0 0 80" fill="none" stroke="rgba(255, 255, 255, 0.015)" stroke-width="1" />
                    </pattern>
                </defs>

                <rect width="100%" height="100%" fill="url(#grid-pattern)" class="grid-layer" />

                <g stroke-width="2.5" fill="none">
                    <path d="M 0 350 C 300 150, 600 550, 900 350 C 1100 200, 1300 500, 1440 350" stroke="url(#neon-grad-1)" class="neon-wave wave-a" />
                    <path d="M 0 420 C 400 620, 800 220, 1100 470 C 1300 570, 1400 370, 1440 420" stroke="url(#neon-grad-2)" class="neon-wave wave-b" />
                    <path d="M 0 280 C 350 430, 700 80, 1050 330 C 1250 480, 1350 230, 1440 280" stroke="url(#neon-grad-3)" class="neon-wave wave-c" />
                    <path d="M 0 490 C 300 340, 750 640, 1100 340 C 1280 190, 1380 440, 1440 490" stroke="url(#neon-grad-1)" class="neon-wave wave-d" />
                </g>

                <g fill="#ffffff">
                    <circle cx="250" cy="180" r="1.5" class="sparkle sparkle-1" />
                    <circle cx="650" cy="480" r="2" class="sparkle sparkle-2" />
                    <circle cx="950" cy="220" r="1.5" class="sparkle sparkle-3" />
                    <circle cx="1250" cy="420" r="2.5" class="sparkle sparkle-4" />
                    <circle cx="150" cy="580" r="1.5" class="sparkle sparkle-5" />
                    <circle cx="800" cy="120" r="2" class="sparkle sparkle-6" />
                </g>

                <g transform="translate(180, 220)">
                    <g stroke="rgba(99, 102, 241, 0.22)" stroke-width="1.5" fill="none" class="floating-symbol symbol-1">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                    </g>
                </g>
                <g transform="translate(1200, 180)">
                    <g stroke="rgba(168, 85, 247, 0.22)" stroke-width="1.5" fill="none" class="floating-symbol symbol-2">
                        <path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4" />
                    </g>
                </g>
            </svg>
        </div>

        <div class="container">
            <div class="row align-items-center min-vh-90 py-5">
                <div class="col-lg-8 col-xl-7 text-start hero-content-column">
                    <div class="hero-badge">
                        <span class="pulse-dot"></span>
                        <span>Authorized License Reseller</span>
                    </div>
                    <h1 class="hero-title mt-4">
                        Genuine Software Keys. <br>Delivered <span class="gradient-text">Instantly.</span>
                    </h1>
                    <p class="hero-description mt-3">
                        Unlock genuine lifetime product keys for MS Office 365, Office 2019, Windows OS, CapCut Pro, premium VPNs, and AI tools. Real-time digital activation and full warranty.
                    </p>
                    <div class="hero-actions mt-4 d-flex gap-3">
                        <a href="#" class="btn btn-primary-glow btn-lg">
                            <span>Browse Catalog</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        <a href="#" class="btn btn-secondary-outline btn-lg">
                            <span>Track Order</span>
                        </a>
                    </div>

                    <div class="hero-tags mt-4 d-flex flex-wrap gap-2">
                        <span class="badge bg-secondary bg-opacity-25 text-light border border-secondary px-3 py-2"><i class="bi bi-microsoft text-danger"></i> Office 365 / 2019</span>
                        <span class="badge bg-secondary bg-opacity-25 text-light border border-secondary px-3 py-2"><i class="bi bi-windows text-primary"></i> Windows OS</span>
                        <span class="badge bg-secondary bg-opacity-25 text-light border border-secondary px-3 py-2"><i class="bi bi-camera-video text-warning"></i> CapCut Pro</span>
                        <span class="badge bg-secondary bg-opacity-25 text-light border border-secondary px-3 py-2"><i class="bi bi-shield-check text-success"></i> Premium VPN</span>
                        <span class="badge bg-secondary bg-opacity-25 text-light border border-secondary px-3 py-2"><i class="bi bi-robot text-info"></i> AI Tools</span>
                    </div>

                    <div class="row mt-5 pt-4 border-top border-secondary-subtle hero-stats">
                        <div class="col-4">
                            <div class="stat-value">100%</div>
                            <div class="stat-label">Genuine Keys</div>
                        </div>
                        <div class="col-4">
                            <div class="stat-value">&lt;2 Mins</div>
                            <div class="stat-label">Email Delivery</div>
                        </div>
                        <div class="col-4">
                            <div class="stat-value">4.9/5</div>
                            <div class="stat-label">Trust Score</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection