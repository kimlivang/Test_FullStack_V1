@extends('layouts.MainLayout')
@section('title', 'Digital Store Services')

@section('content')
{{-- ===== HERO ===== --}}
<section class="home-hero d-flex align-items-center py-5" id="hero-cover-page">
    <div class="container py-lg-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-10 col-xl-8">
                <div class="hero-eyebrow mb-3">👋 Hey guys, Welcome to</div>
                <h1 class="hero-title mb-4">
                    Digital <br> Store Service
                    <span class="gradient-text">Instantly.</span>
                </h1>

                <div class="hero-actions d-grid d-sm-flex gap-3 mt-4">
                    <a href="#" class="btn btn-primary-glow btn-lg"
                    style="color: white; border: 0px solid #040608; border-radius: 25px;">
                    <span>Browse All Products</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
                <a href="#" class="btn btn-primary-glow btn-lg"
                style="color: white; border: 0px solid #040608; border-radius: 25px;">
                <span>About Me</span>
                <i class="bi bi-person-lines-fill"></i>
            </a>
        </div>

        <div class="hero-tags d-flex flex-wrap gap-2 mt-4">
            <span class="badge"><i class="bi bi-microsoft text-danger"></i> Office 365 / 2019</span>
            <span class="badge"><i class="bi bi-windows text-primary"></i> Windows OS</span>
            <span class="badge"><i class="bi bi-camera-video text-warning"></i> CapCut Pro</span>
            <span class="badge"><i class="bi bi-shield-check text-success"></i> Premium VPN</span>
            <span class="badge"><i class="bi bi-cpu text-info"></i> AI Tools</span>
            <span class="badge"> Etc... </span>
        </div>

        <div class="hero-stats row g-3 mt-5 pt-4 text-center text-sm-start">
            <div class="col-4">
                <div class="stat-value">100%</div>
                <div class="stat-label">Genuine Keys</div>
            </div>
            <div class="col-4">
                <div class="stat-value">&lt;Delivery Auto</div>
                <div class="stat-label">SMS or Email Delivery</div>
            </div>
            <div class="col-4">
                <div class="stat-value">24/7</div>
                <div class="stat-label">Satus Support</div>
            </div>
        </div>
    </div>
</div>
</div>
</section>

