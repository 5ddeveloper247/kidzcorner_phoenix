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
                                    <li class="breadcrumb-item"><a href="{{ route('companies') }}"><i class="bx bx-home-alt"></i></a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('companies') }}">Schools</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit School</li>
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
                        <!-- Edit School Form Card -->
                        <div class="card border-top border-0 border-4 border-warning">
                            <div class="card-body p-5">
                                <div class="card-title d-flex align-items-center">
                                    <div><i class="bx bx-edit me-1 font-22 text-warning"></i></div>
                                    <h5 class="mb-0 text-warning">Edit School</h5>
                                </div>
                                <hr>

                                <!-- Alert Container for Messages -->
                                <div id="alertContainer"></div>

                                <!-- Success Message (for non-AJAX fallback) -->
                                @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <i class="bx bx-check-circle me-2"></i>{{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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

                                <form method="POST" action="{{ route('admin.updateSchool', $school->id) }}" class="row g-3" id="editSchoolForm">
                                    @csrf

                                    <div class="col-md-6">
                                        <label for="name" class="form-label">School Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $school->name) }}" placeholder="Enter school name">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                        <input type="email" name="email" class="form-control" id="email" value="{{ old('email', $school->email) }}" placeholder="Enter email address">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                                        <input type="text" name="phone" class="form-control" id="phone" value="{{ old('phone', $school->phone) }}" placeholder="Enter phone number">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="country" class="form-label">Country <span class="text-danger">*</span></label>
                                        <select id="country" name="country" class="form-select">
                                            <option value="">Select Country</option>
                                            @foreach (country_names() as $country)
                                                @if (!empty($country))
                                                    <option value="{{ $country }}"
                                                        {{ (old('country', $school->country) == $country) ? 'selected' : '' }}>
                                                        {{ $country }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <label for="address" class="form-label">Address</label>
                                        <textarea class="form-control" name="address" id="address" placeholder="Enter complete address (optional)" rows="3">{{ old('address', $school->address) }}</textarea>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-warning px-5" id="updateBtn">
                                            <i class="bx bx-save"></i> Update School
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

    <script src="{{ asset('assets/customjs/edit_school.js') }}"></script>
@endpush