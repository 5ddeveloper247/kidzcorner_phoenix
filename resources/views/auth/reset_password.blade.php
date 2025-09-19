<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Reset Password - School Management System</title>
    
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png" />
    
    <!-- loader-->
    <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto&display=swap" />
    
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
        .password-toggle:hover { color: #495057; }
        .password-field .form-control { padding-right: 40px; }
    </style>
</head>

<body>
    <!-- wrapper -->
    <div class="wrapper">
        <div class="authentication-reset-password d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="card radius-15 shadow-lg">
                        <div class="row g-0">
                            <!-- Left side form -->
                            <div class="col-lg-5">
                                <div class="card-body p-md-5">
                                    <div class="text-left">
                                        <img src="{{ asset('assets/images/logo-img.png') }}" width="150" alt="Logo">
                                    </div>
                                    <h4 class="mt-4 font-weight-bold">Generate New Password</h4>
                                    <p class="text-muted">We received your reset password request. Please enter your new password!</p>

                                    <!-- Error Messages -->
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

                                    <form id="resetPasswordForm" method="POST" action="{{ route('password.update') }}">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $token }}">
                                        <input type="hidden" name="email" value="{{ $email }}">

                                        <div class="mb-3">
                                            <label class="form-label">New Password <span class="text-danger">*</span></label>
                                            <div class="password-field">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter new password">
                                                <span class="password-toggle" onclick="togglePassword('password', this)">
                                                    <i class="bx bx-hide"></i>
                                                </span>
                                            </div>
                                            <small class="text-muted">At least 8 characters, with letters & numbers</small>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Confirm Password <span class="text-danger">*</span></label>
                                            <div class="password-field">
                                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm password">
                                                <span class="password-toggle" onclick="togglePassword('password_confirmation', this)">
                                                    <i class="bx bx-hide"></i>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="d-grid gap-2 mt-4">
                                            <button type="submit" class="btn btn-primary" id="resetPasswordBtn">
                                                 Change Password
                                            </button>
                                            <a href="{{ route('login') }}" class="btn btn-light">
                                                <i class="bx bx-arrow-back"></i> Back to Login
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Right side image -->
                            <div class="col-lg-7">
                                <img src="{{ asset('assets/images/login-images/forgot-password-frent-img.jpg') }}" class="card-img login-img h-100" alt="Reset Password">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

    <script src="{{ asset('assets/customjs/reset_password.js') }}"></script>
</body>
</html>