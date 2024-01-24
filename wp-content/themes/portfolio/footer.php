 <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <h3>Follow me</h3>
                     <ul class="social_icon text_align_center">
                        <li> <a href="Javascript:void(0)"><i class="fa fa-facebook-f"></i></a></li>
                        <li> <a href="Javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                        <li> <a href="Javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li> <a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li> <a href="Javascript:void(0)"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                     </ul>
                     <div class="conta text_align_center">
                        <ul>
                           <li> <a href="Javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/images/call.png" alt="#"/> Call +01814017359
                              </a>
                           </li>
                           <li> <a href="Javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/images/mall.png" alt="#"/> Afrin@gmail.com
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-8 offset-md-2">
                     <div class="menu_bottom text_align_center">
                           <?php
			wp_nav_menu( array( 'theme_location' => 'extra-menu' ) );
			?>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright text_align_center">
               <div class="container">
                  <div class="row">
                     <div class="col-md-8 offset-md-2">
                        <p>© 2020 All Rights Reserved. <a href="https://html.design/"> Free Html Template</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.0.0.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
  <?php wp_footer(); ?>
</body>
</html>  