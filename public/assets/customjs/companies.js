// companies.js
// Global variables
let schoolsTable;

$(document).ready(function() {
    // Initialize School Management if on school page
    if ($('#schoolsTable').length > 0) {
        initializeSchoolsListing();
        initializeFilters();
    }

    // Initialize change password form if modal exists
    if ($('#schoolPasswordForm').length > 0) {
        initializeSchoolPasswordForm();
    }
});

function initializeSchoolsListing() {
    // Initialize DataTable
    schoolsTable = $('#schoolsTable').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: {
            url: $('#schoolsTable').data('ajax-url') || "/admin/schools/datatable",
            type: 'GET',
            data: function(d) {
                // Add filter parameters to the request
                d.country = $('#countryFilter').val();
                d.date_from = $('#dateFromFilter').val();
                d.date_to = $('#dateToFilter').val();
                d.status = $('#statusFilter').val();
            },
            error: function(xhr, error, thrown) {
                console.error('DataTable Ajax Error:', error, thrown);
                toastr.error('Error loading data. Please refresh the page.', 'Error');
            }
        },
        columns: [
            { data: 'id', name: 'id', width: '5%' },
            { data: 'name', name: 'name', width: '15%' },
            { data: 'email', name: 'email', width: '15%' },
            { data: 'phone', name: 'phone', width: '10%' },
            { data: 'country', name: 'country', width: '10%' },
            { data: 'address', name: 'address', width: '15%', orderable: false },
            { data: 'created_at', name: 'created_at', width: '10%' },
            { data: 'action', name: 'action', orderable: false, searchable: false, width: '20%' }
        ],
        order: [[0, 'desc']],
        pageLength: 10,
        lengthMenu: [[10, 25, 50, 100], [10, 25, 50, 100]],
        language: {
            processing: '<div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>',
            emptyTable: "No schools found",
            zeroRecords: "No matching schools found"
        },
        dom: '<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>><"row"<"col-sm-12"tr>><"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>',
        drawCallback: function() {
            $('[data-bs-toggle="tooltip"]').tooltip();
        }
    });
}

function initializeFilters() {
    // Load countries for filter dropdown
    loadCountriesForFilter();

    // Initialize date pickers
    initializeDatePickers();

    // Filter event handlers
    $('#countryFilter, #statusFilter').on('change', function() {
        applyFilters();
    });

    $('#dateFromFilter, #dateToFilter').on('change', function() {
        applyFilters();
    });

    // Clear filters button
    $('#clearFiltersBtn').on('click', function() {
        clearAllFilters();
    });

    // Apply filters button click
    $('#applyFiltersBtn').on('click', function() {
        applyFilters();
    });

    // Toggle filters visibility
    $('#toggleFiltersBtn').on('click', function() {
        $('#filtersSection').slideToggle();
        const icon = $(this).find('i');
        if (icon.hasClass('bx-chevron-down')) {
            icon.removeClass('bx-chevron-down').addClass('bx-chevron-up');
        } else {
            icon.removeClass('bx-chevron-up').addClass('bx-chevron-down');
        }
    });
}

function loadCountriesForFilter() {
    $.ajax({
        url: '/admin/countries',
        type: 'GET',
        success: function(response) {
            if (response.success && response.countries) {
                const countrySelect = $('#countryFilter');
                countrySelect.empty().append('<option value="">All Countries</option>');
                
                response.countries.forEach(function(country) {
                    countrySelect.append(`<option value="${country}">${country}</option>`);
                });
            }
        },
        error: function(xhr, status, error) {
            console.error('Error loading countries:', error);
        }
    });
}

function initializeDatePickers() {
    // Set max date to today
    const today = new Date().toISOString().split('T')[0];
    $('#dateFromFilter').attr('max', today);

    // Ensure date from is not greater than date to
    $('#dateFromFilter').on('change', function() {
        const fromDate = $(this).val();
        if (fromDate) {
            $('#dateToFilter').attr('min', fromDate);
        } else {
            $('#dateToFilter').removeAttr('min');
        }
    });

    $('#dateToFilter').on('change', function() {
        const toDate = $(this).val();
        // if (toDate) {
        //     $('#dateFromFilter').attr('max', toDate);
        // } else {
        //     $('#dateFromFilter').attr('max', today);
        // }
    });
}

