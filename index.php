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
						
							<?php
								$every_main_blog = new WP_Query(array(
									'post_type'=>'post', //here will be the post
								));
								if($every_main_blog->have_posts()):while($every_main_blog->have_posts()):$every_main_blog->the_post();
							?>
							<div class="blog">
								<a href="<?php the_permalink();?>"><?php if(has_post_thumbnail()){ echo the_post_thumbnail('every_main_blog_image');} ?></a>
								<div class="b-content">
									<div class="calender"><?php echo get_the_time('j');?> <span><?php echo get_the_time('M');?></span></div>
									<div class="b-txt">
										<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
										<p class="content">by  <a href="<?php the_author_link();?>" class="admin"><?php the_author();?></a> <span>|</span> <?php comments_popup_link('No Comment', '1 Comment', '% Comment', 'Comment-link', 'Comments are off for this post'); ?> <span>|</span> <?php the_category(', ');?> </p>
										<p><?php if(!has_excerpt()){
											echo esc_html(wp_trim_words(get_the_content(), 20, '...'));
										}else{
											echo the_excerpt();
										}?></p>
										<a href="<?php the_permalink();?>" class="admin"><span> - </span>Continue Reading</a>
									</div>
								</div>
							</div>
							<?php endwhile; endif;?>
							
						 	<div class="pageedit">
								<?php
									the_posts_pagination( array(
										'mid_size'           => 4,
										'prev_text'          => __( '', 'every' ),
										'next_text'          => __( '&raquo', 'every' ),
									));	
								?>
							</div> 
							

							
						</div>
						<div class="col-md-4 col-sm-4 blog-widget">
						
						<?php dynamic_sidebar('blog_sidebar');?>
					
						
					
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