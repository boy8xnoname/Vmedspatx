<?php
	global $post;
	if ( get_field('home_page_parent', $post->ID ) ) {
		$parent = get_field('home_page_parent', $post->ID );
	} else {
		$parent = $post->ID;
	}
	if(have_rows('what_make_us_different_items', $parent)):
?>
<section class="home-section home-wmd">
	<div class="container">
		<h2 class="section-title text-center mb-5"><?php the_field('what_make_us_different_title', $parent); ?></h2>
		<div class="row gap-4">
			<?php while (have_rows('what_make_us_different_items', $parent)): the_row(); ?>
			<div class="col text-center wmd-col">
				<img src="<?php the_sub_field('icon'); ?>">
				<h4><?php the_sub_field('title'); ?></h4>
				<?php the_sub_field('content'); ?>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<?php endif; ?>