<section id="news">
		<div class="container">
			<h2><?php the_field('hn_news_header'); ?></h2>
			<div class="posts-block">



				<?php

				// check if the repeater field has rows of data
				if( have_rows('hn_posts_repeater') ):

				 	// loop through the rows of data
				    while ( have_rows('hn_posts_repeater') ) : the_row();
				        // display a sub field value
				        $shape_type = get_sub_field('hn_rep_post_shape');
				        $post_type = get_sub_field('hn_rep_post_type');
				        $backgroun_image = get_sub_field('hn_rep_if_type_picture_select_picture');
				        //var_dump($shape_type);
				        //exit;

				        if ($shape_type == "square"):
				        	if($post_type == "img"): 
				        		?>
				        		<div class="square flex" style="background-image: url( <?php echo $backgroun_image["url"] ;?>);">			
				        		</div>
				        		<?php
				        	else:
				        		?>
				        		<div class="square flex">
				        			<h3><?php the_sub_field("hn_rep_if_type_comment_write_comment");?></h3>
				        			<p><?php the_sub_field("hn_rep_if_type_com_write_date"); ?></p>			
				        		</div>
				        		<?php
				        	endif;

				        elseif ($shape_type == "st_rect"):
				        	if($post_type == "img"): 
				        		?>
				        		<div class="square flex <?php echo $shape_type; ?>" style="background-image: url( <?php echo $backgroun_image["url"] ;?>);">			
				        		</div>
				        		<?php
				        	else:
				        		?>
				        		<div class="square flex <?php echo $shape_type; ?>">
				        			<h3><?php the_sub_field("hn_rep_if_type_comment_write_comment");?></h3>
				        			<p><?php the_sub_field("hn_rep_if_type_com_write_date"); ?></p>			
				        		</div>
				        		<?php
				        	endif;

				        else:
				        	if($post_type == "img"): 
				        		?>
				        		<div class="square flex <?php echo $shape_type; ?>" style="background-image: url( <?php echo $backgroun_image["url"] ;?>);">			
				        		</div>
				        		<?php
				        	else:
				        		?>
				        		<div class="square flex <?php echo $shape_type; ?>">
				        			<h3><?php the_sub_field("hn_rep_if_type_comment_write_comment");?></h3>
				        			<p><?php the_sub_field("hn_rep_if_type_com_write_date"); ?></p>			
				        		</div>
				        		<?php
				        	endif;
				        endif;				        
				    endwhile;
				endif;
				?>				
			</div>

			<div class="icons-block">
				<?php 
					$arrow_left = get_field('hn_news_arrow _left');
				?>
				<img src="<?php echo $arrow_left['url']; ?>">
				
				<?php 
					$icon_between = get_field('hn_news_icon_between_arrows');
				?>
				<img src="<?php echo $icon_between['url']; ?>">

				<?php 
					$arrow_right = get_field('hn_news_arrow_right');
				?>
				<img src="<?php echo $arrow_right['url']; ?>">
			</div>
		</div>
	</section>	<!-- end of news section -->