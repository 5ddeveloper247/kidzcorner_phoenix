// edit_school.js

$(document).ready(function() {
    // Initialize School Management if on edit school page
    if ($('#editSchoolForm').length > 0) {
        initializeEditSchoolForm();
    }
});

function initializeEditSchoolForm() {
    // Initialize jQuery Validation for Edit School Form
    $("#editSchoolForm").validate({
        rules: {
            name: { required: true, minlength: 2, maxlength: 255 },
            email: { required: true, email: true, maxlength: 255 },
            phone: { required: true, minlength: 10, maxlength: 20 },
            country: { required: true }
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
            phone: { 
                required: "Please enter a phone number", 
                minlength: "Phone number must be at least 10 digits", 
                maxlength: "Phone number cannot exceed 20 digits" 
            },
            country: { required: "Please select a country" }
        },
        errorElement: "div",
        errorClass: "error",
        errorPlacement: function(error, element) {
            error.insertAfter(element);
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
            updateSchool();
            return false;
        }
    });

    // Reset form validation when reset button is clicked
    $('button[type="reset"]').click(function(e) {
        e.preventDefault();
        resetEditSchoolForm();
    });
}

// Update school function using AJAX
function updateSchool() {
    const form = $('#editSchoolForm');
    const formData = new FormData(form[0]);
    const url = form.attr('action');
    
    // Clear previous validation errors
    clearValidationErrors();
    
    // Disable submit button to prevent double submission
    const updateBtn = $('#updateBtn');
    const originalText = updateBtn.html();
    updateBtn.prop('disabled', true).html('<i class="bx bx-loader-alt bx-spin"></i> Updating...');
    
    SendAjaxRequestToServer('POST', url, formData, 'json', updateSchoolResponse, '', '');
}

// Callback function for update school response
function updateSchoolResponse(response) {
    const updateBtn = $('#updateBtn');
    const originalText = '<i class="bx bx-save"></i> Update School';
    
    // Re-enable submit button
    updateBtn.prop('disabled', false).html(originalText);
    
    if (response.success || response.status == 200 || response.status == '200') {
        toastr.success(response.message || 'School updated successfully!', 'Success', {
            timeOut: 3000
        });
        
        // Check if we should redirect
        if (response.redirect) {
            setTimeout(function() {
                window.location.href = response.redirect;
            }, 1500);
        }
    } else {
        // Handle validation errors
        if (response.errors) {
            displayValidationErrors(response.errors);
        }
        
        toastr.error(response.message || 'An error occurred while updating the school.', 'Error', {
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
            fieldElement.siblings('.error').remove();
            
            // Add new error message
            const errorDiv = $('<div class="error">' + messages[0] + '</div>');
            errorDiv.insertAfter(fieldElement);
        }
    });
}

// Reset edit school form
function resetEditSchoolForm() {
    const form = $('#editSchoolForm');
    
    // Get original values from the form (they should be pre-populated)
    const originalValues = {};
    form.find('input, select, textarea').each(function() {
        const field = $(this);
        const name = field.attr('name');
        if (name) {
            originalValues[name] = field.data('original-value') || field.val();
        }
    });
    
    // Reset to original values
    $.each(originalValues, function(name, value) {
        const field = form.find('[name="' + name + '"]');
        field.val(value);
    });
    
    if (form.data('validator')) {
        form.validate().resetForm();
    }
    clearValidationErrors();
    $('#alertContainer').empty();
}

// Clear validation errors
function clearValidationErrors() {
    $('.form-control, .form-select').removeClass('error is-invalid');
    $('.error').remove();
}