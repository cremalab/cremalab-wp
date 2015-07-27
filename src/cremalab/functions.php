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
  'lib/careers.php',
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
