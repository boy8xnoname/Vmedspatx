<?php
if (!wp_is_mobile()) {
    $book_appointment_image = !empty(get_field('book_appointment_image')) ?  get_field('book_appointment_image') : '';
} else {
    if(!empty(get_field('book_appointment_image_mobile'))) {
        $book_appointment_image = get_field('book_appointment_image_mobile');
    } else {
        $book_appointment_image = get_field('book_appointment_image');
    }
}
    $book_your_next_appointment_title = wp_strip_all_tags(get_field('book_your_next_appointment_title'));
    $book_your_next_appointment_description = get_field('book_your_next_appointment_description');
    $book_appointment_button_title = !empty(get_field('book_appointment_button_title')) ? wp_strip_all_tags(get_field('book_appointment_button_title')) : 'CONTACT US';
    $book_appointment_button_link = !empty(get_field('book_appointment_button_link') ) ? get_field('book_appointment_button_link') : '';
    if(!empty($book_your_next_appointment_title) || !empty($book_appointment_button_link)):
?>
<section class="home-section book_your_next_appointment">
    <div class="container">
        <?php if($book_appointment_image != '') { ?>
            <div class="row book_your_next_appointment-wrap" style="background-image: url('<?php echo esc_url($book_appointment_image['url']);?>');">
        <?php } else {?> 
            <div class="row book_your_next_appointment-wrap" >
        <?php } ?>
            <div class="book_your_next_appointment_main">
                <?php if(!empty($book_your_next_appointment_title)) :
                    echo '<h2 class="section-title text-center">'.$book_your_next_appointment_title.'</h2>';
                endif;
                if(!empty($book_your_next_appointment_description)) :
                    echo '<div class="book_your_next_appointment-description text-center">'.$book_your_next_appointment_description.'</div>';
                endif;
                ?>

                <div class="d-flex justify-content-center">
                    <?php if(!empty( $book_appointment_button_link)) :
                        echo '<a class="btn btn-view-more" href="'.$book_appointment_button_link.'">'. $book_appointment_button_title.'</a>';
                    endif;?>
                </div>
            </div>
          
        </div>
    </div>
</section>
<?php endif; ?>