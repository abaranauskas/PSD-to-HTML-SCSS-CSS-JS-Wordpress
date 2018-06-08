	<section id="contact">
		<div class="container">
			<h2><?php the_field('hc_contact_header'); ?></h2>
			<div class="form-block">
				<?php echo do_shortcode(get_field('hc_contact_form')); ?>
			</div>
		</div>
	</section>	<!-- end of contact section -->