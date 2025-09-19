<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - School Management System</title>
    
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png" />
    
    <!-- loader-->
    <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&amp;family=Roboto&amp;display=swap" />
    
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}" />
    
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" />
    
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
    <style>
        .error {
            color: #e74c3c;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        .form-control.error,
        .form-control.is-invalid {
            border-color: #e74c3c;
            box-shadow: 0 0 0 0.2rem rgba(231, 76, 60, 0.25);
        }

        .password-field {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #6c757d;
            z-index: 5;
            padding: 5px;
            user-select: none;
        }

        .password-toggle:hover {
            color: #495057;
        }

        .password-field .form-control {
            padding-right: 40px;
        }

        .login-card {
            box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-login">
    <!-- wrapper -->
    <div class="wrapper">
        <div class="section-authentication-login d-flex align-items-center justify-content-center mt-4">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="card radius-15 overflow-hidden login-card">
                        <div class="row g-0">
                            <div class="col-xl-6">
                                <div class="card-body p-5">
                                    <div class="text-center">
                                        <img src="{{ asset('assets/images/logo-icon.png') }}" width="80" alt="Logo">
                                        <h3 class="mt-4 font-weight-bold">Welcome Back</h3>
                                        <p class="text-muted">Sign in to your account</p>
                                    </div>

                                    <!-- Alert Container for Messages -->
                                    <div id="alertContainer"></div>

                                    <!-- Success Message (for non-AJAX fallback) -->
                                    @if (session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <i class="bx bx-check-circle me-2"></i>{{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif

                                    <!-- Error Messages (for non-AJAX fallback) -->
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <i class="bx bx-error-circle me-2"></i>
                                            <strong>Please fix the following errors:</strong>
                                            <ul class="mb-0 mt-2">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="form-body">
                                        <form class="row g-3" id="loginForm" method="POST" action="{{ route('login') }}">
                                            @csrf
                                            
                                            <div class="col-12">
                                                <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" id="email" name="email" 
                                                       value="{{ old('email') }}" placeholder="Enter your email address">
                                            </div>
                                            
                                            <div class="col-12">
                                                <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                                <div class="password-field">
                                                    <input type="password" class="form-control" id="password" name="password" 
                                                           placeholder="Enter your password">
                                                    <span class="password-toggle" onclick="togglePassword('password', this)">
                                                        <i class="bx bx-hide"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            
                                            {{-- <div class="col-md-6">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="remember" name="remember" 
                                                           {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="remember">Remember Me</label>
                                                </div>
                                            </div> --}}
                                            
                                            <div class="col-md-6 text-end">
                                                <a href="{{ route('password.request') }}">Forgot Password ?</a>
                                            </div>
                                            
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary" id="loginBtn">
                                                        <i class="bx bxs-lock-open"></i> Sign In
                                                    </button>
                                                </div>
                                            </div>
                                            
                                            {{-- <div class="col-12 text-center">
                                                <p>Don't have an account yet? <a href="">Sign up here</a></p>
                                            </div> --}}
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 bg-login-color d-flex align-items-center justify-content-center">
                                <img src="{{ asset('assets/images/login-images/login-frent-img.jpg') }}" class="img-fluid" alt="Login Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
    <!-- jQuery Validation Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

    <script src="{{ asset('assets/customjs/signin.js') }}"></script>
</body>
</html>