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
					<div class="blog-post-item col col-lg-4">	
						<?php vmedspatx_post_thumbnail(); ?>
						<div class="blog-post-item-text">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php wp_reset_postdata(); 
endif; ?>


