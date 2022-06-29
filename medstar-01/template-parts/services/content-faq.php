<?php if( have_rows('faq_items') ): ?>
<section class="faq-section">
    <div class="container">
        <h2 class="faq-title text-center h1"><?php the_field('faq_heading'); ?></h2>
        <div class="accordion" id="faq_items">
            <?php 
                while ( have_rows('faq_items') ) : the_row();
                    $id = sanitize_title(get_sub_field('title'));
            ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading_<?php echo $id; ?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $id; ?>" aria-expanded="true" aria-controls="collapseOne">
                        <?php the_sub_field('title'); ?>
                    </button>
                </h2>
                <div id="<?php echo $id; ?>" class="accordion-collapse collapse" aria-labelledby="heading_<?php echo $id; ?>" data-bs-parent="#faq_items">
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