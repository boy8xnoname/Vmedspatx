<?php
global $post;
if ( get_field('parent_about_page', $post->ID ) ) {
	$parent = get_field('parent_about_page', $post->ID );
} else {
	$parent = $post->ID;
}
$why_choose_us_heading = strip_tags(get_field('why_choose_us_heading', $parent));
$why_choose_us_content = get_field('why_choose_us_content', $parent);
if(!empty($why_choose_us_heading) || !empty($why_choose_us_content)) : 
?>
<section class="about-us-content about-us-content-top">
    <div class="container">
        <?php if(!empty($why_choose_us_heading)) :?>
        <h2 class="section-title text-center"><?php echo $why_choose_us_heading; ?></h2>
        <?php endif; ?>
        <?php if(!empty($why_choose_us_content)) :?>
            <div class="about-us-content-text">
                <?php echo apply_filters('the_content', $why_choose_us_content);?>
            </div>
        <?php endif; ?>        
    </div>
</section>
<?php endif; ?>