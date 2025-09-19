@extends('admin.layout.master')

@push('styles')
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

        .form-select.error,
        .form-select.is-invalid {
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

        /* Logo upload styles */
        .logo-upload-container {
            position: relative;
            width: 120px;
            height: 120px;
            margin: 0 auto 20px;
            border: 2px dashed #ddd;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .logo-upload-container:hover {
            border-color: #007bff;
            background-color: #f8f9fa;
        }

        .logo-upload-container.has-image {
            border: 2px solid #28a745;
        }

        .logo-preview {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: none;
        }

        .logo-preview.show {
            display: block;
        }

        .logo-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: #6c757d;
            font-size: 14px;
            text-align: center;
            padding: 10px;
        }

        .logo-placeholder i {
            font-size: 32px;
            margin-bottom: 8px;
        }

        .logo-placeholder.hide {
            display: none;
        }

        .logo-remove {
            position: absolute;
            top: -5px;
            right: -5px;
            background: #dc3545;
            color: white;
            border: none;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            cursor: pointer;
            display: none;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            z-index: 10;
        }

        .logo-remove.show {
            display: flex;
        }

        .logo-remove:hover {
            background: #c82333;
        }

        #logo {
            display: none;
        }

        .logo-upload-text {
            text-align: center;
            margin-bottom: 15px;
            color: #6c757d;
            font-size: 14px;
        }
    </style>
@endpush

@section('content')
    <div class="page-wrapper">
        <div class="page-content-wrapper">
            <div class="page-content">
                <!-- Start Container Fluid -->
                <div class="row">
                    <!--breadcrumb-->
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                        <div class="breadcrumb-title pe-3">Companies</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{ route('companies') }}"><i
                                                class="bx bx-home-alt"></i></a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('companies') }}">Schools</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add School</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="ms-auto">
                            <div class="btn-group">
                                <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                                    <i class="bx bx-arrow-back"></i> Back to List
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--end breadcrumb-->

                    <div class="col-xl-8 mx-auto">
                        <!-- Add School Form Card -->
                        <div class="card border-top border-0 border-4 border-primary">
                            <div class="card-body p-5">
                                <div class="card-title d-flex align-items-center">
                                    <div><i class="bx bxs-user me-1 font-22 text-primary"></i></div>
                                    <h5 class="mb-0 text-primary">Add New School</h5>
                                </div>
                                <hr>

                                <!-- Alert Container for Messages -->
                                <div id="alertContainer"></div>

                                <!-- Success Message (for non-AJAX fallback) -->
                                @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <i class="bx bx-check-circle me-2"></i>{{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif

                                <!-- Validation Errors (for non-AJAX fallback) -->
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

                                <form method="POST" action="{{ route('admin.addSchool') }}" class="row g-3"
                                    id="schoolForm" enctype="multipart/form-data">
                                    @csrf

                                    <!-- Logo Upload Section -->
                                    <div class="col-12">
                                        <label class="form-label">School Logo</label>
                                        <div class="logo-upload-text">Click to upload school logo (optional)</div>
                                        <div class="logo-upload-container" onclick="document.getElementById('logo').click()">
                                            <img id="logoPreview" class="logo-preview" alt="Logo Preview">
                                            <div class="logo-placeholder" id="logoPlaceholder">
                                                <i class="bx bx-image-add"></i>
                                                <span>Upload Logo</span>
                                            </div>
                                            <button type="button" class="logo-remove" id="logoRemove" onclick="removeLogo(event)">
                                                <i class="bx bx-x"></i>
                                            </button>
                                        </div>
                                        <input type="file" name="logo" id="logo" accept="image/jpeg,image/jpg,image/png,image/gif" onchange="previewLogo(this)">
                                        <div class="text-center mt-2">
                                            <small class="text-muted">Accepted formats: JPEG, PNG, GIF (Max: 2MB)</small>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="name" class="form-label">School Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            value="{{ old('name') }}" placeholder="Enter school name">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email Address <span
                                                class="text-danger">*</span></label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            value="{{ old('email') }}" placeholder="Enter email address">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="password" class="form-label">Password <span
                                                class="text-danger">*</span></label>
                                        <div class="password-field">
                                            <input type="password" name="password" class="form-control" id="password"
                                                placeholder="Enter password">
                                            <span class="password-toggle" onclick="togglePassword('password', this)">
                                                <i class="bx bx-hide"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="password_confirmation" class="form-label">Confirm Password <span
                                                class="text-danger">*</span></label>
                                        <div class="password-field">
                                            <input type="password" name="password_confirmation" class="form-control"
                                                id="password_confirmation" placeholder="Confirm password">
                                            <span class="password-toggle"
                                                onclick="togglePassword('password_confirmation', this)">
                                                <i class="bx bx-hide"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">Phone Number <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="phone" class="form-control" id="phone"
                                            value="{{ old('phone') }}" placeholder="Enter phone number">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="country" class="form-label">Country <span
                                                class="text-danger">*</span></label>
                                        <select id="country" name="country" class="form-select">
                                            <option value="">Select Country</option>
                                            @foreach (country_names() as $country)
                                                @if (!empty($country))
                                                    <option value="{{ $country }}"
                                                        {{ old('country') == $country ? 'selected' : '' }}>
                                                        {{ $country }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <label for="address" class="form-label">Address</label>
                                        <textarea class="form-control" name="address" id="address" placeholder="Enter complete address (optional)"
                                            rows="3">{{ old('address') }}</textarea>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary px-5" id="submitBtn">
                                            <i class="bx bx-save"></i> Save
                                        </button>
                                        <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary px-5 ms-2">
                                            <i class="bx bx-x"></i> Cancel
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Container Fluid -->
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- jQuery Validation Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>

    

    <script src="{{ asset('assets/customjs/add_school.js') }}"></script>
@endpush