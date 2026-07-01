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
        }

        /* ─── Hero inner container (uses the same grid as the layout) ─── */
        .hero-cover .container {
            max-width: 1140px;
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

        .wave-a { animation-duration: 18s; animation-delay: 0s; }
        .wave-b { animation-duration: 26s; animation-delay: -4s; }
        .wave-c { animation-duration: 22s; animation-delay: -8s; }
        .wave-d { animation-duration: 30s; animation-delay: -12s; }

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

        .symbol-1 { animation-duration: 12s; }
        .symbol-2 { animation-duration: 18s; animation-delay: -3s; }

        @keyframes float-symbol {
            0% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-15px) rotate(8deg); }
            100% { transform: translateY(10px) rotate(-8deg); }
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
            0% { opacity: 0.2; transform: scale(0.8); }
            50% { opacity: 0.8; transform: scale(1.2); }
            100% { opacity: 0.2; transform: scale(0.8); }
        }

        /* ─── Advantages Section Styling ─── */
        .advantage-card {
            background: var(--panel-bg);
            border: 1px solid var(--panel-border);
            border-radius: 16px;
            padding: 2rem;
            text-align: center;
            transition: var(--transition-smooth);
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        .advantage-card:hover {
            transform: translateY(-5px);
            border-color: var(--panel-border-hover);
            box-shadow: 0 8px 30px rgba(99, 102, 241, 0.15);
        }

        .advantage-card .icon-box {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            background: var(--gradient-glow);
            border: 1px solid rgba(99, 102, 241, 0.25);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            color: var(--color-primary);
            margin-bottom: 1.25rem;
            transition: var(--transition-smooth);
        }

        .advantage-card:hover .icon-box {
            background: var(--gradient-accent);
            color: white;
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3);
            border-color: transparent;
        }

        .advantage-card h3 {
            font-family: var(--font-heading);
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            color: var(--text-primary);
        }

        .advantage-card p {
            font-family: var(--font-body);
            font-size: 0.9rem;
            color: var(--text-secondary);
            line-height: 1.5;
            margin: 0;
        }

        /* ─── Section Headers ─── */
        .section-title {
            font-family: var(--font-heading);
            font-weight: 800;
            font-size: 2.5rem;
            letter-spacing: -1px;
            color: var(--text-primary);
        }

        .section-subtitle {
            font-family: var(--font-body);
            font-size: 1rem;
            color: var(--text-secondary);
            margin-top: 0.5rem;
        }

        /* ─── Product Card Styling ─── */
        .product-card {
            background: var(--panel-bg);
            border: 1px solid var(--panel-border);
            border-radius: 16px;
            padding: 1.75rem;
            position: relative;
            transition: var(--transition-smooth);
            height: 100%;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        .product-card:hover {
            transform: translateY(-5px);
            border-color: var(--panel-border-hover);
            box-shadow: 0 8px 30px rgba(168, 85, 247, 0.15);
        }

        .product-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: var(--gradient-accent);
            color: white;
            font-size: 0.7rem;
            font-weight: 600;
            padding: 0.3rem 0.8rem;
            border-radius: 50px;
            box-shadow: 0 4px 10px rgba(99, 102, 241, 0.2);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .product-icon {
            width: 70px;
            height: 70px;
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid var(--panel-border);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.2rem;
            margin-bottom: 1.5rem;
            transition: var(--transition-smooth);
        }

        .product-card:hover .product-icon {
            border-color: rgba(255, 255, 255, 0.15);
            background: rgba(255, 255, 255, 0.05);
            transform: scale(1.05);
        }

        .product-category {
            font-family: var(--font-body);
            font-size: 0.75rem;
            font-weight: 600;
            color: var(--color-primary);
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .product-title {
            font-family: var(--font-heading);
            font-size: 1.35rem;
            font-weight: 700;
            margin-top: 0.35rem;
            margin-bottom: 0.75rem;
            color: var(--text-primary);
        }

        .product-desc {
            font-family: var(--font-body);
            font-size: 0.9rem;
            color: var(--text-secondary);
            line-height: 1.55;
            margin-bottom: 1.25rem;
        }

        .rating {
            font-size: 0.85rem;
            color: #fbbf24;
        }

        .price-container {
            display: flex;
            flex-direction: column;
        }

        .old-price {
            font-size: 0.85rem;
            color: var(--text-muted);
            text-decoration: line-through;
        }

        .current-price {
            font-size: 1.5rem;
            font-family: var(--font-heading);
            font-weight: 700;
            color: var(--text-primary);
            line-height: 1.1;
        }

        .btn-buy-now {
            background: var(--gradient-accent);
            color: white;
            border: none;
            padding: 0.6rem 1.2rem;
            font-size: 0.9rem;
            font-family: var(--font-heading);
            font-weight: 600;
            border-radius: 8px;
            transition: var(--transition-smooth);
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3);
            text-align: center;
        }

        .btn-buy-now:hover {
            box-shadow: 0 6px 22px rgba(99, 102, 241, 0.5);
            transform: translateY(-2px);
            color: white;
        }

        /* ─── Testimonial Styling ─── */
        .testimonial-card {
            background: var(--panel-bg);
            border: 1px solid var(--panel-border);
            border-radius: 16px;
            padding: 2rem;
            height: 100%;
            display: flex;
            flex-direction: column;
            transition: var(--transition-smooth);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        .testimonial-card:hover {
            border-color: var(--panel-border-hover);
            transform: translateY(-3px);
        }

        .review-text {
            font-family: var(--font-body);
            font-size: 0.95rem;
            color: var(--text-secondary);
            line-height: 1.6;
            font-style: italic;
            margin: 0;
        }

        .testimonial-card .user-info {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .testimonial-card .avatar {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: var(--gradient-accent);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: var(--font-heading);
            font-weight: 600;
            font-size: 1.1rem;
            box-shadow: 0 4px 10px rgba(99, 102, 241, 0.3);
        }

        .user-name {
            font-family: var(--font-heading);
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--text-primary);
            margin: 0;
        }

        .user-status {
            font-size: 0.75rem;
            color: var(--text-muted);
        }

        /* ─── FAQ Section Styling ─── */
        .faq-list {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .faq-item {
            background: var(--panel-bg);
            border: 1px solid var(--panel-border);
            border-radius: 12px;
            overflow: hidden;
            transition: var(--transition-smooth);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        .faq-item summary {
            font-family: var(--font-heading);
            font-size: 1.05rem;
            font-weight: 600;
            color: var(--text-primary);
            padding: 1.25rem 1.5rem;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            list-style: none;
            user-select: none;
            transition: var(--transition-fast);
        }

        .faq-item summary::-webkit-details-marker {
            display: none;
        }

        .faq-item summary:hover {
            background: rgba(255, 255, 255, 0.02);
            color: white;
        }

        .faq-chevron {
            font-size: 0.9rem;
            color: var(--text-secondary);
            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .faq-item[open] {
            border-color: var(--panel-border-hover);
        }

        .faq-item[open] summary {
            border-bottom: 1px solid var(--panel-border);
        }

        .faq-item[open] .faq-chevron {
            transform: rotate(180deg);
            color: var(--color-primary);
        }

        .faq-content {
            padding: 1.25rem 1.5rem;
            font-family: var(--font-body);
            font-size: 0.95rem;
            color: var(--text-secondary);
            line-height: 1.6;
            background: rgba(0, 0, 0, 0.1);
        }

        .faq-content p {
            margin: 0;
        }

        /* ─── Footer CTA Styling ─── */
        .cta-box {
            background: linear-gradient(135deg, rgba(20, 27, 45, 0.9) 0%, rgba(11, 15, 25, 0.9) 100%);
            border: 1px solid var(--panel-border);
            border-radius: 24px;
            padding: 4rem 2rem;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        .cta-box::before {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(99, 102, 241, 0.15) 0%, transparent 70%);
            top: -150px;
            left: -150px;
            pointer-events: none;
            filter: blur(40px);
        }

        .cta-box::after {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(168, 85, 247, 0.12) 0%, transparent 70%);
            bottom: -150px;
            right: -150px;
            pointer-events: none;
            filter: blur(40px);
        }

        .cta-title {
            font-family: var(--font-heading);
            font-size: 2.3rem;
            font-weight: 800;
            color: var(--text-primary);
            letter-spacing: -0.5px;
        }

        .cta-desc {
            font-family: var(--font-body);
            font-size: 1.05rem;
            color: var(--text-secondary);
            max-width: 600px;
            margin: 1rem auto 0;
            line-height: 1.6;
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
            .section-title {
                font-size: 2rem;
            }
            .cta-title {
                font-size: 1.8rem;
            }
        }

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

    {{-- KEY ADVANTAGES SECTION --}}
    <section class="advantages-section py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="icon-box">
                            <i class="bi bi-lightning-charge-fill"></i>
                        </div>
                        <h3>Instant Delivery</h3>
                        <p>Receive your activation key in under 2 minutes via email directly after checkout.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="icon-box">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h3>100% Genuine</h3>
                        <p>All keys are sourced directly from authorized distributors. Full warranty guaranteed.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="icon-box">
                            <i class="bi bi-arrow-repeat"></i>
                        </div>
                        <h3>Lifetime Support</h3>
                        <p>Enjoy free technical assistance and lifetime activation updates for your software.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card">
                        <div class="icon-box">
                            <i class="bi bi-wallet2"></i>
                        </div>
                        <h3>Secure Payments</h3>
                        <p>Pay with confidence using standard encryption and local secure payment gateways.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FEATURED PRODUCTS SECTION --}}
    <section class="products-section py-5">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title">Featured <span class="gradient-text">Licenses</span></h2>
                <p class="section-subtitle">Premium software at unbeatable prices. Activation guaranteed.</p>
            </div>
            
            <div class="row g-4">
                {{-- Product 1: Office 365 Pro --}}
                <div class="col-md-6 col-lg-4">
                    <div class="product-card">
                        <div class="product-badge">Best Seller</div>
                        <div class="product-icon">
                            <i class="bi bi-microsoft text-danger"></i>
                        </div>
                        <div class="product-body d-flex flex-column h-100">
                            <span class="product-category">OFFICE SUITE</span>
                            <h3 class="product-title">Microsoft Office 365 Pro</h3>
                            <p class="product-desc">5 Devices (PC/Mac/Mobile) + 1TB OneDrive Cloud Storage. Lifetime activation.</p>
                            
                            <div class="rating mb-3">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <span class="ms-2 text-muted">(184)</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <div class="price-container">
                                    <span class="old-price">$59.99</span>
                                    <span class="current-price">$14.99</span>
                                </div>
                                <a href="#" class="btn btn-buy-now">
                                    <span>Buy Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Product 2: Windows 11 Pro --}}
                <div class="col-md-6 col-lg-4">
                    <div class="product-card">
                        <div class="product-badge">Popular</div>
                        <div class="product-icon">
                            <i class="bi bi-windows text-primary"></i>
                        </div>
                        <div class="product-body d-flex flex-column h-100">
                            <span class="product-category">OPERATING SYSTEM</span>
                            <h3 class="product-title">Windows 11 Professional</h3>
                            <p class="product-desc">Genuine retail product key. 32/64-bit support. Full multi-language activation.</p>
                            
                            <div class="rating mb-3">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span class="ms-2 text-muted">(92)</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <div class="price-container">
                                    <span class="old-price">$129.99</span>
                                    <span class="current-price">$19.99</span>
                                </div>
                                <a href="#" class="btn btn-buy-now">
                                    <span>Buy Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Product 3: CapCut Pro --}}
                <div class="col-md-6 col-lg-4">
                    <div class="product-card">
                        <div class="product-badge">Hot Deal</div>
                        <div class="product-icon">
                            <i class="bi bi-camera-video text-warning"></i>
                        </div>
                        <div class="product-body d-flex flex-column h-100">
                            <span class="product-category">VIDEO CREATIVE</span>
                            <h3 class="product-title">CapCut Pro (1 Year)</h3>
                            <p class="product-desc">Access to all premium effects, transitions, AI voiceovers, and templates.</p>
                            
                            <div class="rating mb-3">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <span class="ms-2 text-muted">(67)</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <div class="price-container">
                                    <span class="old-price">$99.99</span>
                                    <span class="current-price">$24.99</span>
                                </div>
                                <a href="#" class="btn btn-buy-now">
                                    <span>Buy Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CUSTOMER TESTIMONIALS SECTION --}}
    <section class="testimonials-section py-5">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title">What Our <span class="gradient-text">Customers Say</span></h2>
                <p class="section-subtitle">Check out these genuine reviews from verified license activation buyers.</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="rating mb-3">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="review-text">"Outstanding service! I bought the Office 365 license key and it arrived in my inbox within a minute. Activation was successful and easy."</p>
                        <div class="user-info mt-4">
                            <div class="avatar">S</div>
                            <div>
                                <h4 class="user-name">Sok Chea</h4>
                                <span class="user-status"><i class="bi bi-patch-check-fill text-success"></i> Verified Buyer</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="rating mb-3">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="review-text">"Windows 11 activation worked perfectly. I had a slight issue with phone activation but support helped me solve it in a minute."</p>
                        <div class="user-info mt-4">
                            <div class="avatar">V</div>
                            <div>
                                <h4 class="user-name">Vireak Both</h4>
                                <span class="user-status"><i class="bi bi-patch-check-fill text-success"></i> Verified Buyer</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="rating mb-3">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="review-text">"I buy keys for my agency clients here regularly. They are 100% genuine and never fail to activate. Strongly recommend!"</p>
                        <div class="user-info mt-4">
                            <div class="avatar">M</div>
                            <div>
                                <h4 class="user-name">Maly Roth</h4>
                                <span class="user-status"><i class="bi bi-patch-check-fill text-success"></i> Verified Buyer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ SECTION (Pure HTML/CSS Collapse) --}}
    <section class="faq-section py-5">
        <div class="container" style="max-width: 800px;">
            <div class="section-header text-center mb-5">
                <h2 class="section-title">Frequently <span class="gradient-text">Asked Questions</span></h2>
                <p class="section-subtitle">Got questions? We've got answers.</p>
            </div>
            
            <div class="faq-list">
                <details class="faq-item">
                    <summary>
                        <span>How long does delivery take?</span>
                        <i class="bi bi-chevron-down faq-chevron"></i>
                    </summary>
                    <div class="faq-content">
                        <p>Our delivery system is fully automated. You will receive your license key and installation instructions via email in under 2 minutes right after checkout.</p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary>
                        <span>Are the licenses permanent?</span>
                        <i class="bi bi-chevron-down faq-chevron"></i>
                    </summary>
                    <div class="faq-content">
                        <p>Yes, all Windows and Office retail keys sold on our website are lifetime licenses unless specified otherwise (e.g. subscription-based packages).</p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary>
                        <span>What if my key fails to activate?</span>
                        <i class="bi bi-chevron-down faq-chevron"></i>
                    </summary>
                    <div class="faq-content">
                        <p>We guarantee 100% activation. In the rare event a key fails, please contact our support email with a screenshot of the error, and we will issue a replacement key immediately.</p>
                    </div>
                </details>
            </div>
        </div>
    </section>

    {{-- FOOTER CTA SECTION --}}
    <section class="cta-section py-5">
        <div class="container">
            <div class="cta-box text-center">
                <h2 class="cta-title">Upgrade Your Digital Experience Today</h2>
                <p class="cta-desc">Get access to premium tools, genuine activations, and full warranty support.</p>
                <div class="mt-4">
                    <a href="#" class="btn btn-primary-glow btn-lg">
                        <span>Browse All Products</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection