<?php
//Initierar huvudmeny
add_action( 'init', 'register_my_menu' );
function register_my_menu() {
    register_nav_menu('main-nav', __('Huvudmeny') );
}

//Lägger till stöd för thumbnail bilder
add_theme_support( 'post-thumbnails' );

//Skalar om thumbnail bilder,
set_post_thumbnail_size( 400, 400, false );

//tar bort lazy loading då det ger valideringsfel efter publicering
add_filter( 'wp_lazy_loading_enabled', '__return_false' );

//tar bort lazy loading då det ger valideringsfel efter publicering
function disable_lazy_load_featured_images($attr, $attachment = null) {
	$attr['loading'] = 'eager';
	return $attr;
}

//tar bort lazy loading då det ger valideringsfel efter publicering
add_filter('wp_get_attachment_image_attributes', 'disable_lazy_load_featured_images');



//Initierar widget
add_action('widgets_init', 'nyindustri_widget_init');

//Funktion för widget till startsidan
function nyindustri_widget_init() {
	register_sidebar(array(
		'name' => 'aktuellt på startsidan',
		'id' => 'widget-frontpage',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));
}

//Förskapade categorier. Dessa är viktiga för att användaren sedan ska lägga innehåll till rätt sida!
wp_insert_term(
	// the name of the category
	"News", 		
	// the taxonomy, which in this case if category (don't change)
	'category', 		
	array(			
		'slug' => 'News',  
	)
);

//Förskapade categorier. Dessa är viktiga för att användaren sedan ska lägga innehåll till rätt sida!
wp_insert_term(
	// the name of the category
	"Form", 		
	// the taxonomy, which in this case if category (don't change)
	'category', 		
	array(			
		'slug' => 'Form',  
	)
);

//Förskapade categorier. Dessa är viktiga för att användaren sedan ska lägga innehåll till rätt sida!
wp_insert_term(
	// the name of the category
	"Products", 		
	// the taxonomy, which in this case if category (don't change)
	'category', 		
	array(			
		'slug' => 'Products',  
	)
);

//Förskapade categorier. Dessa är viktiga för att användaren sedan ska lägga innehåll till rätt sida!
wp_insert_term(
	// the name of the category
	"Employees", 		
	// the taxonomy, which in this case if category (don't change)
	'category', 		
	array(			
		'slug' => 'Employees',  
	)
);

//Förskapade categorier. Dessa är viktiga för att användaren sedan ska lägga innehåll till rätt sida!
wp_insert_term(
	// the name of the category
	"About", 		
	// the taxonomy, which in this case if category (don't change)
	'category', 		
	array(			
		'slug' => 'About',  
	)
);

//Förskapade categorier. Dessa är viktiga för att användaren sedan ska lägga innehåll till rätt sida!
wp_insert_term(
	// the name of the category
	"Frontpage", 		
	// the taxonomy, which in this case if category (don't change)
	'category', 		
	array(			
		'slug' => 'Frontpage',  
	)
);

//Förskapade categorier. Dessa är viktiga för att användaren sedan ska lägga innehåll till rätt sida!
wp_insert_term(
	// the name of the category
	"Intro", 		
	// the taxonomy, which in this case if category (don't change)
	'category', 		
	array(			
		'slug' => 'Intro',  
	)
);
?>