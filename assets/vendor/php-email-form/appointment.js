(function ($) {
  "use strict";

  // Fetch CSRF token on page load
  $(document).ready(function() {
    // Set minimum date to tomorrow
    var tomorrow = new Date();
    tomorrow.setDate(tomorrow.getDate() + 1);
    var minDate = tomorrow.toISOString().split('T')[0];
    $('#preferredDate').attr('min', minDate);

    // Fetch CSRF token
    $.ajax({
      url: 'forms/csrf_token.php',
      method: 'GET',
      dataType: 'json',
      success: function(data) {
        $('#csrf_token').val(data.csrf_token);
      },
      error: function() {
        console.error('Failed to fetch CSRF token');
      }
    });
  });

  $("#appointment_form").on("submit", function (event) {
    if (event.isDefaultPrevented()) {
      formError();
      submitMSG(false, "Did you fill in the form properly?");
    } else {
      event.preventDefault();
      submitForm();
    }
  });

  function submitForm() {
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var preferredDate = $("#preferredDate").val();
    var preferredDoctor = $("#preferredDoctor").val();
    var message = $("#message").val();
    var csrf_token = $("#csrf_token").val();
    var honeypot = $('input[name="website"]').val();

    // Client-side validation
    if (!name || name.length < 2) {
      submitMSG(false, "Please enter a valid name (at least 2 characters).");
      return;
    }
    if (!email || !isValidEmail(email)) {
      submitMSG(false, "Please enter a valid email address.");
      return;
    }
    if (!phone || phone.length < 10) {
      submitMSG(false, "Please enter a valid phone number (at least 10 digits).");
      return;
    }
    if (!message || message.length < 10) {
      submitMSG(false, "Please provide more details about your appointment needs (at least 10 characters).");
      return;
    }

    $('#ap_btn_submit').html('<div class="d-flex align-items-center"><strong> Sending...</strong><div class="spinner-border ms-auto" role="status" aria-hidden="true" style="width:25px;height:25px"></div></div>').attr('disabled', true);

    $.ajax({
      method: "POST",
      url: 'forms/appointment.php',
      dataType: 'json',
      data: {
        Name: name,
        Email: email,
        Phone: phone,
        Date: preferredDate,
        Doctor: preferredDoctor,
        Message: message,
        csrf_token: csrf_token,
        website: honeypot
      },
      success: function (response) {
        $('#ap_btn_submit').text('Request Appointment').removeAttr('disabled');
        if (response.success) {
          formSuccess();
          submitMSG(true, response.message);
        } else {
          formError();
          submitMSG(false, response.message);
        }
      },
      error: function (xhr, status, error) {
        $('#ap_btn_submit').text('Request Appointment').removeAttr('disabled');
        var errorMessage = "An error occurred. Please call us directly at (313) 654-1915.";
        if (xhr.responseJSON && xhr.responseJSON.message) {
          errorMessage = xhr.responseJSON.message;
        }
        formError();
        submitMSG(false, errorMessage);
      }
    });
  }

  function isValidEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
  }

  function formSuccess() {
    $("#appointment_form")[0].reset();
    // Fetch new CSRF token after successful submission
    $.ajax({
      url: 'forms/csrf_token.php',
      method: 'GET',
      dataType: 'json',
      success: function(data) {
        $('#csrf_token').val(data.csrf_token);
      }
    });
  }

  function formError() {
    $("#appointment_form").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
      $(this).removeClass();
    });
  }

  function submitMSG(valid, msg) {
    if (valid) {
      var msgClasses = "h5 text-center text-success mt-3";
    } else {
      var msgClasses = "h5 text-center text-danger mt-3";
    }
    $("#ap_msgSubmit").removeClass().addClass(msgClasses).text(msg).show();
  }

})(jQuery);
