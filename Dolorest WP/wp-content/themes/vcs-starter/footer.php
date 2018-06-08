<footer id="place">
		<?php 
			$place_icon = get_field('ts_place_icon', 'option');
		?>

		<img src="<?php echo $place_icon['url']; ?>" alt="Location_icon">
	</footer>


<?php wp_footer(); ?>

	
</body>		
</html>

