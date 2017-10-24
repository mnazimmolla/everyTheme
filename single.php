<?php get_header();?>			
			
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
	
	
		<!-- Start blog -->
		<section id="blog">
			<div class="blogg">
				<div class="container">
					<div class="row">
					
					
						<div class="col-md-8 col-sm-8">
						
							<?php
								if(have_posts()):while(have_posts()):the_post();
							?>						
						
							<div class="blog">
								<?php if(has_post_thumbnail()){ echo the_post_thumbnail('every_single_image');} ?>
							</div>
							<div class="blog-c">
								<div class="calender"><?php echo get_the_time('j');?> <span><?php echo get_the_time('M');?></span></div>
								<div class="b-txt">
									<h3><?php the_title();?></h3>
									<p class="content">by  <a href="<?php the_author_link();?>" class="admin"><?php the_author();?></a> <span>|</span> <?php comments_popup_link('No Comment', '1 Comment', '% Comment', 'Comment-link', 'Comments are off for this post'); ?> <span>|</span> <?php the_category(', ');?></p>
									<p><?php the_content();?></p>
								
									<div class="b-menu">
										<i class="fa fa-tag" aria-hidden="true"></i>
										<ul>
											<li><?php the_tags(' ', ' ', ' ' );?></li>
										</ul>
									</div>
									<div class="share-post">
										<label> Share This Post</label>
										<ul>
											<li><a href="http://www.facebook.com/sharer.php?url=<?php the_permalink();?>&amp;t=<?php the_title(); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
											<li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="a-post">
										<?php echo get_avatar( get_the_author_meta( 'ID' ), 82 ); ?>
										<div class="a-txt">
											<h5>About This Post :  <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" class="admin"><?php the_author();?></a></h5>
											<p><?php echo get_the_author_meta('description');?></p>
										</div>
									</div>

									<div class="rel-post">

										<?php $ntt_current_post = $post;
										global $post;

										$ntt_post_categories = get_the_category();
										if ($ntt_post_categories) {
										$ntt_category_ids = array();
										foreach($ntt_post_categories as $ntt_indiv_category) $ntt_category_ids[] = $ntt_indiv_category->term_id; 
										$args=array(
										'category__in' => $ntt_category_ids,
										'post__not_in' => array($post->ID),
										'post_type' => 'post',
										'post_status' => 'publish',
										'posts_per_page'=> 3 
										);

										$my_query = new wp_query($args);
										if( $my_query->have_posts() ) {echo '<div class="morePosts"><h3>Related Posts</h3>'; while( $my_query->have_posts() ) {$my_query->the_post();?>
											<div class="recentPosts">
											
												<div class="rel-img">
													<a href="<?php the_permalink();?>"><?php the_post_thumbnail('every_related_image');?></a>
													<h4><a href="<?php the_permalink();?>"><?php $ntt_the_title = $post->post_title; echo substr($ntt_the_title, 0, 20); ?></a></h4>
													<p><?php echo get_the_time('M j Y');?></p>
												</div>
														
										
											</div>
										<?php	}
											echo '</div>';
										
										} 	}
										
											if ( comments_open() || get_comments_number() ) {
												comments_template();
											}

										$post = $ntt_current_post;

										wp_reset_query(); ?>

								</div>			
									
									
									
									
									
									
									
								 <!--	<div id="comments" class="comments-area">
										<h5 class="comments-title">Comments on This Post</h5>
										<ol class="comment-list">
											<li id="comment-1" class="comment depth-1 parent">
												<article id="div-comment-1" class="comment-body">
													<footer class="comment-meta">
														<div class="comment-author">
															<img src="http://placehold.it/80x80" alt="image" />
														</div>
													</footer>
															
													<div class="comment-content">
														<b class="fn">Aaron Miller</b>
														<div class="reply"><a rel="nofollow" class="comment-reply-link" href="#" onclick="return addComment.moveForm( &quot;div-comment-1&quot;, &quot;1&quot;, &quot;respond&quot;, &quot;1&quot; )" aria-label="Reply to Mr WordPress">Reply</a></div>			
														<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
														<br><span>2 min</span></p>
													</div>
												</article>
												
												<ol class="children">
													<li id="comment-2" class="comment depth-2">
														<article id="div-comment-2" class="comment-body">
															<footer class="comment-meta">
																<div class="comment-author">
																	<img src="http://placehold.it/80x80" alt="image" />
																</div>
															</footer>
															
															<div class="comment-content">
																<b class="fn">Aaron Miller</b>
																<div class="reply"><a rel="nofollow" class="comment-reply-link" href="#" onclick="return addComment.moveForm( &quot;div-comment-1&quot;, &quot;1&quot;, &quot;respond&quot;, &quot;1&quot; )" aria-label="Reply to Mr WordPress">Reply</a></div>			
																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
																<br><span>15 min</span></p>
															</div>
														</article>
													</li>
												</ol>
											</li>
										</ol>
										
										<div id="respond" class="comment-respond">
											<h4 id="reply-title" class="comment-reply-title">leave a comments</h4>
											<form method="post" id="commentform" class="comment-form" novalidate="">
												<p class="comment-notes">Your email address will not be published.</p>
												<p class="comment-form-comment">
													<label for="comment">Comment</label> 
													<textarea id="comment" class="form-control" name="comment" rows="7" maxlength="65525" aria-required="true" required="required"></textarea>
												</p>
												<p class="comment-form-author cr">
													<label for="author">Name <span class="required">*</span></label>
													<input id="author" class="form-control" name="author" type="text" value="" maxlength="245" aria-required="true" required="required">
												</p>
												<p class="comment-form-email cr">
													<label for="email">Email <span class="required">*</span></label> 
													<input id="email" class="form-control" name="email" type="email" value="" maxlength="100" aria-required="true" required="required">
												</p>
												<p class="comment-form-url cr">
													<label for="url">Website</label> 
													<input id="url" class="form-control" name="url" type="url" value="" maxlength="200">
												</p>
												<p class="form-submit">
													<input name="submit" type="submit" id="submit" class=" submit" value="submit"> 
													<input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID">
													<input type="hidden" name="comment_parent" id="comment_parent" value="0">
												</p>
											</form>
										</div>
									</div> -->
								</div>
							</div>
							
						<?php endwhile; endif;?>							
							
						</div>
						<div class="col-md-4 col-sm-4 blog-widget">
						
						<?php 
							dynamic_sidebar('blog_sidebar');
						?>
							<div class="feeds">
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