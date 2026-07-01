            <nav class="navbar navbar-expand-lg navbar-custom" id="main-navigation">
                <div class="container-fluid">

                    <!-- Brand Logo -->
                    <a class="navbar-brand navbar-brand-custom" href="#" id="nav-brand">
                        <span class="navbar-brand-icon">
                            <i class="bi bi-cpu"></i>
                        </span>
                        <span>Digital Store Service</span>
                    </a>

                    <input type="checkbox" id="navbar-toggle-checkbox" class="nav-toggle-checkbox d-none">

                    <!-- Mobile Toggler Label Button -->
                    <label for="navbar-toggle-checkbox" class="navbar-toggler-custom" id="nav-toggle-button"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon-custom">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </label>

                    <!-- Collapsible Navigation Menu -->
                    <div class="collapse navbar-collapse justify-content-between" id="navbar-collapse-content">

                        <!-- Left/Center Links -->
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-1" id="nav-menu-links">

                            <li class="nav-item">
                                <a class="nav-link <?php echo e(Route::currentRouteName() == 'home' ? 'active' : ''); ?>" href="<?php echo e(route('home')); ?>" id="link-home">
                                    Home
                                </a>
                            </li>

                            <!-- Products-->
                            <li class="nav-item dropdown" id="nav-item-products">

                                <a class="nav-link <?php echo e(Route::currentRouteName() == 'products' ? 'active' : ''); ?>" href="<?php echo e(route('products')); ?>" id="link-products" role="button" tabindex="0">
                                    Products  
                                </a>

                                <div class="dropdown-menu-custom" aria-label="Products Submenu">
                                    <a href="<?php echo e(route('categories', 'office-suite')); ?>" id="sublink-analytics">
                                        <i class="bi bi-bar-chart-steps"></i> Office Solutions
                                    </a>
                                    <a href="<?php echo e(route('categories', 'ai-tools')); ?>" id="sublink-ai">
                                        <i class="bi bi-robot"></i> Neural Engines
                                    </a>
                                    <a href="<?php echo e(route('categories', 'vpn-security')); ?>" id="sublink-security">
                                        <i class="bi bi-shield-check"></i> Cyber Shield
                                    </a>
                                    <a href="<?php echo e(route('products')); ?>" id="sublink-all">
                                        <i class="bi bi-arrow-right-short"></i> Browse All Products
                                    </a>
                                </div>
                            </li>

                            <!-- Categories -->
                            <li class="nav-item">
                                <a class="nav-link <?php echo e(Route::currentRouteName() == 'categories' ? 'active' : ''); ?>" href="<?php echo e(route('categories')); ?>" id="link-categories">
                                    Categories
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link <?php echo e(Route::currentRouteName() == 'about' ? 'active' : ''); ?>" href="<?php echo e(route('about')); ?>" id="link-about">About</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link <?php echo e(Route::currentRouteName() == 'contact' ? 'active' : ''); ?>" href="<?php echo e(route('contact')); ?>" id="link-contact">Contact</a>
                            </li>
                        </ul>

                        <!-- Right Side: Search + Utility Icons + Profile -->
                        <div class="d-flex align-items-center gap-3 flex-column flex-lg-row mt-3 mt-lg-0" id="nav-right-actions">

                            <div class="search-wrapper" id="nav-search-wrapper">
                                <form action="<?php echo e(route('products')); ?>" method="GET" class="search-form" id="nav-search-form"
                                    role="search" autocomplete="off">

                                    <!-- Search icon (left) -->
                                    <span class="search-icon-left" aria-hidden="true">
                                        <i class="bi bi-search"></i>
                                    </span>

                                    <!-- Input -->
                                    <input
                                        type="search" name="q" id="nav-search-input" class="search-input" placeholder="Search products…" value="<?php echo e(request('q')); ?>"aria-label="Search products">

                                    <!-- <button type="button" class="search-clear-btn" id="search-clear-btn"
                                            aria-label="Clear search" style="display:none;">
                                        <i class="bi bi-x"></i>
                                    </button> -->

                                    <!-- Submit button -->
                                    <!-- <button type="submit" class="search-submit-btn" id="search-submit-btn"
                                            aria-label="Submit search">
                                        <i class="bi bi-arrow-right"></i>
                                    </button> -->

                                </form>
                            </div>
                            <!-- END SEARCH BAR -->

                            <!-- Favorite Link -->
                            <a class="nav-link favorite-link px-2" href="#" id="link-favorite" title="Favorites">
                                <i class="bi bi-heart" style="font-size: 1.15rem; color: var(--text-secondary);"></i>
                                <span class="badge-custom" id="badge-favorite-count">0</span>
                            </a>

                            <!-- Profile (CSS-Only) -->
                            <div class="nav-item">
                                <button class="profile-trigger" id="link-profile" tabindex="0">
                                    <div class="avatar-wrapper">
                                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80"
                                            alt="User Profile Avatar" class="profile-avatar">
                                        <span class="avatar-status"></span>
                                    </div>
                                    <span class="d-lg-none" id="label-profile-mobile">Profile Account</span>
                                </button>
                            </div>

                            <!-- Auth Actions -->
                            <a class="btn btn-login" href="<?php echo e(route('login')); ?>" id="link-login">Login</a>
                            <a class="btn btn-register" href="<?php echo e(route('register')); ?>" id="link-register">Register</a>

                        </div>

                    </div>
                </div>
            </nav>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Outfit:wght@400;500;600;700;800&display=swap');

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

            /* Search-specific tokens */
            --search-w: 240px;
            --search-w-focus: 300px;
            --search-h: 38px;
            --search-radius: 10px;
            --search-border-idle: rgba(255, 255, 255, 0.10);
            --search-border-focus: rgba(99, 102, 241, 0.80);
            --search-glow-focus: rgba(99, 102, 241, 0.25);
            --search-frame-speed: 2.4s;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-primary);
            font-family: var(--font-body);
            min-height: 100vh;
            margin: 0;
            overflow-x: hidden;
            background-image:
                radial-gradient(circle at 10% 20%, rgba(99, 102, 241, 0.05) 0%, transparent 40%),
                radial-gradient(circle at 90% 80%, rgba(168, 85, 247, 0.05) 0%, transparent 45%);
        }

        .navbar-custom {
            background-color: rgba(11, 15, 25, 0.75);
            backdrop-filter: blur(16px) saturate(180%);
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            border-bottom: 1px solid var(--panel-border);
            padding: 0.8rem 1.5rem;
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: var(--transition-smooth);
        }

        .navbar-brand-custom {
            font-family: var(--font-heading);
            font-weight: 800;
            font-size: 1.5rem;
            background: var(--gradient-accent);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: -0.5px;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
        }

        .navbar-brand-custom:hover { opacity: 0.95; }

        .navbar-brand-icon {
            display: none !important;
            width: 32px;
            height: 32px;
            background: var(--gradient-accent);
            border-radius: 8px;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.1rem;
            box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3);
        }

        /* Nav links */
        .navbar-custom .nav-link {
            color: var(--text-secondary);
            font-family: var(--font-heading);
            font-weight: 500;
            font-size: 0.95rem;
            padding: 0.5rem 1rem !important;
            border-radius: 8px;
            transition: var(--transition-smooth);
            position: relative;
        }

        .navbar-custom .nav-link:hover,
        .navbar-custom .nav-link:focus {
            color: var(--text-primary);
            background-color: rgba(255, 255, 255, 0.04);
        }

        .navbar-custom .nav-link:not(.active)::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--gradient-accent);
            border-radius: 4px;
            transition: width 0.35s cubic-bezier(0.4, 0, 0.2, 1), left 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .navbar-custom .nav-link:not(.active):hover::before,
        .navbar-custom .nav-link:not(.active):focus::before {
            width: 70%;
            left: 15%;
        }

        .navbar-custom .nav-link.active { color: var(--text-primary); }

        .navbar-custom .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0px;
            left: 1rem;
            right: 1rem;
            height: 2px;
            background: var(--gradient-accent);
            border-radius: 4px;
        }

        .search-wrapper {
            position: relative;
            width: var(--search-w);
            transition: width 0.35s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .search-wrapper:focus-within {
            width: var(--search-w-focus);
        }

        /* Always-on gradient border using background + padding trick */
        .search-form {
            position: relative;
            display: flex;
            align-items: center;
            height: var(--search-h);
            border-radius: var(--search-radius);
            /* Always-on gradient border */
            border: 1.5px solid transparent;
            background-color: rgba(20, 27, 45, 0.85);
            background-clip: padding-box;
            /* Outer glow — always on */
            box-shadow:
                0 0 0 1.5px rgba(99, 102, 241, 0.55),
                0 0 10px 2px rgba(99, 102, 241, 0.15),
                0 0 22px 4px rgba(168, 85, 247, 0.08);
            transition: box-shadow 0.3s ease, background-color 0.3s ease;
            overflow: hidden;
        }

        /* Stronger glow on focus */
        .search-form:focus-within {
            background-color: rgba(99, 102, 241, 0.07);
            box-shadow:
                0 0 0 2px rgba(99, 102, 241, 0.80),
                0 0 16px 4px rgba(99, 102, 241, 0.30),
                0 0 32px 8px rgba(168, 85, 247, 0.15);
        }

        /* Slightly stronger glow on hover (when not focused) */
        .search-form:hover:not(:focus-within) {
            box-shadow:
                0 0 0 1.5px rgba(99, 102, 241, 0.75),
                0 0 14px 3px rgba(99, 102, 241, 0.22),
                0 0 28px 6px rgba(168, 85, 247, 0.10);
        }

        /* ---- Search icon left ---- */
        .search-icon-left {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            padding: 0 0 0 12px;
            color: rgba(99, 102, 241, 0.7);
            font-size: 0.85rem;
            transition: color 0.2s ease;
            pointer-events: none;
            flex-shrink: 0;
        }

        .search-form:focus-within .search-icon-left {
            color: var(--color-primary);
        }

        /* ---- Input ---- */
        .search-input {
            position: relative;
            z-index: 1;
            flex: 1;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            color: var(--text-primary);
            font-family: var(--font-body);
            font-size: 0.875rem;
            padding: 0 8px 0 8px;
            caret-color: var(--color-primary);
            min-width: 0;
        }

        .search-input::placeholder {
            color: var(--text-muted);
            transition: color 0.2s ease;
        }

        .search-form:focus-within .search-input::placeholder {
            color: rgba(156, 163, 175, 0.5);
        }

        /* Hide browser default clear button (Chrome) */
        .search-input::-webkit-search-cancel-button { display: none; }

        /* ---- Clear button ---- */
        .search-clear-btn {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            background: transparent;
            border: none;
            color: var(--text-muted);
            width: 24px;
            height: 24px;
            border-radius: 50%;
            cursor: pointer;
            flex-shrink: 0;
            transition: var(--transition-fast);
            padding: 0;
            font-size: 1rem;
        }

        .search-clear-btn:hover {
            background: rgba(255, 255, 255, 0.08);
            color: var(--text-primary);
        }

        /* ---- Submit button (right arrow pill) ---- */
        .search-submit-btn {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(99, 102, 241, 0.12);
            border: none;
            color: var(--color-primary);
            width: 30px;
            height: calc(var(--search-h) - 8px);
            border-radius: 7px;
            margin-right: 4px;
            cursor: pointer;
            flex-shrink: 0;
            transition: var(--transition-fast);
            font-size: 0.85rem;
        }

        .search-submit-btn:hover {
            background: var(--color-primary);
            color: white;
        }

        .search-form:focus-within .search-submit-btn {
            background: linear-gradient(135deg, #6366f1, #a855f7);
            color: white;
        }

        .badge-custom {
            background-color: var(--color-accent);
            color: white;
            font-size: 0.65rem;
            padding: 0.2rem 0.4rem;
            border-radius: 20px;
            vertical-align: super;
            margin-left: 2px;
            box-shadow: 0 0 8px rgba(244, 63, 94, 0.4);
        }

        .nav-item.dropdown { position: relative; }

        .dropdown-menu-custom {
            position: absolute;
            top: 100%;
            left: 0;
            background: var(--panel-bg);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid var(--panel-border);
            border-radius: 12px;
            min-width: 220px;
            padding: 0.75rem 0.5rem;
            margin-top: 0.5rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
            z-index: 1010;
            opacity: 0;
            visibility: hidden;
            transform: translateY(8px);
            pointer-events: none;
            transition: var(--transition-smooth);
        }

        .nav-item.dropdown:hover .dropdown-menu-custom,
        .nav-item.dropdown:focus-within .dropdown-menu-custom {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
            pointer-events: auto;
        }

        #nav-item-products .dropdown-menu-custom,
        #nav-item-products .bi-chevron-down { display: none !important; }

        .dropdown-menu-custom a {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: var(--text-secondary);
            text-decoration: none;
            padding: 0.6rem 0.75rem;
            border-radius: 8px;
            font-size: 0.9rem;
            font-family: var(--font-body);
            transition: var(--transition-fast);
        }

        .dropdown-menu-custom a:hover {
            color: var(--text-primary);
            background-color: rgba(255, 255, 255, 0.05);
        }

        .dropdown-menu-custom a i {
            font-size: 1.1rem;
            color: var(--color-primary);
        }

        .profile-trigger {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            background: transparent;
            border: none;
            color: var(--text-secondary);
            padding: 0.35rem 0.75rem;
            border-radius: 50px;
            cursor: pointer;
            transition: var(--transition-smooth);
        }

        .profile-trigger:hover,
        .profile-trigger:focus {
            background: rgba(255, 255, 255, 0.05);
            color: var(--text-primary);
        }

        .avatar-wrapper {
            position: relative;
            width: 32px;
            height: 32px;
        }

        .profile-avatar {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--color-primary);
        }

        .avatar-status {
            position: absolute;
            bottom: 0; right: 0;
            width: 9px; height: 9px;
            background-color: #10b981;
            border: 1.5px solid var(--bg-color);
            border-radius: 50%;
        }

        /* Favorite */
        .favorite-link:hover i {
            color: var(--color-accent) !important;
            animation: pulse-heart 0.8s infinite alternate;
        }

        @keyframes pulse-heart {
            0%   { transform: scale(1); }
            100% { transform: scale(1.2); }
        }

        .btn-login {
            color: var(--text-primary) !important;
            border: 1px solid var(--panel-border);
            background-color: rgba(255, 255, 255, 0.02);
            font-family: var(--font-heading);
            font-weight: 500;
            padding: 0.5rem 1.25rem !important;
            border-radius: 8px;
            transition: var(--transition-fast);
        }

        .btn-login:hover {
            background-color: rgba(255, 255, 255, 0.06);
            border-color: var(--panel-border-hover);
        }

        .btn-register {
            background: var(--gradient-accent);
            color: white !important;
            font-family: var(--font-heading);
            font-weight: 600;
            padding: 0.5rem 1.25rem !important;
            border-radius: 8px;
            border: none;
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.35);
            transition: var(--transition-smooth);
        }

        .btn-register:hover {
            box-shadow: 0 6px 20px rgba(99, 102, 241, 0.5);
            transform: translateY(-1px);
        }

        .navbar-toggler-custom { display: none; cursor: pointer; }

        .navbar-toggler-icon-custom {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 22px; height: 16px;
        }

        .navbar-toggler-icon-custom span {
            display: block;
            height: 2px; width: 100%;
            background-color: var(--text-secondary);
            border-radius: 2px;
            transition: var(--transition-smooth);
        }

        #navbar-toggle-checkbox:checked ~ .navbar-toggler-custom .navbar-toggler-icon-custom span:nth-child(1) {
            transform: translateY(7px) rotate(45deg);
            background-color: var(--text-primary);
        }
        #navbar-toggle-checkbox:checked ~ .navbar-toggler-custom .navbar-toggler-icon-custom span:nth-child(2) {
            opacity: 0;
        }
        #navbar-toggle-checkbox:checked ~ .navbar-toggler-custom .navbar-toggler-icon-custom span:nth-child(3) {
            transform: translateY(-7px) rotate(-45deg);
            background-color: var(--text-primary);
        }

        @media (max-width: 991.98px) {
            .navbar-toggler-custom {
                display: flex;
                align-items: center;
                justify-content: center;
                border: 1px solid var(--panel-border);
                padding: 8px 10px;
                border-radius: 8px;
                background-color: rgba(255, 255, 255, 0.02);
            }

            .navbar-collapse {
                display: block !important;
                max-height: 0;
                overflow: hidden;
                opacity: 0;
                visibility: hidden;
                width: 100%;
                transition: max-height 0.4s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.3s ease, visibility 0.3s ease;
            }

            #navbar-toggle-checkbox:checked ~ .navbar-collapse {
                max-height: 600px;
                opacity: 1;
                visibility: visible;
                padding-top: 1rem;
                padding-bottom: 0.5rem;
                border-top: 1px solid var(--panel-border);
                margin-top: 0.5rem;
            }

            .navbar-nav { gap: 0.5rem; }

            /* Search full-width on mobile */
            .search-wrapper {
                width: 100% !important;
                --search-w-focus: 100%;
            }

            .dropdown-menu-custom {
                position: static;
                opacity: 1;
                visibility: visible;
                pointer-events: auto;
                transform: none;
                box-shadow: none;
                background: rgba(255, 255, 255, 0.02);
                border: none;
                border-left: 2px solid var(--color-primary);
                border-radius: 0;
                margin-top: 0.25rem;
                margin-left: 1rem;
                padding: 0.25rem 0.5rem;
            }

            .profile-trigger {
                padding: 0.5rem 0.75rem;
                width: 100%;
                border-radius: 8px;
                justify-content: flex-start;
            }

            .btn-login,
            .btn-register {
                width: 100%;
                text-align: center;
                margin-top: 0.25rem;
            }
        }
    </style><?php /**PATH C:\Users\user1\Desktop\ShopLicSoft\resources\views/components/navbar.blade.php ENDPATH**/ ?>