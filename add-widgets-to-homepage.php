<?php

//* Do not use the php tag above when adding the code to your file*//

function create_widget($name, $id, $description) {
	register_sidebar(array(
		'name'  => __( $name ),
		'id'  => $id,
		'description' => __($description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}
create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the homepage' );
create_widget( 'Front Page Center', 'front-center', 'Displays on the center of the homepage' );
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the homepage' );
