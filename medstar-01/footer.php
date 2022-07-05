<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medstar01
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
						<?php if(get_theme_mod('show_copyright_content')): 
							 if(!empty( get_theme_mod('copyright_content'))) {
								echo nl2br(get_theme_mod('copyright_content'));
							 } else { ?>
							<a href="<?php echo esc_url(home_url('/')); ?>">
								<?php
                                /* translators: %s: CMS name, i.e. WordPress. */
                                printf(esc_html__('2022 – '. get_bloginfo('name').'. All Rights Reserved. ', 'medstar01')); ?>
							</a>
						<?php
                             } 
							endif; ?>
					</div>
					<div class="footer-copyright-menu  col col-12 col-md-6">
						<p class="text-right">
							<?php if(!empty(get_theme_mod('select_privacy_policy'))){ ?>
								<a href="<?php echo esc_url( get_page_link( get_theme_mod('select_privacy_policy') ) ); ?>">
									<?php echo esc_attr( 'Privacy Policy' );?>
								</a>
							<?php } ?>
								<span class="separator">|</span>
							<?php if(!empty(get_theme_mod('select_terms_of_use'))){ ?>
								<a href="<?php echo esc_url( get_page_link( get_theme_mod('select_terms_of_use') ) ); ?>">
									<?php echo esc_attr( 'Terms of Use' );?>
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
<!-- Start / Tracking Code Should Go Here -->
<!-- End / Tracking Code Should Go Here -->
<?php wp_footer(); ?>
</body>
</html>