{{-- ===== BROWSE BY CATEGORY ===== --}}
<section class="section-padding" id="categories">
    <div class="container">
        <div class="row align-items-end mb-5">
            <div class="col-lg-7">
                <span class="section-label"><i class="bi bi-grid me-1"></i> Explore</span>
                <h2 class="section-title">Browse <span class="gradient-text">by Category</span></h2>
            </div>
        </div>

        <div class="row g-4">

            {{-- Category 1 --}}
            <div class="col-6 col-md-4 col-xl-3">
                <a href="{{ route('categories', 'office-suite') }}" class="category-card text-decoration-none">
                    <div class="category-icon-wrap" style="background:rgba(99,102,241,0.15); color:var(--color-primary);">
                        <i class="bi bi-microsoft"></i>
                    </div>
                    <div class="category-body">
                        <h5 class="category-name">Office Suite</h5>
                        
                    </div>
                </a>
            </div>

            {{-- Category 2 --}}
            <div class="col-6 col-md-4 col-xl-3">
                <a href="{{ route('categories', 'windows-os') }}" class="category-card text-decoration-none">
                    <div class="category-icon-wrap" style="background:rgba(20,184,166,0.15); color:var(--color-secondary);">
                        <i class="bi bi-windows"></i>
                    </div>
                    <div class="category-body">
                        <h5 class="category-name">Windows OS</h5>
                        
                    </div>
                </a>
            </div>

            {{-- Category 3 --}}
            <div class="col-6 col-md-4 col-xl-3">
                <a href="{{ route('categories', 'video-creative') }}" class="category-card text-decoration-none">
                    <div class="category-icon-wrap" style="background:rgba(245,158,11,0.15); color:var(--color-warning);">
                        <i class="bi bi-camera-video"></i>
                    </div>
                    <div class="category-body">
                        <h5 class="category-name">Video & Creative</h5>
                    </div>
                </a>
            </div>

            {{-- Category 4 --}}
            <div class="col-6 col-md-4 col-xl-3">
                <a href="{{ route('categories', 'vpn-security') }}" class="category-card text-decoration-none">
                    <div class="category-icon-wrap" style="background:rgba(244,63,94,0.15); color:var(--color-accent);">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    <div class="category-body">
                        <h5 class="category-name">VPN & Security</h5>
                    </div>
                </a>
            </div>

            {{-- Category 5 --}}
            <div class="col-6 col-md-4 col-xl-3">
                <a href="{{ route('categories', 'ai-tools') }}" class="category-card text-decoration-none">
                    <div class="category-icon-wrap" style="background:rgba(168,85,247,0.15); color:#a855f7;">
                        <i class="bi bi-robot"></i>
                    </div>
                    <div class="category-body">
                        <h5 class="category-name">AI Tools</h5>
                    </div>
                </a>
            </div>

            {{-- Category 6 --}}
            <div class="col-6 col-md-4 col-xl-3">
                <a href="{{ route('categories', 'design-tools') }}" class="category-card text-decoration-none">
                    <div class="category-icon-wrap" style="background:rgba(236,72,153,0.15); color:#ec4899;">
                        <i class="bi bi-palette"></i>
                    </div>
                    <div class="category-body">
                        <h5 class="category-name">Design Tools</h5>
                    </div>
                </a>
            </div>

            {{-- Category 7 --}}
            <div class="col-6 col-md-4 col-xl-3">
                <a href="{{ route('categories', 'developer') }}" class="category-card text-decoration-none">
                    <div class="category-icon-wrap" style="background:rgba(34,197,94,0.15); color:#22c55e;">
                        <i class="bi bi-code-slash"></i>
                    </div>
                    <div class="category-body">
                        <h5 class="category-name">Developer</h5>
                    </div>
                </a>
            </div>

            {{-- Category 8 --}}
            <div class="col-6 col-md-4 col-xl-3">
                <a href="{{ route('categories', 'gaming') }}" class="category-card text-decoration-none">
                    <div class="category-icon-wrap" style="background:rgba(249,115,22,0.15); color:#f97316;">
                        <i class="bi bi-controller"></i>
                    </div>
                    <div class="category-body">
                        <h5 class="category-name">Gaming</h5>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

{{-- ===== FEATURED PRODUCTS ===== --}}
<section class="section-padding" id="featured-list">
    <div class="container">

        <div class="row align-items-end mb-5">
            <div class="col-lg-7">
                <span class="section-label"><i class="bi bi-star-fill me-1"></i> Top Picks</span>
                <h2 class="section-title">Featured <span class="gradient-text">Products</span></h2>
                <p class="section-subtitle">Hand-selected genuine licenses – ready to activate.</p>
            </div>
            <div class="col-lg-5 text-lg-end mt-3 mt-lg-0">
                <a href="{{ route('products') }}" class="btn btn-outline-light-custom" style="color: white">
                    View All Products <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        {{-- PRODUCT LIST --}}
