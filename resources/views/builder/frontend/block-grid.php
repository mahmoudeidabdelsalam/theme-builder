<section class="block-grid" data-aos="fade" data-aos-duration="500">
    <div class="container-fluid">
        <div class="row">
        <?php
        if( have_rows('repeat_item') ):
            while ( have_rows('repeat_item') ) : the_row();
            ?>
            <div class="<?php echo (get_field('number_of_items_displayed') == 'Two Item') ? 'col-md-4 col-12 offset-md-1' : 'col-md-4 col-12' ?>">
                <h2><?php echo the_sub_field('heading'); ?></h2>
                <?php echo the_sub_field('description'); ?>
            </div>
            <?php
            endwhile;
        endif;
    ?>    
    </div>
    </div>
    <div class="spacer"></div>
</section>
