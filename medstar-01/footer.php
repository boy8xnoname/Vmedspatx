<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vmedspatx
 */

?>

	<footer id="colophon" class="site-footer">
		<?php 
			get_template_part( 'template-parts/footer/footer', 'desktop' );
		?>
		<?php 
			get_template_part( 'template-parts/footer/footer', 'mobile' );
		?>
		
		<div class="site-info">
			<div class="container-fluid">
				<div class="row ">
					<div class="footer-copyright col col-12 col-md-6">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<?php
							/* translators: %s: CMS name, i.e. WordPress. */
							printf( esc_html__( '2022 – '. get_bloginfo( 'name' ).'. All Rights Reserved. ', 'vmedspatx' ));
							?>
						</a>
					</div>
					<div class="footer-copyright-menu  col col-12 col-md-6">
						<p class="text-right">
							<?php if(!empty(get_theme_mod('select_privacy_policy'))){ ?>
								<a href="<?php echo esc_url( get_page_link( get_theme_mod('select_privacy_policy') ) ); ?>">
									<?php echo esc_attr( 'Privacy Policy' );?>
								</a>
							<?php } ?>
						</p>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
		<div class="button-scroll-top">
			<a href="#" id="toTopBtn">
				<i class="eicon-arrow-up"></i>
			</a>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
