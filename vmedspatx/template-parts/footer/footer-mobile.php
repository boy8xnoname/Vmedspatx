<div class="footer-top-content container-fluid d-block d-md-none">
    <div class="row footer-widgets">
        <!-- Footer contact information -->
        <div class="widgets first-col-widget col col-4 col-md-4 col-xl-5">
            <?php
            if(get_theme_mod('footer_logo') != ''){
            ?>
                <div class="footer-logo">
                    <a class="footer-brand-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>" rel="home">
                        <img class="footer-logo-image" src="<?php echo  get_theme_mod('footer_logo'); ?>" alt="<?php bloginfo( 'name' ); ?>">
                    </a>
                </div>
            <?php
                } 
            ?>
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
                        echo '<li class="nav-item"><a class="social-item" href="'.Kirki::get_option($value).'"><i class="fab fa-'.$value.'"></i></a></li>';
                    }
                }
                ?>
            </ul>
        </div>
        <!-- Footer logo and partner logo content in footer -->
        <div class="widgets second-col-widget col col-4 col-md-4 col-xl-2 text-center">
            <div class="content-list">
                <div class="contact-item">
                    <h3>Dallas </h3>
                    <ul>
                        <li>
                            <a href="tel:+19727704422">
                                <span class="">972-770-4422</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                6915 Preston Rd. Dallas TX 75205
                            </a>
                        </li>
                    </ul>
                    
                </div>
                <div class="contact-item">
                    <h3>Addison </h3>
                    <ul>
                        <li>
                            <a href="tel:+19727704422">
                                <span class="">972-770-4422</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                6915 Preston Rd. Dallas TX 75205
                            </a>
                        </li>
                    </ul>
                    
                </div>
                <div class="contact-item">
                    <h3>Southlake </h3>
                    <ul>
                        <li>
                            <a href="tel:+19727704422">
                                <span class="">972-770-4422</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                6915 Preston Rd. Dallas TX 75205
                            </a>
                        </li>
                    </ul>
                    
                </div>
            </div>           
            <div class="row">
                <div class="d-none d-lg-block col col-lg-2 col-xl-4">
                </div>
                <div class="col col-xs-12  col-sm-6 col-lg-5 col-xl-4">
                    <div class="time-working">
                        <div class="time-wroking__item">
                        <p><strong>Monday – Friday</strong><br>8am to 6pm</p>
                        </div>
                        <div class="time-wroking__item">
                        <p><strong>Saturday</strong><br>10am to 6pm</p>
                        </div>
                        <div class="time-wroking__item">
                        <p><strong>Sunday</strong><br>by appointment only</p>
                        </div>
                    </div>
                </div>
                <div class="col col-xs-12 col-sm-6 col-lg-5 col-xl-4">
                    <?php  if(has_nav_menu( 'footer-menu' )){
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer-menu',
                                'menu_id'        => 'footer-menu',
                                'container' => 'ul',
                                'menu_class'=>'nav navbar-nav footer-vertical-menu'
                            )
                        );
                    }
                    ?>							
                </div>
            </div>
            
        </div>
        <div class="widgets third-col-widget col col-4 col-md-4 col-xl-5">
          
            <div class="our-partner-logo">
                <?php 
               
                if(get_theme_mod('partner_repeater') != ''){
                    $partners = get_theme_mod('partner_repeater');
                    foreach( $partners as $partner ) : 
                    ?>
                        <div class="partner-item">
                            <div class="image-holder">
                                <a href="<?php echo $partner['partner_link']; ?>" title="Partner" target="_blank">
                                    <img src="<?php echo esc_url( $partner['partner_img'] ); ?>" alt="Partner logo image"> 
                                </a>
                            </div>
                        </div>
                    <?php
                    
                    endforeach;
                } ?>

            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col col-12 col-md-1 col-xl-2"></div>
        <div class="col col-12 col-md-10 col-xl-8 text-center">
            <small>
            *By submitting this form you are to be contacted by Vitalyc and receive marketing messages via phone, text or email. You will be able to unsubscribe from these communications at any time. We are committed to protecting and respecting your privacy. For more information, please review our Privacy Policy.
            </small>
        </div>
        <div class="col col-12 col-md-1 col-xl-2"></div>
    </div>
</div>
