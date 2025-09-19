@extends('admin.layout.master')
@section('title', 'School Dashboard')
@push('styles')
@endpush
@section('content')
    <!--page-wrapper-->
    <div class="page-wrapper">
        <!--page-content-wrapper-->
        <div class="page-content-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">User Profile</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->

                <!-- Alert Container for messages -->
                <div id="alertContainer"></div>

                <div class="user-profile-page">
                    <div class="card radius-15">
                        <div class="card-body">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#Edit-Profile">
                                        <span class="p-tab-name">Edit Profile</span>
                                        <i class='bx bx-message-edit font-24 d-sm-none'></i>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content mt-3">
                                <div class="tab-pane fade show active" id="Edit-Profile">
                                    <div class="card shadow-none border mb-0 radius-15">
                                        <div class="card-body">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 border-right">
                                                        <h5 class="mb-3">Basic Information</h5>
                                                        <form id="profileForm" action="{{ route('profile.update') }}"
                                                            method="POST" class="row g-3">
                                                            @csrf
                                                            @method('PUT')

                                                            <div class="col-12">
                                                                <label class="form-label">Full Name <span
                                                                        class="text-danger">*</span></label>
                                                                <input type="text" name="name"
                                                                    value="{{ Auth::user()->name }}" class="form-control"
                                                                    data-original-value="{{ Auth::user()->name }}">
                                                            </div>

                                                            <div class="col-12">
                                                                <label class="form-label">Email Address</label>
                                                                <input type="email" value="{{ Auth::user()->email }}"
                                                                    class="form-control" disabled>
                                                                <small class="text-muted">Email cannot be changed</small>
                                                            </div>

                                                            <div class="col-12">
                                                                <label class="form-label">Phone Number <span
                                                                        class="text-danger">*</span></label>
                                                                <input type="text" name="phone"
                                                                    value="{{ Auth::user()->company->phone ?? '' }}"
                                                                    class="form-control"
                                                                    data-original-value="{{ Auth::user()->company->phone ?? '' }}">
                                                            </div>

                                                            <div class="col-12">
                                                                <label class="form-label">Country <span
                                                                        class="text-danger">*</span></label>
                                                                <select name="country" class="form-select">
                                                                    <option value="">Select Country</option>
                                                                    @foreach (country_names() as $country)
                                                                        @if (!empty($country))
                                                                            <option value="{{ $country }}"
                                                                                {{ (Auth::user()->company->country ?? '') == $country ? 'selected' : '' }}>
                                                                                {{ $country }}
                                                                            </option>
                                                                        @endif
                                                                    @endforeach
                                                                </select>
                                                            </div>


                                                            <div class="col-12">
                                                                <label class="form-label">Address</label>
                                                                <textarea name="address" rows="3" class="form-control"
                                                                    data-original-value="{{ Auth::user()->company->address ?? '' }}">{{ Auth::user()->company->address ?? '' }}</textarea>
                                                            </div>

                                                            <div class="col-12">
                                                                <button type="submit" id="profileUpdateBtn"
                                                                    class="btn btn-primary">
                                                                    <i class="bx bx-save"></i> Save Profile
                                                                </button>
                                                                
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="col-12 col-lg-6">
                                                        <h5 class="mb-3">Change Password</h5>
                                                        <form id="passwordForm"
                                                            action="{{ route('profile.change-password') }}" method="POST"
                                                            class="row g-3">
                                                            @csrf
                                                            @method('PUT')

                                                            <div class="col-12">
                                                                <label class="form-label">Current Password <span
                                                                        class="text-danger">*</span></label>
                                                                <div class="password-field position-relative">
                                                                    <input type="password" id="current_password"
                                                                        name="current_password" class="form-control"
                                                                        autocomplete="current-password">
                                                                    <span
                                                                        class="position-absolute top-50 end-0 translate-middle-y pe-3 cursor-pointer"
                                                                        onclick="togglePassword('current_password', this)">
                                                                        <i class="bx bx-hide"></i>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <label class="form-label">New Password <span
                                                                        class="text-danger">*</span></label>
                                                                <div class="password-field position-relative">
                                                                    <input type="password" id="new_password"
                                                                        name="new_password" class="form-control"
                                                                        autocomplete="new-password">
                                                                    <span
                                                                        class="position-absolute top-50 end-0 translate-middle-y pe-3 cursor-pointer"
                                                                        onclick="togglePassword('new_password', this)">
                                                                        <i class="bx bx-hide"></i>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <label class="form-label">Confirm New Password <span
                                                                        class="text-danger">*</span></label>
                                                                <div class="password-field position-relative">
                                                                    <input type="password" id="new_password_confirmation"
                                                                        name="new_password_confirmation"
                                                                        class="form-control" autocomplete="new-password">
                                                                    <span
                                                                        class="position-absolute top-50 end-0 translate-middle-y pe-3 cursor-pointer"
                                                                        onclick="togglePassword('new_password_confirmation', this)">
                                                                        <i class="bx bx-hide"></i>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <button type="submit" id="passwordUpdateBtn"
                                                                    class="btn btn-warning">
                                                                    <i class="bx bx-key"></i> Change Password
                                                                </button>
                                                                
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end page-content-wrapper-->
    </div>
    <!--end page-wrapper-->

    <style>
        .cursor-pointer {
            cursor: pointer;
        }

        .password-field {
            position: relative;
        }

        .border-right {
            border-right: 1px solid #dee2e6;
        }

        @media (max-width: 991.98px) {
            .border-right {
                border-right: none;
                border-bottom: 1px solid #dee2e6;
                padding-bottom: 2rem;
                margin-bottom: 2rem;
            }
        }
    </style>

@endsection

@push('scripts')
    
    <script src="{{ asset('assets/customjs/profile.js') }}"></script>
@endpush
