<?php get_header();?>			
			
		
	
		<!-- Start blog -->
		<section id="blog">
			<div class="blogg">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12">
						
							<?php
							// Start the loop.
							while ( have_posts() ) : the_post();
								
								the_content();
	
								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) {
									comments_template();
								}

								// End of the loop.
							endwhile;
							?>												
									
						</div>
					</div>
				</div><!-- /.container -->
			</div><!-- /.blogg -->
		</section><!-- /#blog -->
		<!-- Start blog -->
		
		<?php get_footer();?>