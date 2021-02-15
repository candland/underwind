<?php

/**
 * Enqueue scripts and styles.
 */
function underwind_asset_scripts() {
  wp_enqueue_style( 'underwind-dist-style', get_template_directory_uri() . '/src/css/style.css' );
  wp_enqueue_script( 'underwind-dist-js', get_template_directory_uri() . '/src/js/index.js' );
}
add_action( 'wp_enqueue_scripts', 'underwind_asset_scripts' );
