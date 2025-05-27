<?php
// Enqueue parent styles
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('astra-parent', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('astra-child-css', get_stylesheet_directory_uri() . '/assets/css/custom-style.css', array('astra-parent'));
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), null);
    wp_enqueue_script( 'astra-child-js', get_stylesheet_directory_uri() . '/assets/js/custom-script.js', array('jquery'), );

      // Localize the script AFTER it’s enqueued
      wp_localize_script('astra-child-js', 'ajaxurlObj', [
        'ajaxurl' => 'http://localhost/test-assignment/wp-admin/admin-ajax.php'
    ]);


});

// Register shortcode for contact form

function my_custom_form_shortcode() {
    ob_start();
    ?>

        <div class="container">
            <div class="form-box cstm-form-box">
                <form id ="contactForm" class="row g-3">
                    <div class="row mb-4 ">
                    <div class="col-md-6">
                        <label for="fullName" class="form-label fw-bold">Full Name  <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="fullName" placeholder="Enter full name" required>
                        <div class="text-danger mt-1" id="error-fullName"></div>
                    </div>
                <div class="col-md-6">
                        <label for="email" class="form-label fw-bold">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                        <div class="text-danger mt-1" id="error-email"></div>
                    </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-purple cstm-btn-submit">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    <?php
    return ob_get_clean();
}
add_shortcode('custom_form', 'my_custom_form_shortcode');

// Create the Custom table for the form data
function create_custom_contact_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'custom_contact_entries';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        full_name varchar(255) NOT NULL,
        email varchar(255) NOT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
// add_action('init', 'create_custom_contact_table'); 

add_action('wp_ajax_submit_contact_form', 'submit_contact_form');
add_action('wp_ajax_nopriv_submit_contact_form', 'submit_contact_form');

function submit_contact_form() {
    
    global $wpdb;

    // Sanitize and validate input
    $full_name = sanitize_text_field($_POST['full_name']);
    $email = sanitize_email($_POST['email']);

    if (empty($email) || !is_email($email)) {
        wp_send_json_error('Invalid email.');
    }

    // Table name (replace if needed)
    $table_name = $wpdb->prefix . 'custom_contact_entries';

    // Insert data
    $inserted = $wpdb->insert($table_name, [
        'full_name'  => $full_name,
        'email'      => $email,
        'created_at' => current_time('mysql'),
    ]);

    if ($inserted === false) {
        wp_send_json_error('Database error. Please try again.');
    }

    // Prepare email
    $to = $email;  // or your admin email, e.g. get_option('admin_email')
    $subject = 'Thank you for contacting us';
    $message = "Hi {$full_name},\n\nThank you for submitting the contact form. We will get back to you shortly.\n\nBest regards,\nYour Company";
    $headers = ['Content-Type: text/plain; charset=UTF-8'];

    // Send email
    wp_mail($to, $subject, $message, $headers);

    wp_send_json_success('Form submitted successfully and email sent.');
}


