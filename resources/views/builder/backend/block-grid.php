<?php
/**
 * Block Name: Block slider

 * This is the template that displays the slider.
 */

// create id attribute for specific styling
$id = 'grid' . $block['id'];
?>
<blockquote id="<?php echo $id ?>">
<section class="block-grid">
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
</section>
</blockquote>
<style>
#<?php echo $id; ?> h2 {
    font-family: Graphik;
    color: #000000;
    font-size: 16px;
}
#<?php echo $id; ?>  p {
    font-family: Graphik;
    font-size: 10px;
}
</style>