<?php 
/*
Template Name: contact Template
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
                <li><a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a></li>
                <li><a href="http://www.flashmo.com" target="_parent">Flash Templates</a></li>
                <li><a href="http://www.flashmo.com/store" target="_parent">Premium Themes</a></li>
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
    
        <div id="templatemo_main">
        
        	<h1>Contact Us</h1>

        <p><em>Aliquam pretium porta odio. Fusce quis diam sit amet tortor luctus pellentesque. Donec accumsan urna non elit tristique mattis. Vivamus fermentum orci viverra nisl. In nec magna id ipsum  aliquam dictum.</em></p>
        <p>Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>. Donec euismod enim et risus. Nunc dictum, massa non dignissim commodo, metus quam vehicula lorem, et dignissim enim augue vitae pede. Donec at arcu. Nunc aliquam, dolor vitae sollicitudin lacinia, nibh orci sagittis diam, dignissim sodales dui erat nec eros. <a href="#">Fusce quis enim</a>.</p>
        <p>Aenean eleifend, neque hendrerit elementum sodales, <a href="#">odio erat sagittis quam</a>, sed tempor orci magna vitae tellus. Proin dui mauris, tempor eget, pulvinar sed, pretium sit amet, dui. Proin vulputate justo et quam. Cras nisl eros, elementum eu, iaculis vitae, viverra ut, ligula. Pellentesque metus. Duis dolor.</p>
        <div class="cleaner_h50"></div>

            <div id="contact_form">
            
                <h2>Contact Form</h2>
                
                <form method="post" name="contact" action="#">
                
                    <input type="hidden" name="post" value="Send" />
                    <label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                    <div class="cleaner_h10"></div>
                    
                    <label for="email">Email Address:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                    <div class="cleaner_h10"></div>
                    
                  
                    <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                    <div class="cleaner_h10"></div>
                    
                    <input type="submit" class="submit_btn" name="submit" id="submit" value="Send" />
                    <input type="reset" class="submit_btn" name="reset" id="reset" value="Reset" />
                
              </form>
            
            </div> 
        
        </div> <!-- end of main -->
        <div class="cleaner"></div>
    </div> <!-- end of right column -->
    
    
  <?php get_footer();?>