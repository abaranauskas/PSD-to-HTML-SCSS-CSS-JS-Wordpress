<?php

/* Template Name: Homepage */

get_header();

?>

<!-- Start Point -->
<?php 
	get_template_part('partials/homepage-hero');
	get_template_part('partials/about');
	get_template_part("partials/news");
	get_template_part('partials/contact');
	

	// get_template_part("partials_template/homepage_testimonials");
	// get_template_part("partials_template/homepage-news");
	// get_template_part("partials_template/homepage_contact");


?>

<?php get_footer(); ?>