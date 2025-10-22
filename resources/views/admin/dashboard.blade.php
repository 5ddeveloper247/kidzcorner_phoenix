@extends('admin.layout.master')

@section('title', 'Dashboard')

@push('styles')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css">

    <style>
        .action-buttons {
            white-space: nowrap;
        }

        .action-buttons .btn {
            margin-right: 5px;
        }

        .action-buttons .btn:last-child {
            margin-right: 0;
        }
        h2{
            font-size: 16px !important;
        }
    </style>
@endpush

@section('content')
    <div class="page-container">

        <!-- Start Container Fluid -->
        <div class="page-content">

            <!--page-wrapper-->
            <div class="page-wrapper">
                <!--page-content-wrapper-->
                <div class="page-content-wrapper">
                    <div class="page-content">
                        <div class="row">
                            <div class="col-12 col-lg-3">
                                <a href="{{ route('isteam') }}">
                                    <div class="card radius-15 overflow-hidden" style="min-height: 170px;">
                                        <div class="card-body d-flex justify-content-center align-items-center">
                                            <h2 class="mb-0">iSTEAM</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-3">
                                <a>
                                    <div class="card radius-15 overflow-hidden" style="min-height: 170px;">
                                        <div class="card-body d-flex justify-content-center align-items-center">
                                            <h2 class="mb-0">MICET</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-3">
                                <a>
                                    <div class="card radius-15 overflow-hidden" style="min-height: 170px;">
                                        <div class="card-body d-flex justify-content-center align-items-center">
                                            <h2 class="mb-0">PHIONICS L1</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-3">
                                <a>
                                    <div class="card radius-15 overflow-hidden" style="min-height: 170px;">
                                        <div class="card-body d-flex justify-content-center align-items-center">
                                            <h2 class="mb-0">PHIONICS L2</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class="col-12 col-lg-3">
                                  <a >
                                    <div class="card radius-15 overflow-hidden" style="min-height: 170px;">
                                        <div class="card-body d-flex justify-content-center align-items-center">
                                            <h2 class="mb-0">MICET APPLET</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-3">
                                 <a >
                                    <div class="card radius-15 overflow-hidden" style="min-height: 170px;">
                                        <div class="card-body d-flex justify-content-center align-items-center">
                                            <h2 class="mb-0">SCIENCE EN</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-3">
                                  <a >
                                    <div class="card radius-15 overflow-hidden" style="min-height: 170px;">
                                        <div class="card-body d-flex justify-content-center align-items-center">
                                            <h2 class="mb-0">SCIENCE CN</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-3">
                                <a >
                                <div class="card radius-15 overflow-hidden" style="min-height: 170px;">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <h2 class="mb-0">SCIENCE APPLET</h2>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-3">
                                <a >
                                    <div class="card radius-15 overflow-hidden" style="min-height: 170px;">
                                        <div class="card-body d-flex justify-content-center align-items-center">
                                            <h2 class="mb-0">CRWR</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-lg-3">
                                 <a >
                                    <div class="card radius-15 overflow-hidden" style="min-height: 170px;">
                                        <div class="card-body d-flex justify-content-center align-items-center">
                                            <h2 class="mb-0">HanYu - PinYin</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <!--end row-->

                        <!-- Success/Error Messages -->
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="bx bx-check-circle me-2"></i>{{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="bx bx-error-circle me-2"></i>{{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <!-- Companies DataTable Card -->
                        <div class="card radius-15">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div><i class="bx bx-buildings me-1 font-22"></i></div>
                                        <h5 class="mb-0">Companies</h5>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-outline-secondary btn-sm" id="toggleFiltersBtn">
                                            <i class="bx bx-filter-alt me-1"></i>Filters
                                            <i class="bx bx-chevron-down ms-1"></i>
                                        </button>
                                        {{-- <div class="dropdown export-dropdown">
                                            <button class="btn btn-outline-success btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-export me-1"></i>Export
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#" onclick="exportFilteredData('csv')">
                                                    <i class="bx bx-file me-1"></i>Export CSV
                                                </a></li>
                                                <li><a class="dropdown-item" href="#" onclick="exportFilteredData('excel')">
                                                    <i class="bx bx-table me-1"></i>Export Excel
                                                </a></li>
                                                <li><a class="dropdown-item" href="#" onclick="exportFilteredData('pdf')">
                                                    <i class="bx bx-file-blank me-1"></i>Export PDF
                                                </a></li>
                                            </ul>
                                        </div> --}}
                                        <a href="{{ route('add_school') }}" class="btn btn-primary btn-sm">
                                            <i class="bx bx-plus me-1"></i>Add School
                                        </a>
                                        <button class="btn btn-outline-info btn-sm"
                                            onclick="if(schoolsTable) schoolsTable.ajax.reload();">
                                            <i class="bx bx-refresh"></i> Refresh
                                        </button>
                                    </div>
                                </div>

                                <!-- Filters Section -->
                                <div id="filtersSection" class="filter-section" style="display: none;">
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="bx bx-filter-alt me-2"></i>
                                        <h6 class="filter-title mb-0">Filter Companies</h6>
                                    </div>

                                    <div class="d-flex flex-wrap align-items-end gap-3">
                                        <!-- Country Filter (left) -->
                                        <div>
                                            <label for="countryFilter" class="form-label">Country</label>
                                            <select class="form-select" id="countryFilter">
                                                <option value="">All Countries</option>
                                                <!-- Options will be populated by JavaScript -->
                                            </select>
                                        </div>

                                        <!-- Date Range Filter (right) -->
                                        <div class="ms-auto">
                                            <label class="form-label">Registration Date Range</label>
                                            <div class="d-flex align-items-center">
                                                <input type="date" class="form-control me-2" id="dateFromFilter"
                                                    placeholder="From Date">
                                                <span class="date-separator me-2">to</span>
                                                <input type="date" class="form-control" id="dateToFilter"
                                                    placeholder="To Date">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Filter Actions -->
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <div class="filter-actions">
                                                <button type="button" class="btn btn-primary btn-sm"
                                                    id="applyFiltersBtn">
                                                    <i class="bx bx-check me-1"></i>Apply Filters
                                                </button>
                                                <button type="button" class="btn btn-outline-secondary btn-sm"
                                                    id="clearFiltersBtn">
                                                    <i class="bx bx-x me-1"></i>Clear All
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="filterResultsInfo"></div>
                                </div>
                                <!-- End Filters Section -->


                                <hr />
                                <div class="table-responsive">
                                    <table id="schoolsTable" class="table table-striped table-bordered"
                                        style="width:100%" data-ajax-url="{{ route('admin.schools.datatable') }}">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Country</th>
                                                <th>Address</th>
                                                <th>Created</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- DataTable will populate this -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end page-content-wrapper-->
            </div>
            <!--end page-wrapper-->
        </div>
        <!-- End Container Fluid -->

    </div>

    <!-- Change Password Modal -->
    <div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="changePasswordModalLabel">
                        <i class="bx bx-key me-2"></i>Change Password
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="schoolPasswordForm" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="new_password" class="form-label">New Password <span
                                    class="text-danger">*</span></label>
                            <div class="password-field">
                                <input type="password" class="form-control" id="new_password" name="new_password"
                                    placeholder="Enter new password">
                                <button type="button" class="password-toggle"
                                    onclick="togglePassword('new_password', this)">
                                    <i class="bx bx-hide"></i>
                                </button>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="new_password_confirmation" class="form-label">Confirm New Password <span
                                    class="text-danger">*</span></label>
                            <div class="password-field">
                                <input type="password" class="form-control" id="new_password_confirmation"
                                    name="new_password_confirmation" placeholder="Confirm new password">
                                <button type="button" class="password-toggle"
                                    onclick="togglePassword('new_password_confirmation', this)">
                                    <i class="bx bx-hide"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-warning" id="schoolPasswordUpdateBtn">
                            <i class="bx bx-key"></i> Change Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>

    <!-- SweetAlert2 for delete confirmation -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('assets/customjs/companies.js') }}"></script>
@endpush
