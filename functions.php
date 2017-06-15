<?php
add_theme_support( 'menus' );

// Add Your Menu Locations
function register_my_menus() {
  register_nav_menus(
    array(  
    	'header_navigation' => __( 'Header Navigation' ), 
    	'expanded_footer' => __( 'Expanded Footer' )
    )
  );
} 
add_action( 'init', 'register_my_menus' );

// HTML markup for a default message in menu location
function default_header_nav() {
	echo "<ul class='nav'>					
		<li>Create the Header Navigation</li>
	</ul>"
}

function default_expanded_footer() { 
	echo "<ul class='nav'>					
		<li>Create the Expanded Footer</li>
	</ul>"
}
?>