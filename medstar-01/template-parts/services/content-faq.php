<?php
	global $post;

	if ( get_field('parent_service_page', $post->ID ) ) {
		$parent = get_field('parent_service_page', $post->ID );
	} else {
		$parent = $post->ID;
	}
    $open_items = get_field('faq_open', $post->ID);
	if( have_rows('faq_items', $parent) ):
?>
<section class="faq-section">
    <div class="container">
        <h2 class="faq-title text-center h1"><?php echo strip_tags(get_field('faq_heading', $parent)); ?></h2>
        <div class="accordion" id="faq_items">
            <?php 
                while ( have_rows('faq_items', $parent) ) : the_row();
                    $id = sanitize_title(get_sub_field('title'));
            ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading_<?php echo $id; ?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $id; ?>" aria-expanded="true" aria-controls="collapseOne">
                        <?php the_sub_field('title'); ?>
                    </button>
                </h2>
                <div id="<?php echo $id; ?>" class="accordion-collapse collapse <?php echo $open_items ? 'show' : ''; ?>" aria-labelledby="heading_<?php echo $id; ?>" data-bs-parent="#faq_items">
                    <div class="accordion-body">
                        <?php the_sub_field('content'); ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>