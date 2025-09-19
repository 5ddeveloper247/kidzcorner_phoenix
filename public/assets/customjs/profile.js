// profile.js

let currentPasswordTimeout;

$(document).ready(function () {
    // Initialize profile forms if on profile page
    if ($("#profileForm").length > 0) {
        initializeProfileForm();
    }

    if ($("#passwordForm").length > 0) {
        initializePasswordForm();
    }
});

function initializeProfileForm() {
    // Initialize jQuery Validation for Profile Form
    $("#profileForm").validate({
        rules: {
            name: { required: true, minlength: 2, maxlength: 255 },
            phone: { required: true, minlength: 10, maxlength: 20 },
            country: { required: true },
            address: { maxlength: 500 },
        },
        messages: {
            name: {
                required: "Please enter your full name",
                minlength: "Name must be at least 2 characters long",
                maxlength: "Name cannot exceed 255 characters",
            },
            phone: {
                required: "Please enter a phone number",
                minlength: "Phone number must be at least 10 digits",
                maxlength: "Phone number cannot exceed 20 digits",
            },
            country: { required: "Please select a country" },
            address: { maxlength: "Address cannot exceed 500 characters" },
        },
        errorElement: "div",
        errorClass: "error",
        errorPlacement: function (error, element) {
            error.insertAfter(element);
        },
        highlight: function (element) {
            $(element).addClass("error");
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element) {
            $(element).removeClass("error");
            $(element).removeClass("is-invalid");
        },
        submitHandler: function (form, event) {
            event.preventDefault();
            updateProfile();
            return false;
        },
    });

    // Reset form validation when reset button is clicked
    $('#profileForm button[type="reset"]').click(function (e) {
        e.preventDefault();
        resetProfileForm();
    });
}

function initializePasswordForm() {

    // Add custom validation method for special characters
    $.validator.addMethod("specialChar", function(value, element) {
        return this.optional(element) || /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(value);
    }, "Password must contain at least one special character (!@#$%^&*()_+-=[]{}|;':\",./<>?)");


    // Initialize jQuery Validation for Password Form
    $("#passwordForm").validate({
        rules: {
            current_password: { required: true, minlength: 8, specialChar: true },
            new_password: { required: true, minlength: 8, maxlength: 255, specialChar: true },
            new_password_confirmation: {
                required: true,
                equalTo: "#new_password",
                minlength: 8,
                specialChar: true
            },
        },
        messages: {
            current_password: {
                required: "Please enter your current password",
                minlength: "Password must be at least 8 characters long",
                specialChar: "Password must contain at least one special character (!@#$%^&*()_+-=[]{}|;':\",./<>?)"
            },
            new_password: {
                required: "Please enter a new password",
                minlength: "Password must be at least 8 characters long",
                maxlength: "Password cannot exceed 255 characters",
                specialChar: "Password must contain at least one special character (!@#$%^&*()_+-=[]{}|;':\",./<>?)"
            },
            new_password_confirmation: {
                required: "Please confirm your new password",
                equalTo: "Passwords do not match",
                minlength: "Password must be at least 8 characters long",
                specialChar: "Password must contain at least one special character (!@#$%^&*()_+-=[]{}|;':\",./<>?)"
            },
        },
        errorElement: "div",
        errorClass: "error",
        errorPlacement: function (error, element) {
            if (element.closest(".password-field").length) {
                error.insertAfter(element.closest(".password-field"));
            } else {
                error.insertAfter(element);
            }
        },
        highlight: function (element) {
            $(element).addClass("error");
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element) {
            $(element).removeClass("error");
            $(element).removeClass("is-invalid");
        },
        submitHandler: function (form, event) {
            event.preventDefault();
            changePassword();
            return false;
        },
    });

    // Replace the existing current password validation in initializePasswordForm()

    $("#current_password").on("keyup blur", function () {
        const currentPassword = $(this).val().trim();

        // Clear existing timeout
        if (currentPasswordTimeout) {
            clearTimeout(currentPasswordTimeout);
        }

        // Only validate if field has content and meets minimum length
        if (currentPassword.length >= 8) {
            // Add a delay to avoid too many requests while typing
            currentPasswordTimeout = setTimeout(function () {
                validateCurrentPassword(currentPassword);
            }, 200); // 500ms delay
        } else if (currentPassword.length > 0) {
            // Show length error immediately for passwords shorter than 8 characters
            showCurrentPasswordError(
                "Password must be at least 8 characters long"
            );
        } else {
            // Clear error if field is empty
            removeCurrentPasswordError();
        }
    });

    // Reset form validation when reset button is clicked
    $('#passwordForm button[type="reset"]').click(function (e) {
        e.preventDefault();
        resetPasswordForm();
    });
}