<section class="section-padding products-list-section" id="product-list">
  <div class="container">
    <div class="product-list">
      {{-- Product 1 --}}
      <div class="product-list-item">
        <div class="product-thumb">
          <i class="bi bi-microsoft"></i>
          <span class="badge-list">Best Seller</span>
        </div>
        <div class="product-content">
          <span class="product-category">Office Suite</span>
          <h3 class="product-title">Microsoft Office 365 Professional Plus 2026</h3>
          <p class="product-desc">Full offline installer, genuine lifetime license, 1 PC. Instant email delivery.</p>
          <div class="product-price">$29.99</div>
        </div>
        <div class="product-actions">
          <a href="#" class="btn-view-list"><i class="bi bi-eye me-1"></i> View</a>
          <a href="#" class="btn-cart-list"><i class="bi bi-cart-plus me-1"></i> Add to Cart</a>
        </div>
      </div>

      {{-- Product 2 --}}
      <div class="product-list-item">
        <div class="product-thumb accent">
          <i class="bi bi-windows"></i>
          <span class="badge-list">Popular</span>
        </div>
        <div class="product-content">
          <span class="product-category">Windows OS</span>
          <h3 class="product-title">Windows 11 Pro 24H2 Genuine Digital License</h3>
          <p class="product-desc">Supports all languages, lifetime activation, genuine digital license.</p>
          <div class="product-price">$19.99</div>
        </div>
        <div class="product-actions">
          <a href="#" class="btn-view-list"><i class="bi bi-eye me-1"></i> View</a>
          <a href="#" class="btn-cart-list"><i class="bi bi-cart-plus me-1"></i> Add to Cart</a>
        </div>
      </div>

      {{-- Product 3 --}}
      <div class="product-list-item">
        <div class="product-thumb warning">
          <i class="bi bi-camera-video"></i>
        </div>
        <div class="product-content">
          <span class="product-category">Video & Creative</span>
          <h3 class="product-title">CapCut Pro 2026 Lifetime Premium Account</h3>
          <p class="product-desc">No watermark, all pro features unlocked, instant account delivery.</p>
          <div class="product-price">$14.99</div>
        </div>
        <div class="product-actions">
          <a href="#" class="btn-view-list"><i class="bi bi-eye me-1"></i> View</a>
          <a href="#" class="btn-cart-list"><i class="bi bi-cart-plus me-1"></i> Add to Cart</a>
        </div>
      </div>

      {{-- Product 4 --}}
      <div class="product-list-item">
        <div class="product-thumb purple">
          <i class="bi bi-robot"></i>
        </div>
        <div class="product-content">
          <span class="product-category">AI Tools</span>
          <h3 class="product-title">ChatGPT Plus 1‑Year Premium Subscription</h3>
          <p class="product-desc">Priority access, GPT-4, DALL·E, browsing, plugins – 12 months.</p>
          <div class="product-price">$49.99</div>
        </div>
        <div class="product-actions">
          <a href="#" class="btn-view-list"><i class="bi bi-eye me-1"></i> View</a>
          <a href="#" class="btn-cart-list"><i class="bi bi-cart-plus me-1"></i> Add to Cart</a>
        </div>
      </div>
    </div>

        {{-- Bottom CTA --}}
        <div class="text-center mt-5">
            <a href="{{ route('products') }}" class="btn btn-primary-glow btn-lg px-5 py-3">
                <span>Browse All Products</span>
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>

    </div>
