jQuery(document).ready(function(jQuery) {
  // Show brochure tab content by default
  jQuery('#brochure-tab').addClass('active').attr('aria-selected', 'true');
  jQuery('#gallery-tab').removeClass('active').attr('aria-selected', 'false');
  
  jQuery('#brochure').addClass('show active');
  jQuery('#gallery').removeClass('show active');

  // When clicking on gallery tab
  jQuery('#gallery-tab').on('click', function() {

    jQuery('#gallery').addClass('show active');
    jQuery('#brochure').removeClass('show active');

    jQuery('#gallery-tab').addClass('active').attr('aria-selected', 'true');
    jQuery('#brochure-tab').removeClass('active').attr('aria-selected', 'false');

  });

  // When clicking on brochure tab
  jQuery('#brochure-tab').on('click', function() {

    jQuery('#brochure').addClass('show active');
    jQuery('#gallery').removeClass('show active');

    jQuery('#brochure-tab').addClass('active').attr('aria-selected', 'true');
    jQuery('#gallery-tab').removeClass('active').attr('aria-selected', 'false');

  });

  jQuery('.cstm-tab').hide();

  jQuery('#contactForm').on('submit', function(e) {
    e.preventDefault();

    var fullName = jQuery('#fullName').val().trim();
    var email = jQuery('#email').val().trim();

    jQuery('#error-fullName').text('');
    jQuery('#error-email').text('');
    

     // Validate name
    if (fullName === '') {
        jQuery('#error-fullName').text('Full name is required.');
    }

    if (email === '') {

        jQuery('#error-email').text('Email is required.');
    
    } else if (!/^\S+@\S+\.\S+$/.test(email)) {

        jQuery('#error-email').text('Please enter a valid email address.');
    }

    // Show loader
    jQuery('#formLoader').show();

    // Submit via AJAX
    jQuery.ajax({
      url: ajaxurlObj.ajaxurl, 
      type: 'POST',
      data: {
        action: 'submit_contact_form',
        full_name: fullName,
        email: email,
      },
      success: function(response) {
        jQuery('#formLoader').hide();


        if (response.success) {

          jQuery('.cstm-form-box').hide();
          jQuery('.contact-form-header ').hide();
          jQuery('.cstm-tab').show();


        } else {

          alert('Submission failed. Please try again.');

        }
      },
      error: function() {
        jQuery('#formLoader').hide();
        alert('An error occurred. Please try again.');
      }
    });
  });

});
