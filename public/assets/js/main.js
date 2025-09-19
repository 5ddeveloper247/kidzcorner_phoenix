//Method to handle AJAX Request
function SendAjaxRequestToServer(
    requestType = "GET",
    url,
    data,
    dataType = "json",
    callBack = "",
    spinner_button = '',
    submit_button = ''
) {
    // Check if data is FormData
    let isFormData = data instanceof FormData;
    
    let ajaxConfig = {
        type: requestType,
        url: url,
        data: data,
        dataType: dataType,
        beforeSend: function (response) {
            if (spinner_button != '') {
                $(spinner_button).toggle();
            }
            if (submit_button != '') {
                $(submit_button).attr('disabled', true);
            }
        },
        success: function (response) {
            if (typeof callBack === "function") {
                callBack(response);
            } else {
                console.log("error");
            }
        },
        complete: function (data) {
            if (spinner_button != '') {
                $(spinner_button).toggle();
            }
            if (submit_button != '') {
                $(submit_button).attr('disabled', false);
            }
        },
        error: function (xhr) {
            if (submit_button != '') {
                $(submit_button).attr('disabled', false);
            }
          
            if (xhr.status === 422) {
                let responseJSON = JSON.parse(xhr.responseText);
                $.each(responseJSON.errors, function (key, val) {
                    toastr.error(val[0], 'Error');
                    $("#" + key).addClass('is-invalid');
                });
            } else {
                console.log(xhr);
            }
        }
    };
    
    // Handle FormData differently
    if (isFormData) {
        ajaxConfig.processData = false;
        ajaxConfig.contentType = false;
    } else {
        ajaxConfig.contentType = 'application/json';
        ajaxConfig.processData = false;
    }
    
    $.ajax(ajaxConfig);
}