function applyFilters() {
    if (schoolsTable) {
        // Show loading indicator
        const loadingBtn = $('#applyFiltersBtn');
        const originalText = loadingBtn.html();
        loadingBtn.prop('disabled', true).html('<i class="bx bx-loader-alt bx-spin"></i> Filtering...');

        // Reload table with filters
        schoolsTable.ajax.reload(function() {
            // Re-enable button
            loadingBtn.prop('disabled', false).html(originalText);
            
            // Update results count display
            updateFilterResultsDisplay();
        });
    }
}

function clearAllFilters() {
    // Clear all filter values
    $('#countryFilter').val('');
    $('#statusFilter').val('');
    $('#dateFromFilter').val('');
    $('#dateToFilter').val('');
    
    // Remove date constraints
    $('#dateFromFilter').removeAttr('max').removeAttr('min');
    $('#dateToFilter').removeAttr('max').removeAttr('min');
    
    // Set max date back to today
    const today = new Date().toISOString().split('T')[0];
    $('#dateFromFilter, #dateToFilter').attr('max', today);
    
    // Show clearing indicator on Clear All button
    const clearBtn = $('#clearFiltersBtn');
    const originalClearText = clearBtn.html();
    clearBtn.prop('disabled', true).html('<i class="bx bx-loader-alt bx-spin"></i> Clearing...');
    
    // Reload table without filters
    if (schoolsTable) {
        schoolsTable.ajax.reload(function() {
            // Re-enable clear button
            clearBtn.prop('disabled', false).html(originalClearText);
            
            // Update results count display
            updateFilterResultsDisplay();
        });
    }
}

function updateFilterResultsDisplay() {
    const info = schoolsTable.page.info();
    const activeFilters = getActiveFiltersCount();
    
    if (activeFilters > 0) {
        $('#filterResultsInfo').html(
            `<small class="text-muted">
                <i class="bx bx-filter-alt"></i> 
                ${activeFilters} filter(s) applied - Showing ${info.recordsDisplay} of ${info.recordsTotal} schools
            </small>`
        ).show();
    } else {
        $('#filterResultsInfo').hide();
    }
}

function getActiveFiltersCount() {
    let count = 0;
    if ($('#countryFilter').val()) count++;
    if ($('#statusFilter').val()) count++;
    if ($('#dateFromFilter').val()) count++;
    if ($('#dateToFilter').val()) count++;
    return count;
}

function initializeSchoolPasswordForm() {
    // Add custom validation method for special characters
    $.validator.addMethod("specialChar", function(value, element) {
        return this.optional(element) || /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(value);
    }, "Password must contain at least one special character (!@#$%^&*()_+-=[]{}|;':\",./<>?)");

    // Initialize jQuery Validation for School Password Form
    $("#schoolPasswordForm").validate({
        rules: {
            new_password: { required: true, minlength: 8, maxlength: 255, specialChar: true },
            new_password_confirmation: { 
                required: true, 
                equalTo: "#new_password",
                minlength: 8,
                specialChar: true
            }
        },
        messages: {
            new_password: { 
                required: "Please enter a new password", 
                minlength: "Password must be at least 8 characters long",
                maxlength: "Password cannot exceed 255 characters",
                specialChar: "Password must contain at least one special character (!@#$%^&*()_+-=[]{}|;':\",./<>?)"
            },
            new_password_confirmation: { 
                required: "Please confirm the new password",
                equalTo: "Passwords do not match",
                minlength: "Password must be at least 8 characters long",
                specialChar: "Password must contain at least one special character (!@#$%^&*()_+-=[]{}|;':\",./<>?)"
            }
        },
        errorElement: "div",
        errorClass: "error",
        errorPlacement: function(error, element) {
            if (element.closest('.password-field').length) {
                error.insertAfter(element.closest('.password-field'));
            } else {
                error.insertAfter(element);
            }
        },
        highlight: function(element) { 
            $(element).addClass("error");
            $(element).addClass("is-invalid");
        },
        unhighlight: function(element) { 
            $(element).removeClass("error");
            $(element).removeClass("is-invalid");
        },
        submitHandler: function(form, event) {
            event.preventDefault();
            changeSchoolPassword();
            return false;
        }
    });
}

// Open change password modal
function openChangePasswordModal(schoolId, schoolName) {
    // Set form action URL
    const form = $('#schoolPasswordForm');
    const actionUrl = '/admin/schools/' + schoolId + '/change-password';
    form.attr('action', actionUrl);
    
    // Set school name in modal
    $('#schoolNameDisplay').val(schoolName);
    
    // Reset form
    resetSchoolPasswordForm();
    
    // Show modal
    const modal = new bootstrap.Modal(document.getElementById('changePasswordModal'));
    modal.show();
}

