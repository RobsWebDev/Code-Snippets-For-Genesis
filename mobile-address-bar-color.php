<?php
/**
 * Change Color of Mobile Address Bar
 */
function rm_mobile_address_bar_color() {
  echo '<meta name="theme-color" content="#000000â€¬" />';
}
add_action( 'wp_head', 'rm_mobile_address_bar_color' );
