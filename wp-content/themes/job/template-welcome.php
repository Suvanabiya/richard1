<?php 
/*
Template Name: welcome Template
*/
get_header(); ?>


	<!-- header section start-->
	<!-- banner section start-->
	<div class="banner_section layout_padding">
		<div class="container">
			<h1 class="best_taital">Best Naukri Search here</h1>
			<div class="box_main">
			    <input type="" class="email_bt" placeholder="Search Job" name="">
				<button class="subscribe_bt"><a href="#">Subscribe</a></button>
		    </div>
		    <p class="there_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alterationThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
		    <div class="bt_main">
		    	<div class="discover_bt"><a href="#">Discover More</a></div>
		    </div>
		</div>
	</div>
	<!-- banner section end-->
	<!-- marketing section start-->
	<div class="marketing_section layout_padding">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="job_section">
					    <h1 class="jobs_text">Marketing jobs</h1>
					    <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there</p>
					    <div class="apply_bt"><a href="#">Apply now</a></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="image_1 padding_0"><img src="<?php echo get_template_directory_uri(); ?>/images/img-1.png"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- marketing section end-->
	<!-- Industrial section start-->
	<div class="marketing_section layout_padding">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="image_1 padding_0"><img src="<?php echo get_template_directory_uri(); ?>/images/img-2.png"></div>
				</div>
				<div class="col-md-6">
					<div class="job_section_2">
					    <h1 class="jobs_text">Industrial jobs</h1>
						
					
		<?php
		global $post;
		$args = array( 'posts_per_page' => 12, 'post_type'=> 'job_News');
		$myposts = get_posts( $args );
		foreach( $myposts as $post ) : setup_postdata($post); ?>
		
		
		 
		
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="">
              <div class="icon"><?php the_post_thumbnail('post-thumbnaills', array('class' => 'post-img')); ?></div>
			  
			  
		
		
              <h4 class="title"><a href=""><?php the_title(); ?></a></h4>
              <p class="description"><?php the_content(); ?></p>
            </div>
          </div>
		  
 <?php endforeach; ?>

						
					    <div class="apply_bt"><a href="#">Apply now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Industrial section end-->
	<!-- Corporate section start-->
	<div class="marketing_section layout_padding">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="job_section">
					    <h1 class="jobs_text">Corporate jobs</h1>
					    <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there</p>
					    <div class="apply_bt"><a href="#">Apply now</a></div>
					</div>
				</div>
				<div class="col-md-6 padding_0">
					<div class="image_1"><img src="<?php echo get_template_directory_uri(); ?>/images/img-3.png"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- Corporate section end-->
	<!-- Government section start-->
	<div class="marketing_section layout_padding">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 padding_0">
					<div class="image_1"><img src="<?php echo get_template_directory_uri(); ?>/images/img-4.png"></div>
				</div>
				<div class="col-md-6">
					<div class="job_section_2">
					    <h1 class="jobs_text">Government jobs</h1>
					    <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there</p>
					    <div class="apply_bt"><a href="#">Apply now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Government section end-->
  <?php get_footer();?>