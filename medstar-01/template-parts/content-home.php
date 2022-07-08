<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medstar01
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">  
		<div class="container">
			<?php
			the_content();
			?>
		</div>
	</div><!-- .entry-content -->

	<!-- Home page section -->

	<?php get_template_part( 'template-parts/home/home-treaments_featured' ); ?>

	<?php get_template_part( 'template-parts/home/home-our_services' ); ?>

	<?php get_template_part( 'template-parts/home/home-explore_our_treatments' ); ?>

	<?php  get_template_part( 'template-parts/home/home-about_us' ); ?>

	<?php get_template_part( 'template-parts/home/home-our_testimonials' ); ?>

	<?php // get_template_part( 'template-parts/home/home-about_us' ); ?>

	<?php get_template_part( 'template-parts/home/home-in_the_press' ); ?>

	<?php get_template_part( 'template-parts/home/home-book_your_next_appointment' ); ?>

	<?php get_template_part( 'template-parts/home/home-blog_post' ); ?>

	<?php get_template_part( 'template-parts/home/home-instagram_feed' ); ?>

	<?php //get_template_part( 'template-parts/home/home-our_location' ); ?>

	<?php get_template_part( 'template-parts/home/home-contact_us' ); ?>


</article><!-- #post-<?php the_ID(); ?> -->
