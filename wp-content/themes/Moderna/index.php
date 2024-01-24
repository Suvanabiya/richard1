<?php get_header(); ?>

					<div class="container">
					<div class="row">
						<div class="col-md-8">
						<div class="post">
						<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				<?php endwhile; ?>

				<?php else : ?>
					<h3><?php _e('404 Error&#58; Not Found', 'bilanti'); ?></h3>
				<?php endif; ?>
						</div>
						
				
						</div>
							<div class="col-md-4">
						</div>
					</div>
				</div>
<?php get_footer(); ?>