// Change school password function using AJAX
function changeSchoolPassword() {
    const form = $('#schoolPasswordForm');
    const formData = new FormData(form[0]);
    const url = form.attr('action');
    
    // Clear previous validation errors
    clearValidationErrors('#schoolPasswordForm');
    
    // Disable submit button to prevent double submission
    const updateBtn = $('#schoolPasswordUpdateBtn');
    updateBtn.data('original-text', updateBtn.html());
    updateBtn.prop('disabled', true).html('<i class="bx bx-loader-alt bx-spin"></i> Changing...');
    
    SendAjaxRequestToServer('POST', url, formData, 'json', changeSchoolPasswordResponse, '', '');
}

// Callback function for change school password response
function changeSchoolPasswordResponse(response) {
    const updateBtn = $('#schoolPasswordUpdateBtn');
    const originalText = updateBtn.data('original-text') || '<i class="bx bx-key"></i> Change Password';
    
    // Re-enable submit button
    updateBtn.prop('disabled', false).html(originalText);
    
    if (response.success || response.status == 200 || response.status == '200') {
        toastr.success(response.message || 'School password changed successfully!', 'Success', {
            timeOut: 3000
        });
        
        // Close modal
        const modal = bootstrap.Modal.getInstance(document.getElementById('changePasswordModal'));
        modal.hide();
        
        // Reset form
        resetSchoolPasswordForm();
        
    } else {
        // Handle validation errors
        if (response.errors) {
            displayValidationErrors('#schoolPasswordForm', response.errors);
        }
        
        toastr.error(response.message || 'An error occurred while changing the password.', 'Error', {
            timeOut: 5000
        });
    }
}

// Reset school password form
function resetSchoolPasswordForm() {
    const form = $('#schoolPasswordForm');
    form[0].reset();
    if (form.data('validator')) {
        form.validate().resetForm();
    }
    clearValidationErrors('#schoolPasswordForm');
}

// Delete School Function
function deleteSchool(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            const url = "/admin/schools/" + id;
            const data = new FormData();
            data.append('_method', 'DELETE');
            data.append('_token', $('meta[name="csrf-token"]').attr('content'));
           
            SendAjaxRequestToServer('POST', url, data, 'json', deleteSchoolResponse, '', '');
        }
    });
}

// Callback function for delete school response
function deleteSchoolResponse(response) {
    if (response.success || response.status == 200 || response.status == '200') {
        toastr.success(response.message || 'School deleted successfully!', 'Success');
       
        // Reload DataTable
        if (schoolsTable) {
            schoolsTable.ajax.reload(null, false);
        }
    } else {
        toastr.error(response.message || 'Something went wrong.', 'Error');
    }
}

// Export filtered data
function exportFilteredData(format) {
    const filters = {
        country: $('#countryFilter').val(),
        date_from: $('#dateFromFilter').val(),
        date_to: $('#dateToFilter').val(),
        status: $('#statusFilter').val(),
        format: format
    };

    const queryString = $.param(filters);
    window.open(`/admin/schools/export?${queryString}`, '_blank');
}

// Display validation errors (reusable function)
function displayValidationErrors(formSelector, errors) {
    $.each(errors, function(field, messages) {
        const fieldElement = $(formSelector + ' [name="' + field + '"]');
        if (fieldElement.length) {
            fieldElement.addClass('error is-invalid');
            
            // Remove existing error message for this field
            if (fieldElement.closest('.password-field').length) {
                fieldElement.closest('.password-field').siblings('.error').remove();
            } else {
                fieldElement.siblings('.error').remove();
            }
            
            // Add new error message
            const errorDiv = $('<div class="error">' + messages[0] + '</div>');
            if (fieldElement.closest('.password-field').length) {
                errorDiv.insertAfter(fieldElement.closest('.password-field'));
            } else {
                errorDiv.insertAfter(fieldElement);
            }
        }
    });
}

// Clear validation errors (reusable function)
function clearValidationErrors(formSelector) {
    $(formSelector + ' .form-control, ' + formSelector + ' .form-select').removeClass('error is-invalid');
    $(formSelector + ' .error').remove();
}

// Toggle password visibility
function togglePassword(fieldId, iconElement) {
    const passwordField = document.getElementById(fieldId);
    const icon = iconElement.querySelector('i');
    
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        icon.classList.remove('bx-hide');
        icon.classList.add('bx-show');
    } else {
        passwordField.type = 'password';
        icon.classList.remove('bx-show');
        icon.classList.add('bx-hide');
    }
}