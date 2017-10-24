<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
	<head>
		<!-- TITLE OF SITE -->
		
		<!-- favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri();?>/assets/images/favicon.ico">
		
		<!-- META DATA -->
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<script src="animate-legacy-support.js"></script>
		<![endif]-->
		<?php wp_head();?>
	</head>
	
	
	<body  <?php body_class(); ?>>
		<!-- Preloader start here 
		<div class="preloader">
			<div class="loader">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<!-- Preloader end here -->

		<!-- Start header -->
		<div class="contain">
			<section id="header">
				<div class="container">
					<ul class="top-left">

						<?php
							$contact_top_header_group = cs_get_option('site_top_left_contact');
							if (is_array($contact_top_header_group)){
								foreach ($contact_top_header_group as $key=>$value) { ?>
									<li><i class="<?php echo esc_attr($value['contact_icon']);?>"></i><?php echo esc_html($value['contact_text']);?></li>
								<?php
								}
							}
						?>

					</ul>
					<div class="bc">
						<ul class="top-right">
							<li class="bb">
								<?php echo do_shortcode('[gtranslate]');?>
							</li>
							<li class="bb"> 
							<a href="#" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-sign-in"></i> sign in</a>
								<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog">
								  <div class="modal-dialog modal-sm">
									<div class="modal-content">
									  <!-- Start .panel -->
										<div class="panel-body">
											<?php echo do_shortcode('[wppb-login]');?>
										</div>
										<!-- End .panel -->
									</div>
								  </div>
								</div>
							/ <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg"> register</a>
							<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
							  <div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="panel-body pb">
										<h2 class="title">Register</h2>
											<?php echo do_shortcode('[wppb-register]');?>
				
									</div>
								  </div>
								</div>
								</div>
							</li>
						</ul>
						<div class="h-icon">
							<div class="icon">

								<?php
									$social_media = cs_get_option('site_top_right_social_media');
										if(is_array($social_media)){
											foreach ($social_media as $key=> $value){ ?>
												<div class="t-bg"><a href="<?php echo esc_url($value['social_media_href']);?>"><i class="<?php echo esc_attr($value['social_media_icon']);?>" aria-hidden="true"></i></a></div>
											<?php
										}
									}
								?>



							</div>
						</div>
					</div>
				</div><!-- /.container -->
			</section><!-- /.header -->
			<!-- End header -->
			
			
			
			<!-- Start Main-Menu -->
			<section id="main-menu">
				<div class="container">
					<div class="menu">
						<div class="wrapper">
							<div class="brand">

								<?php if(cs_get_option('site_logo')){ ?>

									<a class="navbar-brand" href="<?php home_url();?>"><img src="<?php echo esc_url(wp_get_attachment_image_src(cs_get_option('site_logo'), 'full')[0]);?>" alt="image" /></a>

								<?php } ?>

							</div>

							<!-- START Responsive Menu HTML -->
							<div class="rm-container">
								<a class="rm-toggle rm-button rm-nojs" href="#">Menu</a>
							
								
								 <?php
									wp_nav_menu( array(
										'menu'              => 'header_menu',
										'theme_location'    => 'header_menu',
										'depth'             => 3,
										'container'         => 'nav',
										'container_class'   => 'rm-nav rm-nojs rm-lighten',
										//'container_id'      => 'bs-example-navbar-collapse-1',
										//'menu_class'        => 'nav navbar-nav',
										//'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
										//'walker'            => new WP_Bootstrap_Navwalker())
									));
								?>
								
								
							</div><!-- .rm-container -->
							<!-- End Responsive Menu HTML -->
						</div><!-- .wrapper -->
					</div><!-- .menu -->
				</div><!-- /.container -->
			</section><!-- /#main-menu  -->
			<!-- End Main-Menu -->
	