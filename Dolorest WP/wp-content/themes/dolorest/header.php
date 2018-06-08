<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('title'); ?></title>	
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&amp;subset=latin-ext" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="css/stylesheet.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
		
<?php wp_head(); ?>	
</head>
<body>

	<header>
		<div class="container flex">
			<div class="logo flex">
				<a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
				<div class="burger-menu">
					<div></div>
					<div></div>
					<div></div>
				</div>
			</div>
			<nav>
				<ul class="flex">
					<li><a href="#">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#news">News</a></li>
					<li><a href="#contact">Contact</a></li>
					<li><a href="#place">Place</a></li>
				</ul>
			</nav>
		</div>
	</header>   <!-- end of header -->