// Update profile function using AJAX
function updateProfile() {
    const form = $("#profileForm");
    const formData = new FormData(form[0]);
    const url = form.attr("action");

    // Clear previous validation errors
    clearValidationErrors("#profileForm");

    // Disable submit button to prevent double submission
    const updateBtn = $("#profileUpdateBtn");
    const originalText = updateBtn.html();
    updateBtn
        .prop("disabled", true)
        .html('<i class="bx bx-loader-alt bx-spin"></i> Saving...');

    SendAjaxRequestToServer(
        "POST",
        url,
        formData,
        "json",
        updateProfileResponse,
        "",
        ""
    );
}

// Callback function for update profile response
function updateProfileResponse(response) {
    const updateBtn = $("#profileUpdateBtn");
    const originalText = '<i class="bx bx-save"></i> Save Profile';

    // Re-enable submit button
    updateBtn.prop("disabled", false).html(originalText);

    if (
        response.success ||
        response.status == 200 ||
        response.status == "200"
    ) {
        toastr.success(
            response.message || "Profile updated successfully!",
            "Success",
            {
                timeOut: 3000,
            }
        );

        // Update original values for reset functionality
        updateOriginalValues("#profileForm");
    } else {
        // Handle validation errors
        if (response.errors) {
            displayValidationErrors("#profileForm", response.errors);
        }

        toastr.error(
            response.message || "An error occurred while updating the profile.",
            "Error",
            {
                timeOut: 5000,
            }
        );
    }
}

// Change password function using AJAX
function changePassword() {
    const form = $("#passwordForm");
    const formData = new FormData(form[0]);
    const url = form.attr("action");

    // Clear previous validation errors
    clearValidationErrors("#passwordForm");

    // Disable submit button to prevent double submission
    const updateBtn = $("#passwordUpdateBtn");
    const originalText = updateBtn.html();
    updateBtn
        .prop("disabled", true)
        .html('<i class="bx bx-loader-alt bx-spin"></i> Changing...');

    SendAjaxRequestToServer(
        "POST",
        url,
        formData,
        "json",
        changePasswordResponse,
        "",
        ""
    );
}

// Callback function for change password response
function changePasswordResponse(response) {
    const updateBtn = $("#passwordUpdateBtn");
    const originalText = '<i class="bx bx-key"></i> Change Password';

    // Re-enable submit button
    updateBtn.prop("disabled", false).html(originalText);

    if (
        response.success ||
        response.status == 200 ||
        response.status == "200"
    ) {
        toastr.success(
            response.message || "Password changed successfully!",
            "Success",
            {
                timeOut: 3000,
            }
        );

        // Clear password form
        resetPasswordForm();
    } else {
        // Handle validation errors
        if (response.errors) {
            displayValidationErrors("#passwordForm", response.errors);
        }

        toastr.error(
            response.message ||
                "An error occurred while changing the password.",
            "Error",
            {
                timeOut: 5000,
            }
        );
    }
}

