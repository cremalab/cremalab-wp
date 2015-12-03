<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/utils.php',                 // Utility functions
  'lib/init.php',                  // Initial theme setup and constants
  'lib/wrapper.php',               // Theme wrapper class
  'lib/conditional-tag-check.php', // ConditionalTagCheck class
  'lib/config.php',                // Configuration
  'lib/assets.php',                // Scripts and stylesheets
  'lib/titles.php',                // Page titles
  'lib/extras.php',                // Custom functions
  'lib/team.php',
  'lib/work.php',
  'lib/careers.php',
  'lib/acf.php',
  'lib/fields.php',
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


function get_ng_templates($type) {
  $theme_name = get_template();
  $directory = "wp-content/themes/" . $theme_name . "/templates/ng/" . $type . "/";
  $templates = glob($directory . "*.php");
  foreach($templates as $template)
  {
    $filename = basename($template, ".php");
    echo '<script type="text/ng-template" id="' . $type . '/' . $filename . '.html">';
    get_template_part("templates/ng/" . $type . "/" . $filename);
    echo '</script>';
  }
}

function image_path($src) {
  echo bloginfo('stylesheet_directory') . '/dist/images/' . $src;
}

function deliver_mail() {
  // if the submit button is clicked, send the email
  if ( isset( $_POST['cf-submitted'] ) ) {

      // sanitize form values
      $name    = "Name"; //sanitize_text_field( $_POST["cf-name"] );
      $email   = sanitize_email( $_POST["cf-email"] );
      $subject = "Subject..."; //sanitize_text_field( $_POST["cf-subject"] );
      $message = esc_textarea( $_POST["cf-message"] );

      // get the blog administrator's email address
      $to = get_option( 'admin_email' );

      $headers = "From: $name <$email>" . "\r\n";

      // If email has been process for sending, display a success message
      if ( wp_mail( $to, $subject, $message, $headers ) ) {
        echo '<div>';
        echo '<p>Thanks for contacting me, expect a response soon.</p>';
        echo '</div>';
      } else {
        echo 'An unexpected error occurred';
      }
  }
}

add_filter( 'body_class', 'my_class_names' );
function my_class_names( $classes ) {
    // add 'class-name' to the $classes array
    $classes[] = 'page-transition';
    // return the $classes array
    return $classes;
}

