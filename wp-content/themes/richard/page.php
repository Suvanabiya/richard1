
<?php get_header(); ?>

<div class="left_internal floatleft">
				<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
				
					<?php 
						$page_title = get_post_meta($post->ID, 'page_title', true);
					?>				
				
					<?php if($page_title) : ?>
						 <h2 class="page_title"><?php echo $page_title; ?></h2>
					<?php else : ?>
						<h2 class="page_title"><?php the_title(); ?></h2>
					<?php endif; ?>				
					<div class="internal_page_content">
						<?php the_content(); ?>
					</div>
				<?php endwhile; ?>

				<?php else : ?>
					<h3><?php _e('404 Error&#58; Not Found', 'bilanti'); ?></h3>
				<?php endif; ?>					
			</div>
<?php get_footer(); ?>	   
 