@extends('layouts.MainLayout')
@section('title', 'Digital Store Services')

<!-- @push('styles')

@endpush -->

@section('content')

{{-- BREADCRUMB --}}
<nav aria-label="breadcrumb" class="breadcrumb-section">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page" style="color:white;">All Products</li>
    </ol>
  </div>
</nav>

{{-- SEARCH + FILTER + SORT BAR --}}
<div class="search-filter-bar">
  <div class="container">
    <div class="row g-3 align-items-center">
      {{-- Search --}}
      <div class="col-md-7">
        <div class="search-box">
          <input type="text" class="form-control" placeholder="Search products…">
          <i class="bi bi-search"></i>
        </div>
      </div>

      {{-- Filter --}}
      <div class="col-md-3">
        <div class="category-select-box">
          <select class="form-select">
            <option selected>All Categories</option>
            <option>Office Suite</option>
            <option>Windows OS</option>
            <option>Video & Creative</option>
            <option>AI Tools</option>
          </select>
        </div>
      </div>

      {{-- View Toggle --}}
      <div class="col-md-2 text-end">
        <div class="view-toggle">
          <button class="btn btn-outline-light" title="Grid view"><i class="bi bi-grid-fill"></i></button>
          <button class="btn btn-outline-light active" title="List view"><i class="bi bi-list-ul"></i></button>
        </div>
      </div>
    </div>
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
          <h3 class="product-title">ChatGPT Plus 1-Year Premium Subscription</h3>
          <p class="product-desc">Priority access, GPT-4, DALL·E, browsing, plugins - 12 months.</p>
          <div class="product-price">$49.99</div>
        </div>
        <div class="product-actions">
          <a href="#" class="btn-view-list"><i class="bi bi-eye me-1"></i> View</a>
          <a href="#" class="btn-cart-list"><i class="bi bi-cart-plus me-1"></i> Add to Cart</a>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- FOOTER (handled by MainLayout, so nothing extra) --}}

@endsection

{{-- CSS --}}
<style>
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
        background: transparent;
        padding: 1.5rem 0 0.5rem;
        margin: 0;
    }
    .breadcrumb {
        margin-bottom: 0;
        background: transparent;
        padding: 0;
    }
    .breadcrumb-item a {
        color: var(--text-secondary);
        text-decoration: none;
        font-size: 0.9rem;
        transition: var(--transition-smooth);
    }
    .breadcrumb-item a:hover {
        color: var(--color-secondary);
    }
    .breadcrumb-item.active {
        color: var(--text-primary);
        font-size: 0.9rem;
        font-weight: 500;
    }
    .breadcrumb-item + .breadcrumb-item::before {
        color: rgba(255, 255, 255, 0.2) !important;
    }

    /* ---------- SEARCH / FILTER / VIEW BAR ---------- */
    .search-filter-bar {
        background: rgba(15, 23, 42, 0.45);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        padding: 1.4rem 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.06);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
    }

    .search-box {
        position: relative;
    }
    .search-box .bi-search {
        position: absolute;
        left: 16px;
        top: 50%;
        transform: translateY(-50%);
        color: #64748b;
        font-size: 1.1rem;
        pointer-events: none;
        transition: color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .search-box input {
        background-color: #1a2236;
        border: 1px solid var(--panel-border);
        border-radius: 12px;
        color: white;
        padding: 0.75rem 1rem 0.75rem 3rem;
        font-size: 0.95rem;
        width: 100%;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .search-box input::placeholder {
        color: white;
    }
    .search-box input:hover {
        background-color: #1a2236;
        border-color: var(--panel-border-hover);
    }
    .search-box input:focus {
        outline: none;
        background-color: #1a2236;
        border-color: var(--color-primary);
        box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
    }
    .search-box input:focus + .bi-search {
        color: var(--color-primary);
    }

    .category-select-box {
        position: relative;
    }
    .category-select-box .bi-grid-fill {
        position: absolute;
        left: 16px;
        top: 50%;
        transform: translateY(-50%);
        color: #64748b;
        font-size: 1.1rem;
        pointer-events: none;
        transition: color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .form-select {
        background-color: #1a2236;
        border: 1px solid var(--panel-border);
        color: white;
        border-radius: 12px;
        font-size: 0.95rem;
        padding: 0.75rem 2.5rem 0.75rem 3rem;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23ffffff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
        background-position: right 1.25rem center;
        background-size: 16px 12px;
    }
    .form-select option {
        background-color: #1a2236;
        color: white;
    }

    .form-select:focus {
        border-color: var(--color-primary);
        box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
        outline: none;
    }
    .category-select-box select:focus + .bi-grid-fill {
        color: var(--color-primary);
    }

    .view-toggle {
        display: inline-flex;
        background: rgba(30, 41, 59, 0.4);
        padding: 4px;
        border-radius: 12px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }
    .view-toggle .btn {
        border-radius: 8px;
        width: 38px;
        height: 38px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 1.15rem;
        margin: 0;
        background: transparent;
        border: none;
        color: #64748b;
        transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .view-toggle .btn:hover:not(.active) {
        color: #f8fafc;
        background: rgba(255, 255, 255, 0.05);
    }
    .view-toggle .btn.active {
        background: var(--gradient-primary);
        color: white;
        box-shadow: 0 4px 12px rgba(99, 102, 241, 0.25);
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