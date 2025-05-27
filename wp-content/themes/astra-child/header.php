<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    
    <?php wp_head(); ?> <!-- Important: Ensures all necessary WP scripts/styles load -->
</head>
<body <?php body_class(); ?>>

<div id="formLoader" class="fullscreen-loader">
  <div class="text-center">
    <div class="spinner-border text-primary" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
    <p class="mt-2">Please wait...</p>
  </div>
</div>
