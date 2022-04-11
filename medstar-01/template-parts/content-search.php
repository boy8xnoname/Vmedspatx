<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medstar01
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="row">
	<div class="col col-12 col-md-4">
		<?php medstar01_post_thumbnail(); ?>
	</div>
	<div class="col col-12 col-md-8">
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			medstar01_posted_on();
			medstar01_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->


	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php medstar01_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	</div>
</div>

</article><!-- #post-<?php the_ID(); ?> -->
