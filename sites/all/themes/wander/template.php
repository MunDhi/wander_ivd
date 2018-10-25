<?php
//drupal_add_js('//code.jquery.com/jquery-migrate-1.2.1.min.js', 'external');
drupal_add_js('//prinzhorn.github.io/skrollr/dist/skrollr.min.js', 'external');
drupal_add_js(drupal_get_path('theme', 'wander') . '/dist/js/script.js' , array(
'type' => 'file',
'group' => JS_THEME,
));
?>