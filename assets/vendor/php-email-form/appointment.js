(function ($) {
    "use strict"; // Start of use strict
    $("#appointment_form").on("submit", function (event) {
        if (event.isDefaultPrevented()) {
            // handle the invalid form...
            formError();
            submitMSG(false, "Did you fill in the form properly?");
        } else {
            // everything looks good!
            event.preventDefault();
            submitForm();
        }
    });

    function submitForm() {
        // Initiate Variables With Form Content
        var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var message = $("#message").val();
        // if (grecaptcha.getResponse() != "") {
        //     $("#captcha-error").text(" ");
        // }
        // else {
        //     $("#captcha-error").text("Please verify you are not a robot!").css('color', 'red');
        //     return;
        // }
        $('#ap_btn_submit').html('<div class="d-flex align-items-center"><strong> Sending...</strong><div class="spinner-border ms-auto" role="status" aria-hidden="true" style="width:25px;height:25px"></div></div> ').attr('disabled', true);
        $.ajax({
            method: "POST",
            url: 'forms/appointment.php',
            data: "Name=" + name + "&Email=" + email + "&Phone=" + phone + "&Message=" + message,
            success: function (text) {
                if (text == "success") {
                    formSuccess();
                    $('#ap_btn_submit').text('Send').removeAttr('disabled');
                } else {
                    formError();
                    submitMSG(false, text);
                }
            }
        });
    }

    function formSuccess() {
        $("#appointment_form")[0].reset();
        submitMSG(true, "Appointment created! our team will be in touch with you soon!")
    }

    function formError() {
        $("#appointment_form").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
            $(this).removeClass();
        });
    }

    function submitMSG(valid, msg) {
        if (valid) {
            var msgClasses = "h5 tada animated text-success text-center pt-3";
        } else {
            var msgClasses = "h5 text-danger";
        }
        $("#ap_msgSubmit").removeClass().addClass(msgClasses).text(msg);
    }
}(jQuery)); // End of use strict

const appForm = document.querySelector("#appointment_form");
appForm.addEventListener("submit", e => {
    if (!appForm.checkValidity()) {
        e.preventDefault();
    }
    appForm.classList.add("was-validated");
})