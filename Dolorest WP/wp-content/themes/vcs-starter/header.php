<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(); ?></title>	
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&amp;subset=latin-ext" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="css/stylesheet.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
		
<?php wp_head(); ?>	
</head>
<body>

	<header>
		<div class="container flex">
			<div class="logo flex">
				<a href="<?php echo site_url(); ?>"><?php the_field('ts_logo', 'option'); ?></a>
				<div class="burger-menu">
					<div></div>
					<div></div>
					<div></div>
				</div>
			</div>
			<nav>

				<?php
				$args = [
					'theme_location'=> 'primary-navigation',
					'menu_class' => 'flex',
					'container' =>false			
				];

				wp_nav_menu($args);

				?>
			</nav>
		</div>
	</header>   <!-- end of header -->