<?php  
	$backgroun_image = get_field('hh_hero_background');
?>

<section class="hero" style="background-image: url('<?php echo $backgroun_image["url"]; ?>')">
	<div class="container">
		<h1><?php the_field('hh_hero_heading'); ?></h1>
		<div>
			<a href="<?php echo site_url(); ?>"><?php the_field('hh_hero_button_text'); ?></a>
		</div>
	</div>
</section>  <!-- end of hero section -->