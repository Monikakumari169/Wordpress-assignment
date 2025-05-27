<?php

get_header();
/*
 * Template Name: Front Page
 */
?>
<div class="contact-form-header text-center mb-5">
    <h1>Contat Us Form</h1>

</div>

<?php
// Display the custom form using the shortcode
echo do_shortcode('[custom_form]'); ?>

<div class="container">
    <div class="cstm-tab">

        <div class="text-center mb-5">
             <h1>Brochure and Gallery</h1>

        </div>

        <!-- Tabs -->
        <ul class="nav nav-tabs" id="customTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="brochure-tab" data-bs-toggle="tab" data-bs-target="#brochure" type="button" role="tab">Brochure</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="gallery-tab" data-bs-toggle="tab" data-bs-target="#gallery" type="button" role="tab">Gallery</button>
        </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content py-4" id="customTabsContent">

            <!-- Brochure Tab Pane -->
            <div class="tab-pane pl-40 fade show active" id="brochure" role="tabpanel">
                <h3>Brochure</h3>
                <div class="row g-3">
                    <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fff.png" alt="Dummy Image" class="img-fluid"></div>
                    <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fff.png" alt="Dummy Image" class="img-fluid"></div>
                    <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fff.png" alt="Dummy Image" class="img-fluid"></div>
                    <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fff.png" alt="Dummy Image" class="img-fluid"></div>
                    <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fff.png" alt="Dummy Image" class="img-fluid"></div>
                    <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fff.png" alt="Dummy Image" class="img-fluid"></div>
                    <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fff.png" alt="Dummy Image" class="img-fluid"></div>
                    <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fff.png" alt="Dummy Image" class="img-fluid"></div>
                    <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fff.png" alt="Dummy Image" class="img-fluid"></div>
                </div>
            </div>

            <!-- Gallery Tab Pane -->
            <div class="tab-pane pl-40 fade" id="gallery" role="tabpanel">
                <h3>Gallery</h3>
                <div class="row g-3">
                    <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fff.png" alt="Dummy Image" class="img-fluid"></div>
                    <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fff.png" alt="Dummy Image" class="img-fluid"></div>
                    <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fff.png" alt="Dummy Image" class="img-fluid"></div>
                    <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fff.png" alt="Dummy Image" class="img-fluid"></div>
                    <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fff.png" alt="Dummy Image" class="img-fluid"></div>
                    <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fff.png" alt="Dummy Image" class="img-fluid"></div>
                    <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fff.png" alt="Dummy Image" class="img-fluid"></div>
                    <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fff.png" alt="Dummy Image" class="img-fluid"></div>
                    <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fff.png" alt="Dummy Image" class="img-fluid"></div>
                </div>
            </div>

        </div>

    </div>        

</div>

<?php
get_footer();