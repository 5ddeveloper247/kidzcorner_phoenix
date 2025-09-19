$(document).ready(function () {
    // Setup CSRF token
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    // Initialize validation
    $("#forgotPasswordForm").validate({
        rules: {
            email: { required: true, email: true, maxlength: 255 },
        },
        messages: {
            email: {
                required: "Please enter your email address",
                email: "Please enter a valid email",
                maxlength: "Email cannot exceed 255 characters",
            },
        },
        errorElement: "div",
        errorClass: "error",
        highlight: function (element) {
            $(element).addClass("error is-invalid");
        },
        unhighlight: function (element) {
            $(element).removeClass("error is-invalid");
        },
        submitHandler: function (form, event) {
            event.preventDefault();
            submitForgotPasswordForm();
            return false;
        },
    });

    // Toastr options
    toastr.options = {
        closeButton: true,
        progressBar: true,
        positionClass: "toast-top-right",
        timeOut: "5000",
    };
});

function submitForgotPasswordForm() {
    const form = $("#forgotPasswordForm");
    const formData = new FormData(form[0]);
    const url = form.attr("action");

    const sendResetBtn = $("#sendResetBtn");
    const originalText = sendResetBtn.html();

    sendResetBtn
        .prop("disabled", true)
        .html('<i class="bx bx-loader-alt bx-spin"></i> Sending...');

    $.ajax({
        url: url,
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            toastr.success(
                response.message || "Reset link sent successfully!",
                "Success"
            );
            form[0].reset();
            showSuccessMessage(response.message);
            sendResetBtn.prop("disabled", false).html(originalText);
        },
        error: function (xhr) {
            sendResetBtn.prop("disabled", false).html(originalText);
            if (xhr.status === 422 && xhr.responseJSON.errors) {
                displayValidationErrors(xhr.responseJSON.errors);
                toastr.error(
                    "Please check your input and try again.",
                    "Validation Error"
                );
            } else {
                toastr.error(
                    "Something went wrong. Please try again.",
                    "Error"
                );
            }
        },
    });
}

function displayValidationErrors(errors) {
    $.each(errors, function (field, messages) {
        const fieldElement = $('[name="' + field + '"]');
        fieldElement.addClass("error is-invalid");
        fieldElement.siblings(".error").remove();
        $('<div class="error">' + messages[0] + "</div>").insertAfter(
            fieldElement
        );
    });
}

function showSuccessMessage(message) {
    const successHtml = `
                <div class="success-message">
                    <i class="bx bx-check-circle me-2"></i>${message}
                </div>`;
    $(".alert, .success-message").remove();
    $(".forgot-box .card-body").prepend(successHtml);
}
