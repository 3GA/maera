<?php

/*
 * Get the content and widget areas for the footer
 */
function shoestrap_footer_content() {

	// Finding the number of active widget sidebars
	$num_of_sidebars = 0;

	for ( $i = 0; $i < 5; $i++ ) {
		$sidebar = 'sidebar_footer_' . $i;
		if ( is_active_sidebar( $sidebar ) ) {
			$num_of_sidebars++;
		}
	}

	// If sidebars exist, open row.
	if ( $num_of_sidebars >= 0 ) {
		echo '<div class="row">';
	}

	// Showing the active sidebars
	for ( $i = 0; $i < 5; $i++ ) {
		$sidebar = 'sidebar_footer_' . $i;

		if ( is_active_sidebar( $sidebar ) ) {
			// Setting each column width accordingly
			$col_class = 12 / $num_of_sidebars;

			echo '<div class="col-md-' . $col_class . '">';
				dynamic_sidebar( $sidebar );
			echo '</div>';

		}
	}

	// If sidebars exist, close row.
	if ( $num_of_sidebars >= 0 ) {
		echo '</div>';

		// add a clearfix div.
		echo '<div class="clearfix"></div>';
	}

}
add_action( 'shoestrap/footer/content', 'shoestrap_footer_content' );
