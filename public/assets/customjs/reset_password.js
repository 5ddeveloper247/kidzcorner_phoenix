$(function () {


    // Add custom validation method for special characters
    $.validator.addMethod("specialChar", function(value, element) {
        return this.optional(element) || /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(value);
    }, "Password must contain at least one special character (!@#$%^&*()_+-=[]{}|;':\",./<>?)");


    $("#resetPasswordForm").validate({
        rules: {
            password: { required: true, minlength: 8, maxlength: 255, specialChar: true },
            password_confirmation: { required: true, equalTo: "#password", specialChar: true },
        },
        messages: {
            password: {
                required: "Please enter your new password",
                minlength: "Password must be at least 8 characters long",
                maxlength: "Password cannot exceed 255 characters",
                specialChar: "Password must contain at least one special character (!@#$%^&*()_+-=[]{}|;':\",./<>?)"
            },
            password_confirmation: {
                required: "Please confirm your password",
                equalTo: "Passwords must match",
                specialChar: "Password must contain at least one special character (!@#$%^&*()_+-=[]{}|;':\",./<>?)"
            },
        },
        errorElement: "div",
        errorClass: "error",
        submitHandler: function (form, e) {
            e.preventDefault();
            submitResetPasswordForm();
        },
    });

    toastr.options = {
        closeButton: true,
        progressBar: true,
        positionClass: "toast-top-right",
        timeOut: "5000",
    };
});

function submitResetPasswordForm() {
    const form = $("#resetPasswordForm");
    const formData = new FormData(form[0]);
    const url = form.attr("action");

    const btn = $("#resetPasswordBtn");
    const original = btn.html();
    btn.prop("disabled", true).html(
        '<i class="bx bx-loader-alt bx-spin"></i> Resetting...'
    );

    $.ajax({
        url: url,
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function (res) {
            toastr.success(res.message || "Password reset successfully!");
            setTimeout(() => {
                window.location.href = res.redirect || "{{ route('login') }}";
            }, 2000);
        },
        error: function (xhr) {
            btn.prop("disabled", false).html(original);
            if (xhr.status === 422 && xhr.responseJSON.errors) {
                $.each(xhr.responseJSON.errors, function (f, m) {
                    const el = $('[name="' + f + '"]');
                    el.addClass("error is-invalid");
                    $('<div class="error">' + m[0] + "</div>").insertAfter(el);
                });
                toastr.error("Validation failed. Please check inputs.");
            } else {
                toastr.error("Something went wrong. Try again.");
            }
        },
    });
}

function togglePassword(id, el) {
    const field = document.getElementById(id);
    const icon = el.querySelector("i");
    if (field.type === "password") {
        field.type = "text";
        icon.classList.remove("bx-hide");
        icon.classList.add("bx-show");
    } else {
        field.type = "password";
        icon.classList.remove("bx-show");
        icon.classList.add("bx-hide");
    }
}
