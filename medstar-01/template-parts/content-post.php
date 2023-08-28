<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medstar01
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('mb-5'); ?>>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php the_post_thumbnail('large'); ?>
				<div class="post-categories my-2"><?php the_category(); ?></div>
				<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<div class="excerpt">
					<?php the_excerpt(); ?>
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
