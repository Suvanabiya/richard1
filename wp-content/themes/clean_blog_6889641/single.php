<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="led_more_news">
		<?php the_post_thumbnail('post-thumbnails', array('class' => 'post-img')); ?>

		<h3 class="heading_03"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
		<?php $short_title = mb_substr(the_title('','',FALSE),0,22);
		echo $short_title; if (strlen($short_title) >20){ echo '...'; } ?>	
		</a></h3>
			<?php the_content(); ?>											
													
		</div>	
<?php get_template_part( 'entry' ); ?>
<?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
<footer class="footer">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
<?php get_footer(); ?>