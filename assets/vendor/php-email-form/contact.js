(function ($) {
  "use strict";

  // Fetch CSRF token on page load
  $(document).ready(function() {
    $.ajax({
      url: 'forms/csrf_token.php',
      method: 'GET',
      dataType: 'json',
      success: function(data) {
        $('#contact_csrf_token').val(data.csrf_token);
      },
      error: function() {
        console.error('Failed to fetch CSRF token');
      }
    });
  });

  $("#contact_form").on("submit", function (event) {
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
    var subject = $("#subject").val();
    var message = $("#message").val();
    var csrf_token = $("#contact_csrf_token").val();
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
    if (!subject || subject.length < 3) {
      submitMSG(false, "Please enter a subject (at least 3 characters).");
      return;
    }
    if (!message || message.length < 10) {
      submitMSG(false, "Please enter a message (at least 10 characters).");
      return;
    }

    $('#btn_submit').html('<div class="d-flex align-items-center"><strong> Sending...</strong><div class="spinner-border ms-auto" role="status" aria-hidden="true" style="width:25px;height:25px"></div></div>').attr('disabled', true);

    $.ajax({
      method: "POST",
      url: 'forms/contact.php',
      dataType: 'json',
      data: {
        Name: name,
        Email: email,
        Subject: subject,
        Message: message,
        csrf_token: csrf_token,
        website: honeypot
      },
      success: function (response) {
        $('#btn_submit').text('Send Message').removeAttr('disabled');
        if (response.success) {
          formSuccess();
          submitMSG(true, response.message);
        } else {
          formError();
          submitMSG(false, response.message);
        }
      },
      error: function (xhr, status, error) {
        $('#btn_submit').text('Send Message').removeAttr('disabled');
        var errorMessage = "An error occurred. Please try again or call us at (313) 654-1915.";
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
    $("#contact_form")[0].reset();
    // Fetch new CSRF token after successful submission
    $.ajax({
      url: 'forms/csrf_token.php',
      method: 'GET',
      dataType: 'json',
      success: function(data) {
        $('#contact_csrf_token').val(data.csrf_token);
      }
    });
  }

  function formError() {
    $("#contact_form").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
      $(this).removeClass();
    });
  }

  function submitMSG(valid, msg) {
    if (valid) {
      var msgClasses = "h5 text-center text-success mt-3";
    } else {
      var msgClasses = "h5 text-center text-danger mt-3";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg).show();
  }

})(jQuery);
