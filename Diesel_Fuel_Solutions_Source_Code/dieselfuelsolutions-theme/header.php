<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=.5, user-scalable=no" />

<title>Diesel Fuel Solutions</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/graphics/favicon.png" rel="icon">

      <!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Serif+Caption:ital@0;1&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Main CSS File -->
  <?php wp_head(); ?>
  
  <!-- Vendor JS Files -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>

<body>
  <div>
  
    <div>
			
			<!-- ======= Header ======= -->
			<header class="main-header">
			  <div id="top_of_page" class="navcontainer">

				  <!-- ======= Navbar Open Icon and Logo ======= -->

				  <div class="threelines">
						<span onclick="openNav()" class="menu-icon">☰</span>
				  </div>

				  <div class="nav-slogan">
					  <p><b>
						  Join thousands of drivers saving big with the most powerful fuel card in the industry.
					  </b></p>
				  </div>

				  <div class="logo ">
				  <a href="https://dieselfuelsolutions.net/">
					<img src="<?php bloginfo('template_directory');?>/img/Diesel_Logo_Just_Words_With_Shadow.png">
				  </a>
				  </div>  

			  </div>

			   <!-- ======= Side Navbar ======= -->
			  <div>
				<nav id="mySidenav" class="sidenav">
				  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				  <nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'your-theme-textdomain' ); ?>">

					 <div class="nav-container">
						
							  <div class="nav-slogan-mobile">
								  <p><b>
									  Join thousands of drivers saving big with the most powerful fuel card in the industry.
								  </b></p>
							  </div>

						 <?php
						 // Check if the custom menu exists
						 if ( has_nav_menu( 'primary' ) ) {
							 wp_nav_menu(
								 array(
									 'menu' => 'primary',
									 'container' => '',
									 'theme_location' => 'primary'

								 )
							 );
						 } else {
							 // Display a message if no menu is assigned
							 echo '<p class="no-menu-assigned">' . esc_html__( 'Please assign a menu to the Primary Menu location', 'your-theme-textdomain' ) . '</p>';
						 }
						 ?>

					 </div>
				  </nav>
				</nav><!-- .navbar -->
			  </div>

		  <!------ ======= Scroll to top button lower right of screen ======= ------>
			<div class="scroll-top wrapper" onclick="topFunction();">
			 <div id="myBtn" class="btn">
				<svg xmlns="http://www.w3.org/2000/svg" class="bi bi-chevron-double-up" viewBox="0 0 16 16">
				 <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708z"/>
				 <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708z"/>
			   </svg>
			 </div>
			</div>

			</header>

		
