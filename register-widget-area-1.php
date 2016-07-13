<?php
//* Do NOT include the opening php tag shown above. Copy the code shown below.
//* Register after post widget area
genesis_register_sidebar( array(
	'id'            => 'after-post',
	'name'          => __( 'After Post', 'themename' ),
	'description'   => __( 'This is a widget area that can be placed after the post', 'themename' ),
) );
