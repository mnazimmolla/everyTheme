<?php get_header();?>
		<div>
			<!-- Start Slide -->
			<section id="slide">
				<div class="s-bg slide">
					<div class="container">
						<h1>blog full with</h1>
						<h3>right<br>sidebar</h3>
					</div>
				</div><!-- /.sbg -->
				<div class="breadcrumbs">
					<div class="container">
						<ol class="breadcrumb">
							<?php if (function_exists('every_breadcrumbs')) every_breadcrumbs(); ?>
						</ol>
					</div>
				</div>
			</section><!-- /#slide -->
			<!-- End Slide -->
		</div>
	
	
		<!-- Start blog -->
		<section id="blog">
			<div class="blogg">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-8">

							<section class="error-404 not-found">
								<header class="page-header">
									<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'every' ); ?></h1>
								</header><!-- .page-header -->

								<div class="page-content">
									<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'every' ); ?></p>

									<?php get_search_form(); ?>
								</div><!-- .page-content -->
							</section><!-- .error-404 -->						
											
						</div>
						<div class="col-md-4 col-sm-4 blog-widget">
						
						<?php dynamic_sidebar('blog_sidebar');?>
					
						</div>
					</div>
				</div><!-- /.container -->
			</div><!-- /.blogg -->
		</section><!-- /#blog -->
		<!-- Start blog -->
		<?php get_footer();?>