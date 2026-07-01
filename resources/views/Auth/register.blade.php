<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background: #000000; /* true black background */
            font-family: 'Inter', sans-serif;
            color: #ffffff;
        }
        
        /* Frame / Card Effects */
        .card {
            border-radius: 1rem;
            background: #1a1a1a; 
            border: 1px solid #333333;
            color: #e0e0e0;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }
        
        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px #000000; /* Deep hex shadow on hover */
            border-color: #444444;
        }

        .card .form-label {
            color: #cccccc;
            transition: color 0.3s ease;
        }

        /* Input Box Effects */
        .form-control {
            background: #2c2c2c;
            border: 1px solid #444444;
            color: #ffffff;
            transition: all 0.3s ease;
        }
        
        .form-control::placeholder {
            color: #888888;
            transition: opacity 0.3s ease;
        }

        .form-control:focus {
            background: #222222;
            border-color: #0d6efd;
            /* Using 8-digit HEX for transparency instead of RGBA */
            box-shadow: 0 0 0 0.25rem #0d6efd40; 
            color: #ffffff;
            transform: translateY(-2px); /* Slight lift on focus */
        }

        .form-control:focus::placeholder {
            opacity: 0.5; /* Fades placeholder out slightly on focus */
        }

        /* Button Effects */
        .btn-primary {
            background: #0d6efd;
            border: none;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary:hover {
            background: #0b5ed7;
            transform: translateY(-3px);
            box-shadow: 0 6px 15px #0d6efd66; /* Hex glow effect */
        }

        .btn-primary:active {
            transform: translateY(1px); /* Press down effect */
            box-shadow: 0 2px 5px #0d6efd66;
        }
    </style>
</head>
<body>
    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
        <div class="col-md-5 col-lg-4">
            <div class="card shadow-lg">
                <div class="card-body p-5">
                    <h3 class="text-center mb-4 fw-bold text-white">Create Account</h3>
                    
                    <form method="POST" action="{{ route('register.submit') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="username" class="form-label fw-semibold">Username</label>
                            <input type="text" name="username" id="username"
                                   class="form-control form-control-lg"
                                   placeholder="Enter your username" required autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Email Address</label>
                            <input type="email" name="email" id="email"
                                   class="form-control form-control-lg"
                                   placeholder="name@example.com" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold">Password</label>
                            <input type="password" name="password" id="password"
                                   class="form-control form-control-lg"
                                   placeholder="Create a password" required>
                        </div>

                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label fw-semibold">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                   class="form-control form-control-lg"
                                   placeholder="Repeat your password" required>
                        </div>

                        <div class="d-grid mt-2">
                            <button type="submit" class="btn btn-primary btn-lg fw-semibold">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>