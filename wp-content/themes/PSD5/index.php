<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet" type="text/css"/>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="responsive.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   <link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
   <link href="css/owl.theme.default.min.css" rel="stylesheet" type="text/css">
   </head>
  </head>
  <body>
      <div class="container">
	    <div class="row">
		  <div class="top">
		    <img src="<?php echo get_template_directory_uri(); ?>/img/ACCORN.png"/>
		  </div>
         <div class="center">
		 <h2>ACCORN ELEVENS UNISOME SNIHULE</h2>
		 <h5>ailuua quis issum susperdisse utnecs gravids lorem ipsum stamet consecletur odidicsing elit,sed do eusnod temper incidunt noun dolor magna ailuua quis issum susperdisse utnecs gravids.</h5></br></br>
		 <h5>ailuua quis issum susperdisse utnecs gravids lorem ipsum stamet consecletur odidicsing elit,sed do eusnod temper incidunt noun dolor magna ailuua quis issum susperdisse utnecs gravids.</h5></br></br></br></br>
		 <div class="row">
		  <div class="col-md-4">
		    <img src="<?php echo get_template_directory_uri(); ?>/img/ACCORN2.png"/>
			<h4>lorem ipsum stamet consecletur odidicsing elit,sed do eusnod temper</h4> 
			
			<h5>ailuua quis issum susperdisse utnecs gravids lorem ipsum stamet consecletur odidicsing elit,sed do eusnod temper incidunt noun dolor magna ailuua quis issum susperdisse utnecs gravids.
		  </div>
		  <div class="col-md-4">
		     <img src="<?php echo get_template_directory_uri(); ?>/img/ACCORN3.png"/>
			 <h4>lorem ipsum stamet consecletur odidicsing elit,sed do eusnod temper </h4>
			 
			 <h5>ailuua quis issum susperdisse utnecs gravids lorem ipsum stamet consecletur odidicsing elit,sed do eusnod temper incidunt noun dolor magna ailuua quis issum susperdisse utnecs gravids.
		  </div>
		  <div class="col-md-4">
		     <img src="<?php echo get_template_directory_uri(); ?>/img/ACCORN4.png"/>
			 <h4>lorem ipsum stamet consecletur odidicsing elit,sed do eusnod temper </h4>
			 
			 <h5>ailuua quis issum susperdisse utnecs gravids lorem ipsum stamet consecletur odidicsing elit,sed do eusnod temper incidunt noun dolor magna ailuua quis issum susperdisse utnecs gravids.
		  </div>
		
        </div>
		 </div>
		 </div>		  
		</div>
		<div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="owl-carousel owl-theme">
            <div class="item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/ACCORN.png" alt="#"/>
            </div>
            <div class="item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/ACCORN.png" alt="#"/>
            </div>
            <div class="item">
              <h4>3</h4>
            </div>
            <div class="item">
              <h4>4</h4>
            </div>
            <div class="item">
              <h4>5</h4>
            </div>
            <div class="item">
              <h4>6</h4>
            </div>
            <div class="item">
              <h4>7</h4>
            </div>
            <div class="item">
              <h4>8</h4>
            </div>
            <div class="item">
              <h4>9</h4>
            </div>
            <div class="item">
              <h4>10</h4>
            </div>
            <div class="item">
              <h4>11</h4>
            </div>
            <div class="item">
              <h4>12</h4>
            </div>
          </div>
               </div>
            </div>
         </div>
		<script>
            $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 3,
                    nav: false
                  },
                  1000: {
                    items: 5,
                    nav: true,
                    loop: false,
                    margin: 20
                  }
                }
              })
            })
          </script>
		<script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      
  </body>
</html>