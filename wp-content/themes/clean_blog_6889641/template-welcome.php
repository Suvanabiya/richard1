<?php 
/*
Template Name: welcome Template
*/
get_header(); ?>

        
        <div id="templatemo_sidebar">
    	
            <div id="templatemo_rss">
            
                <a href="#">SUBSCRIBE NOW <br /><span>to our rss feed</span></a>
                
            </div>
            
            <h4>Categories</h4>
            <ul class="templatemo_list">
                <li><a href="http://www.templatemo.com/page/1" target="_parent">Curabitur sed</a></li>
                <li><a href="http://www.templatemo.com/page/2" target="_parent">Praesent adipiscing</a></li>
                <li><a href="http://www.templatemo.com/page/3" target="_parent">Duis sed justo</a></li>
                <li><a href="http://www.templatemo.com/page/4" target="_parent">Mauris vulputate</a></li>
                <li><a href="#">Nam auctor</a></li>
                <li><a href="#">Aliquam quam</a></li>
            </ul>
            
            <div class="cleaner_h40"></div>
            
            <h4>Friends</h4>
            <ul class="templatemo_list">
                <li><a href="http://www.templatemo.com" target="_parent">Afrin sultana</a></li>
                <li><a href="http://www.flashmo.com" target="_parent">Bethe</a></li>
                <li><a href="http://www.flashmo.com/store" target="_parent"></a></li>
                <li><a href="http://www.webdesignmo.com/blog" target="_parent">Web Design Blog</a></li>
                <li><a href="http://www.koflash.com" target="_parent">Flash Web Gallery</a></li>
                <li><a href="#">Curabitur sed lacinia</a></li>
                <li><a href="#">Vestibulum laoreet tincidunt</a></li>
                <li><a href="#">Nullam nec mi enim</a></li>
                <li><a href="#">Aliquam quam nulla</a></li>
                <li><a href="#">Curabitur non felis massa</a></li>
            </ul>
            
        </div> <!-- end of templatemo_sidebar --> 
    
    </div> <!-- end of templatemo_left_column -->
    
    <div id="templatemo_right_column">
    
    	<div id="featured_project">
            <div id="slider">
                <ul id="sliderContent">
                    <li class="sliderImage">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/slider/1.jpg" alt="1" /></a>
                        <span class="top"><strong>Project 1</strong><br />Suspendisse turpis arcu, dignissim ac laoreet a, condimentum in massa.</span>
                    </li>
                    <li class="sliderImage">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/slider/2.jpg" alt="2" /></a>
                        <span class="bottom"><strong>Project 2</strong><br />uisque eget elit quis augue pharetra feugiat.</span>
                    </li>
                    <li class="sliderImage">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/slider/3.jpg" alt="3" />
                        <span class="left"><strong>Project 3</strong><br />Sed et quam vitae ipsum vulputate varius vitae semper nunc.</span>
                    </li>
                    <li class="sliderImage">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/slider/4.jpg" alt="4" />
                        <span class="right"><strong>Project 4</strong><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </li>
                    <li class="clear sliderImage"></li>
                </ul>
            </div>
        </div>
        
        <div id="templatemo_main">
        
            <div class="post_section">
            <?php
		global $post;
		$args = array( 'posts_per_page' => -1, );
		$myposts = get_posts( $args );
		foreach( $myposts as $post ) : setup_postdata($post); ?>
		
		
                <span class="comment"><a href="blog_post.html">128</a></span>
            
                <h2><a href="blog_post.html"><?php the_title(); ?></a></h2>
                
    
            	<?php the_date(); ?> | <strong>Author:</strong> <?php the_author(); ?> | <strong>Category:<?php the_category(); ?></strong> <a href="#">Freebies</a>
                
                <?php the_post_thumbnail('post-thumbnaills', array('class' => 'post-img')); ?>
                
                <p><?php the_content(); ?></p>
              <a href="<?php the_permalink(); ?>">Continue reading...</a>
              
			  <?php endforeach; ?>
            </div>
                
            
		</div>
    
  <div class="cleaner"></div>
  </div> 
    <!-- end of templatemo_main -->
   <?php get_footer();?>