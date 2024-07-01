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
	<?php
			if( have_rows('flex_sections') ):

		    // Loop through rows.
		    while ( have_rows('flex_sections') ) : the_row();

		        // Case: Paragraph layout.
		        if( get_row_layout() == 'button' ):
		            get_template_part( 'template-parts/campaign/sendmegift' );
		        elseif( get_row_layout() == 'countdown' ): 
		            get_template_part( 'template-parts/campaign/countdown' );
		        elseif( get_row_layout() == 'featured' ): 
		            get_template_part( 'template-parts/campaign/featured' );
		        elseif( get_row_layout() == 'services' ): 
		            get_template_part( 'template-parts/campaign/services' );
		        elseif( get_row_layout() == 'reviews' ): 
		            get_template_part( 'template-parts/campaign/reviews' );
		        // Case: Download layout.
		        elseif( get_row_layout() == 'map' ): 
		            get_template_part( 'template-parts/campaign/map' );
		        endif;

		    // End loop.
		    endwhile;

		// No value.
		else :
		    // Do something...
		endif;
	?>
	<!-- Section -->
	


</article><!-- #post-<?php the_ID(); ?> -->