<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Digital Store Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --font-heading: 'Outfit', sans-serif;
            --font-body: 'Inter', sans-serif;
            --bg-color: #0b0f19;
            --panel-bg: #111827;
            --panel-border: rgba(255, 255, 255, 0.08);
            --panel-border-hover: rgba(255, 255, 255, 0.15);
            --color-primary: #6366f1;
            --color-secondary: #14b8a6;
            --color-accent: #f43f5e;
            --text-primary: #f8fafc;
            --text-secondary: #a7b0c0;
            --text-muted: #64748b;
            --gradient-primary: linear-gradient(135deg, #6366f1 0%, #14b8a6 100%);
            --transition-smooth: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-primary);
            font-family: var(--font-body);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow-x: hidden;
        }

        /* Decorative Background Glows */
        body::before {
            content: "";
            position: absolute;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(99, 102, 241, 0.15) 0%, rgba(99, 102, 241, 0) 70%);
            top: -100px;
            left: -100px;
            z-index: 0;
            pointer-events: none;
        }

        body::after {
            content: "";
            position: absolute;
            width: 450px;
            height: 450px;
            background: radial-gradient(circle, rgba(20, 184, 166, 0.12) 0%, rgba(20, 184, 166, 0) 70%);
            bottom: -150px;
            right: -100px;
            z-index: 0;
            pointer-events: none;
        }

        .login-container {
            position: relative;
            z-index: 10;
            width: 100%;
            padding: 1.5rem;
        }

        /* Card styles */
        .login-card {
            background: rgba(17, 24, 39, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid var(--panel-border);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
            transition: var(--transition-smooth);
        }

        .login-card:hover {
            border-color: var(--panel-border-hover);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5), 0 0 40px rgba(99, 102, 241, 0.05);
        }

        .brand-title {
            font-family: var(--font-heading);
            font-weight: 800;
            font-size: 2rem;
            letter-spacing: -0.02em;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Custom Input Groups */
        .input-group-custom {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-group-custom .form-control {
            background-color: #1a2236;
            border: 1px solid var(--panel-border);
            border-radius: 12px;
            color: white;
            padding: 0.75rem 1rem 0.75rem 3rem;
            font-size: 0.95rem;
            height: auto;
            transition: var(--transition-smooth);
        }

        .input-group-custom .form-control.password-input {
            padding-right: 3rem;
        }

        .input-group-custom .form-control::placeholder {
            color: var(--text-muted);
        }

        .input-group-custom .form-control:hover {
            border-color: var(--panel-border-hover);
        }

        .input-group-custom .form-control:focus {
            outline: none;
            background-color: #1a2236;
            border-color: var(--color-primary);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.25);
            color: white;
        }

        .input-group-custom .input-icon-left {
            position: absolute;
            left: 16px;
            color: var(--text-muted);
            font-size: 1.1rem;
            pointer-events: none;
            transition: var(--transition-smooth);
            z-index: 5;
        }

        .input-group-custom .input-icon-right {
            position: absolute;
            right: 16px;
            color: var(--text-muted);
            font-size: 1.1rem;
            cursor: pointer;
            transition: var(--transition-smooth);
            z-index: 5;
            background: none;
            border: none;
            padding: 0;
        }

        .input-group-custom .input-icon-right:hover {
            color: white;
        }

        .input-group-custom .form-control:focus + .input-icon-left {
            color: var(--color-primary);
        }

        /* Buttons */
        .btn-submit {
            background: var(--gradient-primary);
            color: white;
            border: none;
            border-radius: 12px;
            padding: 0.8rem;
            font-family: var(--font-heading);
            font-weight: 700;
            font-size: 1rem;
            transition: var(--transition-smooth);
            box-shadow: 0 8px 20px rgba(99, 102, 241, 0.25);
        }

        .btn-submit:hover {
            box-shadow: 0 12px 28px rgba(99, 102, 241, 0.45);
            transform: translateY(-2px);
            color: white;
        }

        .btn-submit:active {
            transform: translateY(1px);
            box-shadow: 0 4px 10px rgba(99, 102, 241, 0.25);
        }

        /* Links */
        .auth-link {
            color: var(--text-secondary);
            text-decoration: none;
            transition: var(--transition-smooth);
            font-weight: 500;
            font-size: 0.9rem;
        }

        .auth-link:hover {
            color: var(--color-primary);
        }

        /* Alert styling */
        .alert-custom {
            background: rgba(244, 63, 94, 0.1);
            border: 1px solid rgba(244, 63, 94, 0.2);
            color: #fda4af;
            border-radius: 12px;
            font-size: 0.9rem;
            padding: 0.75rem 1rem;
        }
        
        .back-home {
            position: absolute;
            top: 2rem;
            left: 2rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-secondary);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition-smooth);
            z-index: 100;
        }

        .back-home:hover {
            color: white;
            transform: translateX(-3px);
        }

        /* Divider line */
        .auth-divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 1.5rem 0;
            color: var(--text-muted);
            font-size: 0.85rem;
            font-weight: 500;
        }
        .auth-divider::before,
        .auth-divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }
        .auth-divider:not(:empty)::before {
            margin-right: .75em;
        }
        .auth-divider:not(:empty)::after {
            margin-left: .75em;
        }

        /* Google button styles */
        .btn-google {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid var(--panel-border);
            color: var(--text-primary);
            border-radius: 12px;
            padding: 0.75rem;
            font-family: var(--font-heading);
            font-weight: 600;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            transition: var(--transition-smooth);
            text-decoration: none;
        }
        .btn-google:hover {
            background: rgba(255, 255, 255, 0.07);
            border-color: var(--panel-border-hover);
            color: white;
            transform: translateY(-2px);
        }
        .btn-google:active {
            transform: translateY(1px);
        }

        /* Showcase Styles */
        .brand-showcase {
            position: relative;
        }

        .gradient-text {
            background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 60%, #a855f7 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .feature-icon-box {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: rgba(99, 102, 241, 0.1);
            border: 1px solid rgba(99, 102, 241, 0.2);
            color: var(--color-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            flex-shrink: 0;
            transition: var(--transition-smooth);
        }

        .feature-item:hover .feature-icon-box {
            background: rgba(20, 184, 166, 0.15);
            border-color: rgba(20, 184, 166, 0.4);
            color: var(--color-secondary);
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <a href="{{ route('home') }}" class="back-home">
        <i class="bi bi-arrow-left"></i>
        <span>Back to Store</span>
    </a>

    <div class="login-container container d-flex align-items-center justify-content-center min-vh-100 py-5">
        <div class="row w-100 g-5 align-items-center justify-content-center">

            <!-- Left Side: Brand Highlights & Features -->
            <div class="col-lg-6 d-none d-lg-block text-start pe-lg-5">
                <div class="brand-showcase">
                    <div class="d-flex align-items-center gap-2 mb-4">
                        <i class="bi bi-shop text-primary" style="font-size: 2rem;"></i>
                        <span class="fw-bold fs-4" style="font-family: var(--font-heading);">DigitalStoreService</span>
                    </div>
                    
                    <h1 class="display-4 fw-bold mb-4" style="font-family: var(--font-heading); line-height: 1.15;">
                        Unlock Genuine <br>
                        <span class="gradient-text">Software Licenses</span> Instantly
                    </h1>
                    
                    <p class="text-secondary mb-5" style="font-size: 1.1rem; max-width: 480px;">
                        Join thousands of developers, designers, and creators who access legitimate lifetime licenses and premium services.
                    </p>
                    
                    <!-- Feature Items -->
                    <div class="d-flex flex-column gap-4 mb-5">
                        <div class="feature-item d-flex align-items-start gap-3">
                            <div class="feature-icon-box">
                                <i class="bi bi-lightning-charge-fill"></i>
                            </div>
                            <div>
                                <h5 class="mb-1 fw-bold" style="color: white; font-size: 1.1rem;">Instant Automated Delivery</h5>
                                <p class="text-secondary mb-0 small">Receive activation codes and license guides via email within minutes of payment.</p>
                            </div>
                        </div>

                        <div class="feature-item d-flex align-items-start gap-3">
                            <div class="feature-icon-box">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <div>
                                <h5 class="mb-1 fw-bold" style="color: white; font-size: 1.1rem;">100% Genuine Guarantee</h5>
                                <p class="text-secondary mb-0 small">All software keys are verified legitimate, supporting official updates and lifetime activations.</p>
                            </div>
                        </div>

                        <div class="feature-item d-flex align-items-start gap-3">
                            <div class="feature-icon-box">
                                <i class="bi bi-chat-heart"></i>
                            </div>
                            <div>
                                <h5 class="mb-1 fw-bold" style="color: white; font-size: 1.1rem;">Expert Lifetime Support</h5>
                                <p class="text-secondary mb-0 small">Our support engineers are available round-the-clock to guide you through setup and troubleshooting.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Stats Badges -->
                    <div class="d-flex align-items-center gap-4 pt-3 border-top border-secondary border-opacity-10">
                        <div>
                            <div class="h3 fw-bold text-white mb-0" style="font-family: var(--font-heading);">10k+</div>
                            <div class="text-muted small">Keys Delivered</div>
                        </div>
                        <div class="border-start border-secondary border-opacity-10 ps-4">
                            <div class="h3 fw-bold text-white mb-0" style="font-family: var(--font-heading);">99.9%</div>
                            <div class="text-muted small">Activation Success</div>
                        </div>
                        <div class="border-start border-secondary border-opacity-10 ps-4">
                            <div class="h3 fw-bold text-white mb-0" style="font-family: var(--font-heading);">4.9/5</div>
                            <div class="text-muted small">Trust Rating</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side Card -->
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="login-card card">
                <div class="card-body p-4 p-sm-5">
                    
                    <div class="text-center mb-4">
                        <i class="bi bi-person-plus-fill mb-2" style="font-size: 2.5rem; color: var(--color-secondary);"></i>
                        <h2 class="brand-title mb-1">Create Account</h2>
                        <p class="text-muted small">Sign up to purchase and access license keys</p>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-custom mb-4" role="alert">
                            <ul class="mb-0 ps-3">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register.submit') }}">
                        @csrf

                        <!-- Username Field -->
                        <div class="mb-3">
                            <label for="username" class="form-label small fw-semibold text-secondary">Username</label>
                            <div class="input-group-custom">
                                <input type="text" name="username" id="username" 
                                       class="form-control" placeholder="Enter your username" 
                                       required autofocus>
                                <i class="bi bi-person-fill input-icon-left"></i>
                            </div>
                        </div>

                        <!-- Email Address Field -->
                        <div class="mb-3">
                            <label for="email" class="form-label small fw-semibold text-secondary">Email Address</label>
                            <div class="input-group-custom">
                                <input type="email" name="email" id="email" 
                                       class="form-control" placeholder="name@example.com" 
                                       required>
                                <i class="bi bi-envelope-fill input-icon-left"></i>
                            </div>
                        </div>

                        <!-- Password Field -->
                        <div class="mb-3">
                            <label for="password" class="form-label small fw-semibold text-secondary">Password</label>
                            <div class="input-group-custom">
                                <input type="password" name="password" id="password" 
                                       class="form-control password-input" placeholder="Create a password" 
                                       required>
                                <i class="bi bi-lock-fill input-icon-left"></i>
                                <button type="button" class="input-icon-right toggler-pw" data-target="password" title="Show password">
                                    <i class="bi bi-eye-slash-fill"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Confirm Password Field -->
                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label small fw-semibold text-secondary">Confirm Password</label>
                            <div class="input-group-custom">
                                <input type="password" name="password_confirmation" id="password_confirmation" 
                                       class="form-control password-input" placeholder="Confirm your password" 
                                       required>
                                <i class="bi bi-shield-lock-fill input-icon-left"></i>
                                <button type="button" class="input-icon-right toggler-pw" data-target="password_confirmation" title="Show password">
                                    <i class="bi bi-eye-slash-fill"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-submit">
                                Create Account
                            </button>
                        </div>

                        <!-- Divider -->
                        <div class="auth-divider">or</div>

                        <!-- Google Sign Up Button -->
                        <div class="d-grid mb-3">
                            <a href="#" class="btn btn-google">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                  <path fill="#ea4335" d="M9 3.48c1.69 0 2.83.73 3.48 1.34l2.61-2.61C13.51.81 11.48 0 9 0 5.48 0 2.44 2.02.96 4.96l3.14 2.43C4.85 5.07 6.74 3.48 9 3.48z"/>
                                  <path fill="#4285f4" d="M17.64 9.2c0-.64-.06-1.25-.16-1.84H9v3.48h4.84c-.21 1.12-.84 2.07-1.79 2.7l2.78 2.16c1.63-1.5 2.57-3.7 2.57-6.5z"/>
                                  <path fill="#fbbc05" d="M4.1 10.61c-.22-.65-.35-1.35-.35-2.06s.13-1.41.35-2.06L.96 4.96C.35 6.17 0 7.55 0 9s.35 2.83.96 4.04l3.14-2.43z"/>
                                  <path fill="#34a853" d="M9 18c2.43 0 4.47-.8 5.96-2.18l-2.78-2.16c-.77.52-1.76.83-2.78.83-2.26 0-4.15-1.59-4.83-3.72L1.37 13.2C2.86 16.14 5.9 18 9 18z"/>
                                </svg>
                                <span>Sign up with Google</span>
                            </a>
                        </div>

                        <!-- Sign In Link -->
                        <div class="text-center mt-4">
                            <span class="text-secondary small">Already have an account?</span>
                            <a href="{{ route('login') }}" class="auth-link small ms-1">Sign In</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('.toggler-pw').forEach(function(button) {
            button.addEventListener('click', function() {
                const targetId = this.getAttribute('data-target');
                const passwordInput = document.getElementById(targetId);
                const toggleIcon = this.querySelector('i');
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    toggleIcon.className = 'bi bi-eye-fill';
                    this.title = 'Hide password';
                } else {
                    passwordInput.type = 'password';
                    toggleIcon.className = 'bi bi-eye-slash-fill';
                    this.title = 'Show password';
                }
            });
        });
    </script>
</body>
</html>