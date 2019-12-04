<?php
/**
 * Block Name: Block Qoute

 * This is the template that displays the Block Qoute.
 */

// create id attribute for specific styling
$id = 'blockqoute' . $block['id'];
?>
<blockquote id="<?php echo $id ?>">
<section class="block-quote">
    <div class="row <?php echo (get_field('where_to_view_the_quote') == 'Center') ? 'justify-content-center' : '' ?>">
        <div class="<?php echo (get_field('where_to_view_the_quote') == 'Left') ? 'col-md-7 col-12 offset-md-1' : 'col-md-6 col-12' ?>">
            <h2><?php echo get_field('quotation') ?></h2>
        </div>
    </div>
</section>
</blockquote>
<style>
#<?php echo $id; ?>  h2 {
  font-family: Graphik;
color: #000000;
font-size: 16px;
}
</style>



