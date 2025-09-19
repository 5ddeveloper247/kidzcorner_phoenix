$(document).ready(function () {
    // Setup CSRF token for AJAX requests
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    // Add custom validation method for special characters
    $.validator.addMethod("specialChar", function(value, element) {
        return this.optional(element) || /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(value);
    }, "Password must contain at least one special character (!@#$%^&*()_+-=[]{}|;':\",./<>?)");

    // Initialize form validation
    $("#loginForm").validate({
        rules: {
            email: { required: true, email: true, maxlength: 255 },
            password: { required: true, minlength: 8, maxlength: 255, specialChar: true },
            
        },
        messages: {
            email: {
                required: "Please enter your email address",
                email: "Please enter a valid email address",
                maxlength: "Email cannot exceed 255 characters",
             
            },
            password: {
                required: "Please enter your password",
                minlength: "Password must be at least 8 characters long",
                maxlength: "Password cannot exceed 255 characters",
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
            $(element).addClass("error is-invalid");
        },
        unhighlight: function (element) {
            $(element).removeClass("error is-invalid");
        },
        submitHandler: function (form, event) {
            event.preventDefault();
            submitLoginForm();
            return false;
        },
    });
});

// Submit login form using AJAX
function submitLoginForm() {
    const form = $("#loginForm");
    const formData = new FormData(form[0]);
    const url = form.attr("action");

    // Clear previous validation errors
    clearValidationErrors();

    // Disable submit button to prevent double submission
    const loginBtn = $("#loginBtn");
    const originalText = loginBtn.html();
    loginBtn
        .prop("disabled", true)
        .html('<i class="bx bx-loader-alt bx-spin"></i> Signing In...');

    $.ajax({
        url: url,
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            if (response.success) {
                toastr.success(
                    response.message || "Login successful!",
                    "Success"
                );

                // Redirect after short delay
                setTimeout(function () {
                    window.location.href = response.redirect;
                }, 1000);
            }
        },
        error: function (xhr) {
            // Re-enable submit button
            loginBtn.prop("disabled", false).html(originalText);

            if (xhr.status === 422) {
                // Validation errors
                const response = xhr.responseJSON;
                if (response.errors) {
                    displayValidationErrors(response.errors);
                }
                toastr.error(
                    response.message ||
                        "Please check your input and try again.",
                    "Validation Error"
                );
            } else if (xhr.status === 401) {
                // Authentication error
                const response = xhr.responseJSON;
                if (response.errors) {
                    displayValidationErrors(response.errors);
                }
                toastr.error(
                    response.message || "Invalid credentials.",
                    "Authentication Failed"
                );
            } else {
                // Server error
                const response = xhr.responseJSON;
                toastr.error(
                    response?.message || "An error occurred. Please try again.",
                    "Error"
                );
            }
        },
    });
}

// Display validation errors
function displayValidationErrors(errors) {
    $.each(errors, function (field, messages) {
        const fieldElement = $('[name="' + field + '"]');
        if (fieldElement.length) {
            fieldElement.addClass("error is-invalid");

            // Remove existing error message for this field
            fieldElement.siblings(".error").remove();
            fieldElement.closest(".password-field").siblings(".error").remove();

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

// Clear validation errors
function clearValidationErrors() {
    $(".form-control").removeClass("error is-invalid");
    $(".error").remove();
}

// Password visibility toggle function
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

// Configure toastr options
toastr.options = {
    closeButton: true,
    progressBar: true,
    positionClass: "toast-top-right",
    timeOut: "5000",
};
