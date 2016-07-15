<?php // dont include this line
/**
 * Add Genesis Title Toggle to Posts
 *
 * @link http://www.billerickson.net/code/genesis-title-toggle-for-posts
 * @author Bill Erickson
 *
 * @param array $post_types
 * @return array
 */
function be_title_toggle_on_posts( $post_types ) {
  $post_types[] = 'post';
  return $post_types;
}
add_filter( 'be_title_toggle_post_types', 'be_title_toggle_on_posts' );
