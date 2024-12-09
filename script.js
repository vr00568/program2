$(document).ready(function() {
    $('#registrationForm').submit(function(event) {
      event.preventDefault(); // Prevent default form submission
  
      const formData = $(this).serialize(); // Serialize form data
  
      $.ajax({
        url: 'submit.php',
        type: 'POST',
        data: formData,
        success: function(response) {
          // Display success message
          $('body').html(`<div class="form-container"><h1>Registration Successful!</h1>${response}</div>`);
        },
        error: function() {
          alert('Error submitting form. Please try again.');
        }
      });
    });
  });
  