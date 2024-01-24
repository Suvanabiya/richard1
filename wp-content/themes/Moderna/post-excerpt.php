<?php if(have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>		
	<?php 
		$post_thumb= get_post_meta($post->ID, 'post_thumb', true);
		$post_description= get_post_meta($post->ID, 'post_description', true);
	?>
	
	
	<div class="single_blogpost">
		<div class="blogpost_thumb">
			<img src="<?php echo $post_thumb; ?>" alt="" />
		</div>
		
		<div class="right_blogpost_content">
			<h3><?php the_title(); ?></h3>
			<div class="post_detail_fix">
				<?php echo $post_description; ?>
			</div>
			<a href="<?php the_permalink(); ?>" class="read_more">Read More</a>
		</div>
	</div>	
<?php endwhile; ?>	
<?php endif; ?>