// Display validation errors
function displayValidationErrors(formSelector, errors) {
    $.each(errors, function (field, messages) {
        const fieldElement = $(formSelector + ' [name="' + field + '"]');
        if (fieldElement.length) {
            fieldElement.addClass("error is-invalid");

            // Remove existing error message for this field
            if (fieldElement.closest(".password-field").length) {
                fieldElement
                    .closest(".password-field")
                    .siblings(".error")
                    .remove();
            } else {
                fieldElement.siblings(".error").remove();
            }

            // Add new error message
            const errorDiv = $('<div class="error">' + messages[0] + "</div>");
            if (fieldElement.closest(".password-field").length) {
                errorDiv.insertAfter(fieldElement.closest(".password-field"));
            } else {
                errorDiv.insertAfter(fieldElement);
            }
        }
    });
}

// Reset profile form to original values
function resetProfileForm() {
    const form = $("#profileForm");

    // Get original values from data attributes
    form.find("input, select, textarea").each(function () {
        const field = $(this);
        const originalValue = field.data("original-value") || "";

        if (field.is("select")) {
            field.val(originalValue).trigger("change");
        } else {
            field.val(originalValue);
        }
    });

    if (form.data("validator")) {
        form.validate().resetForm();
    }
    clearValidationErrors("#profileForm");
    $("#alertContainer").empty();
}

// Reset password form
function resetPasswordForm() {
    const form = $("#passwordForm");
    form[0].reset();
    if (form.data("validator")) {
        form.validate().resetForm();
    }
    clearValidationErrors("#passwordForm");

    removeCurrentPasswordError();
}

// Update original values after successful update
function updateOriginalValues(formSelector) {
    $(
        formSelector +
            " input, " +
            formSelector +
            " select, " +
            formSelector +
            " textarea"
    ).each(function () {
        const field = $(this);
        if (!field.is(":disabled")) {
            field.data("original-value", field.val());
        }
    });
}

// Clear validation errors
function clearValidationErrors(formSelector) {
    $(
        formSelector + " .form-control, " + formSelector + " .form-select"
    ).removeClass("error is-invalid");
    $(formSelector + " .error").remove();
}

function togglePassword(fieldId, iconElement) {
    const passwordField = document.getElementById(fieldId);
    const icon = iconElement.querySelector("i");

    if (passwordField.type === "password") {
        passwordField.type = "text";
        icon.classList.remove("bx-hide");
        icon.classList.add("bx-show");
    } else {
        passwordField.type = "password";
        icon.classList.remove("bx-show");
        icon.classList.add("bx-hide");
    }
}

// Validate current password via AJAX
// Update the validateCurrentPassword function
function validateCurrentPassword(password) {
    const currentPasswordField = $('#current_password');
    
    // Create form data
    const formData = new FormData();
    formData.append('current_password', password);
    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
    
    // Make AJAX request to validate current password
    $.ajax({
        url: '/validate-current-password',
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            // Password is correct, remove any existing error
            removeCurrentPasswordError();
        },
        error: function(xhr) {
            if (xhr.status === 422) {
                // Invalid password
                showCurrentPasswordError('The current password is incorrect.');
            }
        }
    });
}
// Show current password error
function showCurrentPasswordError(message) {
    const currentPasswordField = $("#current_password");
    const passwordFieldContainer =
        currentPasswordField.closest(".password-field");

    // Remove existing error
    removeCurrentPasswordError();

    // Add error class
    currentPasswordField.addClass("error is-invalid");

    // Add error message
    const errorDiv = $('<div class="error">' + message + "</div>");
    errorDiv.insertAfter(passwordFieldContainer);
}

// Remove current password error
function removeCurrentPasswordError() {
    const currentPasswordField = $("#current_password");
    const passwordFieldContainer =
        currentPasswordField.closest(".password-field");

    // Remove error class
    currentPasswordField.removeClass("error is-invalid");

    // Remove error message
    passwordFieldContainer.siblings(".error").remove();
}