</section>

    {{--  Section footer --}}
        <footer class="py-4" style="border-top:1px solid var(--panel-border);">
            <div class="container">
                <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-shop" style="font-size:1.4rem;color:var(--color-secondary);"></i>
                        <span class="fw-bold" style="font-family:var(--font-heading);">DigitalStoreService</span>
                        <span class="text-white small">© 2026</span>
                    </div>
                    <div class="d-flex flex-wrap gap-3 text-muted small">
                        <a href="#" class="text-white text-decoration-none hover-white">Privacy</a>
                        <a href="#" class="text-white text-decoration-none hover-white">Terms</a>
                        <a href="#" class="text-white text-decoration-none hover-white">Support</a>
                        <a href="#" class="text-white text-decoration-none hover-white">Affiliates</a>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-white text-decoration-none hover-white"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white text-decoration-none hover-white"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="text-white text-decoration-none hover-white"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white text-decoration-none hover-white"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        @endsection

        {{-- ===== CSS ===== --}}
        <style>

            /* Exteranal Style */
            @include('pages.css_HomePage.Home_Hero')
            @include('pages.css_HomePage.Home_Category')

            /* Internal Style */
    :root {
        --font-heading: 'Outfit', sans-serif;
        --font-body: 'Inter', sans-serif;
        --bg-color: #0b0f19;
        --panel-border: rgba(255, 255, 255, 0.08);
        --panel-border-hover: rgba(255, 255, 255, 0.15);
        --text-primary: #f8fafc;
        --text-secondary: #a7b0c0;
        --text-muted: #7b8495;
        --color-primary: #6366f1;
        --color-secondary: #14b8a6;
        --color-accent: #f43f5e;
        --color-warning: #f59e0b;
        --gradient-primary: linear-gradient(135deg, #6366f1 0%, #14b8a6 100%);
        --transition-smooth: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        --radius-card: 1rem;
        --radius-btn: 0.75rem;
        --product-title-color: #9bb83c;
    }

    body {
        background-color: var(--bg-color);
        color: var(--text-primary);
        font-family: var(--font-body);
    }

    /* ---------- BREADCRUMB ---------- */
    .breadcrumb-section {
        background: #0f1420;
        padding: 0.8rem 1.5rem;
        margin: 0;
    }
    .breadcrumb {
        margin-bottom: 0;
    }
    .breadcrumb-item a {
        color: var(--text-secondary);
        text-decoration: none;
        font-size: 0.9rem;
    }
    .breadcrumb-item a:hover {
        color: var(--color-secondary);
    }
    .breadcrumb-item.active {
        color: var(--text-primary);
        font-size: 0.9rem;
    }

    /* ---------- SEARCH / FILTER / SORT BAR ---------- */
    .search-filter-bar {
        background: #111827;
        padding: 1.2rem 0;
        border-bottom: 1px solid var(--panel-border);
    }

    /* ===== REVISED SEARCH BOX – WHITE STYLE, NO HOVER ===== */
    .search-box {
        position: relative;
    }
    .search-box .bi-search {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #6b7280;  /* grey icon against white background */
        font-size: 1.1rem;
        pointer-events: none;  /* ensure clicks pass to input */
    }
    .search-box input {
        background: #ffffff;           /* white background */
        border: 1px solid #d1d5db;    /* light border */
        border-radius: 0.5rem;        /* slightly less rounded, clean look */
        color: #111827;               /* dark text for readability */
        padding: 0.7rem 1rem 0.7rem 2.8rem;
        font-size: 0.95rem;
        width: 100%;
        transition: none;             /* NO transition, NO hover effect */
        box-shadow: none;
    }
    .search-box input:focus {
        outline: none;
        border-color: #6366f1;        /* subtle primary border on focus */
        box-shadow: 0 0 0 2px rgba(99,102,241,0.2);
        /* no background change, no color change */
    }
    /* No hover state at all */
    .search-box input:hover {
        background: #ffffff;
        border-color: #d1d5db;
    }

    .view-toggle .btn {
        border-radius: 50%;
        width: 42px;
        height: 42px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        margin-left: 0.4rem;
        background: #1a2236;
        border: 1px solid var(--panel-border);
        color: var(--text-secondary);
    }
    .view-toggle .btn.active,
    .view-toggle .btn:hover {
        background: var(--color-primary);
        color: white;
        border-color: var(--color-primary);
    }

    /* ---------- PRODUCT LIST (horizontal layout) ---------- */
    .products-list-section {
        padding: 2rem 0 4rem;
    }

    .product-list {
        display: flex;
        flex-direction: column;
        gap: 1.25rem;
    }

    .product-list-item {
        display: flex;
        flex-direction: row;
        background: #111827;
        border: 1px solid var(--panel-border);
        border-radius: var(--radius-card);
        padding: 1.25rem 1.5rem;
        transition: var(--transition-smooth);
        align-items: center;
        gap: 1.5rem;
    }

    .product-list-item:hover {
        background: #1a2236;
        border-color: var(--panel-border-hover);
        transform: translateY(-2px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.4);
    }

    /* Icon thumbnail */
    .product-thumb {
        flex: 0 0 120px;
        width: 120px;
        height: 120px;
        border-radius: 0.75rem;
        background: rgba(99, 102, 241, 0.10);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3.2rem;
        color: var(--color-primary);
        position: relative;
        border: 1px solid var(--panel-border);
        transition: var(--transition-smooth);
        overflow: hidden;
    }
    .product-list-item:hover .product-thumb {
        border-color: var(--panel-border-hover);
        transform: scale(1.02);
    }
    .product-thumb.accent { background: rgba(20, 184, 166, 0.10); color: var(--color-secondary); }
    .product-thumb.warning { background: rgba(245, 158, 11, 0.10); color: var(--color-warning); }
    .product-thumb.purple  { background: rgba(168, 85, 247, 0.10); color: #a855f7; }

    .badge-list {
        position: absolute;
        bottom: 8px;
        left: 10px;
        font-size: 0.55rem;
        font-weight: 700;
        text-transform: uppercase;
        background: rgba(255, 255, 255, 0.06);
        padding: 0.15rem 0.55rem;
        border-radius: 4px;
        color: var(--text-muted);
        letter-spacing: 0.5px;
        border: 1px solid var(--panel-border);
    }

    /* Content area */
    .product-content {
        flex: 1;
        min-width: 0;
        display: flex;
        flex-direction: column;
        gap: 0.4rem;
    }

    .product-category {
        display: inline-block;
        width: fit-content;
        font-size: 0.7rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        color: var(--color-secondary);
        background: rgba(20, 184, 166, 0.12);
        padding: 0.15rem 0.7rem;
        border-radius: 999px;
    }

    .product-title {
        font-family: var(--font-heading);
        font-weight: 700;
        font-size: 1.2rem;
        color: var(--product-title-color);
        margin: 0;
        line-height: 1.3;
        transition: var(--transition-smooth);
        cursor: default;
    }
    .product-title:hover {
        color: #b5d84e;
    }

    .product-desc {
        color: var(--text-secondary);
        font-size: 0.92rem;
        line-height: 1.6;
        margin: 0;
        max-width: 700px;
    }

    .product-price {
        font-family: var(--font-heading);
        font-weight: 700;
        font-size: 1.3rem;
        color: #34d399;
        margin-top: 0.2rem;
    }

    /* Action buttons */
    .product-actions {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
        flex-shrink: 0;
    }

    .product-actions a {
        white-space: nowrap;
        min-width: 140px;
        justify-content: center;
        font-size: 0.85rem;
        padding: 0.6rem 1.2rem;
        display: inline-flex;
        align-items: center;
        border-radius: var(--radius-btn);
        font-family: var(--font-heading);
        font-weight: 600;
        text-decoration: none;
        transition: var(--transition-smooth);
    }

    .btn-view-list {
        background: transparent;
        border: 1px solid var(--panel-border);
        color: var(--text-secondary);
    }
    .btn-view-list:hover {
        background: rgba(255, 255, 255, 0.08);
        border-color: var(--panel-border-hover);
        color: #fff;
        transform: translateY(-2px);
    }

    .btn-cart-list {
        background: var(--gradient-primary);
        color: #fff;
        border: none;
        box-shadow: 0 8px 20px rgba(99, 102, 241, 0.25);
    }
    .btn-cart-list:hover {
        box-shadow: 0 12px 28px rgba(99, 102, 241, 0.4);
        transform: translateY(-2px);
        color: #fff;
    }

    /* ---------- RESPONSIVE ---------- */
    @media (max-width: 767.98px) {
        .product-list-item {
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 1.25rem 1rem;
        }
        .product-thumb {
            flex: 0 0 100px;
            width: 100px;
            height: 100px;
            font-size: 2.6rem;
        }
        .product-title {
            font-size: 1.05rem;
        }
        .product-content {
            align-items: center;
        }
        .product-desc {
            font-size: 0.85rem;
        }
        .product-actions {
            flex-direction: row;
            width: 100%;
            justify-content: center;
            margin-top: 0.5rem;
        }
        .product-actions a {
            flex: 1;
            min-width: auto;
        }
    }
</style>