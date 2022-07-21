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
			<div class="container">
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
							<?php if(!empty(get_theme_mod('select_terms_of_use'))){ ?>
                                <span class="separator">|</span>
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
<?php
    wp_footer();
    $float_phone_number = get_theme_mod('floating_phone_number');

    $floating_phone_bg_color = get_theme_mod('floating_phone_bg_color');
    $floating_phone_color = get_theme_mod('floating_phone_color');

    $floating_phone_bg_color_hover = get_theme_mod('floating_phone_bg_color_hover');
    $floating_phone_color_hover = get_theme_mod('floating_phone_hover_color');

    if(!empty($float_phone_number)){
        ?>
        <a href="tel:<?php echo clean_phone_link($float_phone_number); ?>" class="medstar-floating-btn">
            <i aria-hidden="true" class="fa fa-phone"></i><?php echo $float_phone_number; ?>
        </a>
        <style>
            @media (max-width: 768px) {
                .site-footer .site-info {
                    padding-bottom: 45px !important;
                }
                <?php if(!empty($floating_phone_bg_color)){ ?>
                body .medstar-floating-btn {
                    background-color: <?php echo $floating_phone_bg_color; ?> !important;
                }
                <?php } ?>
                <?php if(!empty($floating_phone_color)){ ?>
                body .medstar-floating-btn,
                body .medstar-floating-btn i {
                    color: <?php echo $floating_phone_color; ?> !important;
                }
                <?php } ?>

                <?php if(!empty($floating_phone_bg_color_hover)){ ?>
                    body .medstar-floating-btn:hover {
                        background-color: <?php echo $floating_phone_bg_color_hover; ?> !important;
                    }
                <?php } ?>
                <?php if(!empty($floating_phone_color_hover)){ ?>
                    body .medstar-floating-btn:hover,
                    body .medstar-floating-btn:hover i {
                        color: <?php echo $floating_phone_color_hover; ?> !important;
                    }
                <?php } ?>
            }
        </style>
        <?php
    }
?>

</body>
</html>
