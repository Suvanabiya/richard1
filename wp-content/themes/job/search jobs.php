<?php 
/*
Template Name: SEARCH JOB Template
*/
get_header(); ?>

	<!-- header section start-->
  <!-- search jobs section start-->
  <div class="search_section layout_padding">
      <div class="container">
        <div class="logo_1"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-2.png"></div>
          <div class="row box">
              <div class="col-md-6">
                  <h1 class="what_text">What</h1>
                  <p class="city_text">job title, keywords, or company</p>
                  <div class="main"> 
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search this blog">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
							
							
							<?php
		global $post;
		$args = array( 'posts_per_page' => 12, 'post_type'=> 'services_News');
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

							
							
							
							
                        </div>
                    </div> 
                  </div>
              </div>
              <div class="col-md-6">
                  <h1 class="what_text">Where</h1>
                  <p class="city_text">city, state, or pin code</p>
                  <div>
                      <div class="main"> 
                          <div class="input-group">
                              <input type="text" class="form-control" placeholder="Ahmedabad, Gujarat">
                              <div class="input-group-append">
                                  <button class="btn btn-secondary" type="button">
                                      <i class="fa fa-map-marker"></i>
                                  </button>
                              </div>
                          </div>



						<?php
		global $post;
		$args = array( 'posts_per_page' => 12, 'post_type'=> 'search_job');
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




						  
                      </div>
                  </div>
              </div>
          </div>
          <div class="">
            <button class="find_bt">Find Jobs</button>
          </div>
      </div>
  </div>
  <!-- search jobs section end-->

   <?php get_footer();?>