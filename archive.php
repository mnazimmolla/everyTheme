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
													
						<?php if ( have_posts() ) : ?>

								<header class="page-header">
									<?php
										the_archive_title( '<h1 class="page-title">', '</h1>' );
										the_archive_description( '<div class="taxonomy-description">', '</div>' );
									?>
								</header><!-- .page-header -->

								<?php
								while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/content', get_post_format() );

								endwhile; ?>
								
								<div class="pageedit">
									<?php
										the_posts_pagination( array(
											'mid_size'           => 4,
											'prev_text'          => __( '', 'every' ),
											'next_text'          => __( '&raquo', 'every' ),
										));	
									?>
								</div>	
								
								<?php
								else :
								get_template_part( 'template-parts/content', 'none' );

								endif;
								?>		

											
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