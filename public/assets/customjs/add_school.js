// add_school.js

$(document).ready(function() {
    // Initialize School Management if on add school page
    if ($('#schoolForm').length > 0) {
        initializeAddSchoolForm();
    }
});

// Add custom validation method for special characters
    $.validator.addMethod("specialChar", function(value, element) {
        return this.optional(element) || /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(value);
    }, "Password must contain at least one special character (!@#$%^&*()_+-=[]{}|;':\",./<>?)");

function initializeAddSchoolForm() {
    // Initialize jQuery Validation for Add School Form
    $("#schoolForm").validate({
        rules: {
            name: { required: true, minlength: 2, maxlength: 255 },
            email: { required: true, email: true, maxlength: 255 },
            password: { required: true, minlength: 8, maxlength: 255, specialChar: true },
            password_confirmation: { required: true, equalTo: "#password" },
            phone: { required: true, minlength: 10, maxlength: 20, digits: true },
            country: { required: true },
            logo: { 
                required: false, 
                extension: "jpg|jpeg|png|gif",
                filesize: 2097152 // 2MB in bytes
            }
        },
        messages: {
            name: { 
                required: "Please enter the school name", 
                minlength: "Name must be at least 2 characters long", 
                maxlength: "Name cannot exceed 255 characters" 
            },
            email: { 
                required: "Please enter an email address", 
                email: "Please enter a valid email address", 
                maxlength: "Email cannot exceed 255 characters" 
            },
            password: { 
                required: "Please enter a password", 
                minlength: "Password must be at least 8 characters long", 
                maxlength: "Password cannot exceed 255 characters",
                specialChar: "Password must contain at least one special character (!@#$%^&*()_+-=[]{}|;':\",./<>?)"
            },
            password_confirmation: { 
                required: "Please confirm your password", 
                equalTo: "Passwords do not match" 
            },
            phone: { 
                required: "Please enter a phone number", 
                minlength: "Phone number must be at least 10 digits", 
                maxlength: "Phone number cannot exceed 20 digits", 
                digits: "Please enter only numbers" 
            },
            country: { required: "Please select a country" },
            logo: {
                extension: "Please select a valid image file (JPG, JPEG, PNG, GIF)",
                filesize: "Logo file size must be less than 2MB"
            }
        },
        errorElement: "div",
        errorClass: "error",
        errorPlacement: function(error, element) {
            if (element.closest('.password-field').length) {
                error.insertAfter(element.closest('.password-field'));
            } else if (element.attr('name') === 'logo') {
                error.insertAfter(element.siblings('.text-center').last());
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
            submitSchoolForm();
            return false; 
        }
    });

    // Add custom validation methods
    $.validator.addMethod("filesize", function(value, element, param) {
        return this.optional(element) || (element.files[0] && element.files[0].size <= param);
    }, "File size must be less than {0} bytes");

    // Reset form validation when reset button is clicked
    $('button[type="reset"]').click(function(e) {
        e.preventDefault();
        resetSchoolForm();
    });

    // Logo file input change handler with validation
    $('#logo').on('change', function() {
        const file = this.files[0];
        if (file) {
            // Validate file type
            const allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
            if (!allowedTypes.includes(file.type)) {
                showLogoError('Please select a valid image file (JPG, JPEG, PNG, GIF)');
                removeLogo();
                return;
            }

            // Validate file size (2MB)
            if (file.size > 2097152) {
                showLogoError('Logo file size must be less than 2MB');
                removeLogo();
                return;
            }

            // Clear any previous logo errors
            clearLogoError();
        }
    });
}

// Show logo validation error
function showLogoError(message) {
    clearLogoError();
    const errorDiv = $('<div class="error">' + message + '</div>');
    $('.logo-upload-container').parent().append(errorDiv);
}

// Clear logo validation error
function clearLogoError() {
    $('.logo-upload-container').parent().find('.error').remove();
}

// Submit school form using AJAX function
function submitSchoolForm() {
    const form = $('#schoolForm');
    const formData = new FormData(form[0]);
    const url = form.attr('action');
    
    // Clear previous validation errors
    clearValidationErrors();
    
    // Disable submit button to prevent double submission
    const submitBtn = $('#submitBtn');
    const originalText = submitBtn.html();
    submitBtn.prop('disabled', true).html('<i class="bx bx-loader-alt bx-spin"></i> Adding...');
    
    SendAjaxRequestToServer('POST', url, formData, 'json', addSchoolResponse, '', '');
}

// Callback function for add school response
function addSchoolResponse(response) {
    const submitBtn = $('#submitBtn');
    const originalText = '<i class="bx bx-plus"></i> Add School';
    
    // Re-enable submit button
    submitBtn.prop('disabled', false).html(originalText);
    
    if (response.success || response.status == 200 || response.status == '200') {
        toastr.success(response.message || 'School added successfully!', 'Success', {
            timeOut: 3000
        });
        
        // Check if we should redirect
        if (response.redirect) {
            setTimeout(function() {
                window.location.href = response.redirect;
            }, 1500);
        } else {
            // Reset form if staying on same page
            resetSchoolForm();
        }
    } else {
        // Handle validation errors
        if (response.errors) {
            displayValidationErrors(response.errors);
        }
        
        toastr.error(response.message || 'An error occurred while adding the school.', 'Error', {
            timeOut: 5000
        });
    }
}

// Display validation errors
function displayValidationErrors(errors) {
    $.each(errors, function(field, messages) {
        const fieldElement = $('[name="' + field + '"]');
        if (fieldElement.length) {
            fieldElement.addClass('error is-invalid');
            
            // Remove existing error message for this field
            if (field === 'logo') {
                clearLogoError();
                showLogoError(messages[0]);
            } else {
                fieldElement.siblings('.error').remove();
                
                // Add new error message
                const errorDiv = $('<div class="error">' + messages[0] + '</div>');
                if (fieldElement.closest('.password-field').length) {
                    errorDiv.insertAfter(fieldElement.closest('.password-field'));
                } else {
                    errorDiv.insertAfter(fieldElement);
                }
            }
        }
    });
}

// Reset school form
function resetSchoolForm() {
    const form = $('#schoolForm');
    form[0].reset();
    if (form.data('validator')) {
        form.validate().resetForm();
    }
    clearValidationErrors();
    $('#alertContainer').empty();
    
    // Reset logo preview
    removeLogo();
}

// Clear validation errors
function clearValidationErrors() {
    $('.form-control, .form-select').removeClass('error is-invalid');
    $('.error').remove();
    clearLogoError();
}

// Remove logo function (global scope for onclick)
function removeLogo(event) {
    if (event) {
        event.stopPropagation(); // Prevent triggering the file input
    }
    
    const preview = document.getElementById('logoPreview');
    const placeholder = document.getElementById('logoPlaceholder');
    const removeBtn = document.getElementById('logoRemove');
    const container = document.querySelector('.logo-upload-container');
    const fileInput = document.getElementById('logo');
    
    // Reset everything
    if (preview) {
        preview.src = '';
        preview.classList.remove('show');
    }
    if (placeholder) {
        placeholder.classList.remove('hide');
    }
    if (removeBtn) {
        removeBtn.classList.remove('show');
    }
    if (container) {
        container.classList.remove('has-image');
    }
    if (fileInput) {
        fileInput.value = '';
    }
    
    // Clear any validation errors for logo
    clearLogoError();
}

// Preview logo function (global scope for onchange)
function previewLogo(input) {
    const preview = document.getElementById('logoPreview');
    const placeholder = document.getElementById('logoPlaceholder');
    const removeBtn = document.getElementById('logoRemove');
    const container = input.closest('.logo-upload-container') || document.querySelector('.logo-upload-container');
    
    if (input.files && input.files[0]) {
        const file = input.files[0];
        
        // Validate file before preview
        const allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
        if (!allowedTypes.includes(file.type)) {
            showLogoError('Please select a valid image file (JPG, JPEG, PNG, GIF)');
            removeLogo();
            return;
        }

        if (file.size > 2097152) { // 2MB
            showLogoError('Logo file size must be less than 2MB');
            removeLogo();
            return;
        }

        const reader = new FileReader();
        
        reader.onload = function(e) {
            if (preview) {
                preview.src = e.target.result;
                preview.classList.add('show');
            }
            if (placeholder) {
                placeholder.classList.add('hide');
            }
            if (removeBtn) {
                removeBtn.classList.add('show');
            }
            if (container) {
                container.classList.add('has-image');
            }
            
            // Clear any previous logo errors
            clearLogoError();
        };
        
        reader.readAsDataURL(file);
    }
}

// Password visibility toggle function
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