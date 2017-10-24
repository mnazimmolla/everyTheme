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
									<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'every' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
								</header><!-- .page-header -->

								<?php
								while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/content', 'search' );

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
							// If no content, include the "No posts found" template.
							else :
								get_template_part( 'template-parts/content', 'none' );

							endif;
							?>						
							
							
						</div>
						<div class="col-md-4 col-sm-4 blog-widget">
						
						<?php dynamic_sidebar('blog_sidebar');?>
					
							
							<div class="right-side blog-sidebar">
								<h3 class="border">categories</h3>
								<ul>
									<li><a href="#">Business </a></li>
									<li><a href="#">Marketing </a></li>
									<li><a href="#">Photography </a></li>
									<li><a href="#">Media </a></li>
									<li><a href="#">Web Design </a></li>
								</ul>
							</div>
							<div class="right-side blog-sidebar">
								<h3 class="border">Recent Posts</h3>
								<div class="rp">
									<div class="RP">
										<div class="rp-img"><a href="#"><img src="assets/images/90x60.jpg" alt="image" /></a></div>
										<div class="rp-txt">
											<h4><a href="#">Every Golden Snow Land</a></h4>
											<p>Business - Aug 2015</p>
										</div>
									</div>
									<div class="RP">
										<div class="rp-img"><a href="#"><img src="assets/images/90x60.jpg" alt="image" /></a></div>
										<div class="rp-txt">
											<h4><a href="#">Every Golden Snow Land</a></h4>
											<p>Business - Aug 2015</p>
										</div>
									</div>
									<div class="RP">
										<div class="rp-img"><a href="#"><img src="assets/images/90x60.jpg" alt="image" /></a></div>
										<div class="rp-txt">
											<h4><a href="#">Every Golden Snow Land</a></h4>
											<p>Business - Aug 2015</p>
										</div>
									</div>
									<div class="RP">
										<div class="rp-img"><a href="#"><img src="assets/images/90x60.jpg" alt="image" /></a></div>
										<div class="rp-txt">
											<h4><a href="#">Every Golden Snow Land</a></h4>
											<p>Business - Aug 2015</p>
										</div>
									</div>
								</div>
							</div>
							<div class="blog-tag blog-sidebar">
								<h3 class="border">popular tags</h3>
								<ul>
									<li><a href="#" class=" hvr-rectangle-in">animal</a></li>
									<li><a href="#" class=" hvr-rectangle-in">graphic design</a></li>
									<li><a href="#" class=" hvr-rectangle-in">business</a></li>
									<li><a href="#" class=" hvr-rectangle-in">identity</a></li>
									<li><a href="#" class=" hvr-rectangle-in">blog</a></li>
									<li><a href="#" class=" hvr-rectangle-in">travel</a></li>
									<li><a href="#" class=" hvr-rectangle-in">format</a></li>
									<li><a href="#" class=" hvr-rectangle-in">life style</a></li>
									<li><a href="#" class=" hvr-rectangle-in">quote</a></li>
									<li><a href="#" class=" hvr-rectangle-in">news post</a></li>
								</ul>
							</div>
							<div class="feeds blog-sidebar">
								<h3 class="border">twitter feeds</h3>
								<div class="twitt">
									<div class="tw">
										<div class="tw-icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
										<div class="tw-txt">
											<p>The standard chunk of Lore Ipsuusesince the reproduced below.</p>
											<a href="#">http://every.to/EV77F</a>
											<div class="link"><button class="btn btn-default hvr-rectangle-in">3 min ago</button></div>
										</div>
									</div>
									<hr />
									<div class="tw">
										<div class="tw-icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
										<div class="tw-txt">
											<p>The standard chunk of Lore Ipsuusesince the reproduced below.</p>
											<a href="#">http://every.to/EV77F</a>
											<div class="link"><button class="btn btn-default hvr-rectangle-in">3 min ago</button></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /.container -->
			</div><!-- /.blogg -->
		</section><!-- /#blog -->
		<!-- Start blog -->
		<?php get_footer();?>