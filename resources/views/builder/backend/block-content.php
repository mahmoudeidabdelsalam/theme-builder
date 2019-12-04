<?php
/**
 * Block Name: Block Content

 * This is the template that displays the Gallery.
 */

// create id attribute for specific styling
$id = 'gallery' . $block['id'];
?>
<blockquote id="<?php echo $id ?>">
<section class="block-content">
    <div class="row justify-content-center">
        <div class="col-md-6 col-12">
        <?php echo get_field('the_content'); ?>
        </div>
    </div>
    <div class="spacer"></div>
</section>
</blockquote>
<style>
#<?php echo $id; ?> h2 {
    font-family: Graphik;
    color: #000000;
    font-size: 16px;
}
#<?php echo $id; ?> h3 {
    font-family: Graphik;
    color: #000000;
    font-size: 15px;
}
#<?php echo $id; ?> h4 {
    font-family: Graphik;
    color: #000000;
    font-size: 14px;
}
#<?php echo $id; ?> h5 {
    font-family: Graphik;
    color: #000000;
    font-size: 13px;
}
#<?php echo $id; ?> h5 {
    font-family: Graphik;
    color: #000000;
    font-size: 12px;
}
#<?php echo $id; ?>  p {
    font-family: Graphik;
    font-size: 10px;
}
</style>