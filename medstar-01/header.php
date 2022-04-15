<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medstar01
 */
$isHeaderSticky = get_theme_mod('is_header_sticky');
$isHeaderFullyVisible = get_theme_mod('is_header_fully_visible');
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'medstar01' ); ?></a> -->

	<header id="masthead" class="site-header <?php if($isHeaderSticky) echo'sticky';?>">
		<div class="container">
			<div class="row">
				<div class="site-header__left col col-5 col-sm-6 col-lg-3 col-xl-2">
					<div class="site-branding">
						<?php
						if(!empty( get_custom_logo())) {
							the_custom_logo();
						} else {	
							if ( is_front_page() && is_home() ) :
						?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php else :  ?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php endif;

						}
					?>
					</div><!-- .site-branding -->
				</div>
				<div class="site-header__right col col-7 col-sm-6 col-lg-4 col-xl-3">
					<ul class='social-list navbar-nav menu menu-horizontal text-right'>
						<?php 
						$social_args = array(
							'facebook',
							'instagram',
							'twitter',
							'youtube'
						);
						foreach ($social_args as $value) {
							if (!empty(Kirki::get_option($value))) {
								echo '<li class="nav-item"><a class="social-item" href="'.Kirki::get_option($value).'" target="_blank"><i class="fab fa-'.$value.'"></i></a></li>';
							}
						}
						?>
					</ul>
					<button class="menu-toggle header-menu-toggle  mobile-menu-toggle d-block d-xl-none" aria-controls="primary-menu" aria-expanded="false">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</button>
				</div>
				<div class="site-header__center col d-none d-lg-block  col-xs-1 col-sm-3 col-lg-5 col-xl-7">
					<nav id="site-navigation" class="main-navigation">
					
						<?php  if(has_nav_menu( 'primary-menu' )){
							wp_nav_menu(
								array(
									'theme_location' => 'primary-menu',
									'menu_id'        => 'primary-menu',
									'container' => 'ul',
									'menu_class'=>'nav navbar-nav header-primary-navigation d-none d-xl-flex'
								)
							);
						}
						?>
					</nav><!-- #site-navigation -->
				</div>
				
			</div>

			<div class="row">
				<div class="col col-12">
					<nav id="mobile-site-navigation" class="mobile-main-navigation">
					
						<?php  if(has_nav_menu( 'primary-menu' )){
							wp_nav_menu(
								array(
									'theme_location' => 'primary-menu',
									'menu_id'        => 'primary-menu',
									'container' => 'ul',
									'menu_class'=>'nav navbar-nav header-mobile-navigation'
								)
							);
						}
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
	<?php 
		get_template_part( 'template-parts/header/header', 'banner' );
	?>