<?php
	$blogSectionTitle = get_field('blog_post_section_title');
	$blogPostItems = get_field('select_blog_posts');
	if( $blogPostItems ): 
?>
	<section class="home-section blog_post">
		<div class="container">
			<h2 class="section-title text-center">Blog Posts</h2>

			<div class="row post-list">
				<?php foreach( $blogPostItems as $post ):  setup_postdata($post); ?>
					<div class="blog-post-item col col-12 col-lg-4">	
						<div class="blog-post-item-wrap">
							<?php medstar01_post_thumbnail(); ?>
							<div class="blog-post-item-text text-center">
								<h3 class="blog-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>
								<div class="post-excerpt">
									<?php
										medstar01_posted_on();
									?>								
								</div>
								<div class="post-excerpt">
									<?php echo wp_trim_words(get_the_excerpt(),30,$more = ''); ?> 									
								</div>
								<div class="item-action">
									<a class="btn btn-blog-read-more" href="<?php the_permalink(); ?>">
										<?php echo esc_attr('Read more'); ?>
									</a>
								</div>					
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php wp_reset_postdata(); 
endif; ?>


