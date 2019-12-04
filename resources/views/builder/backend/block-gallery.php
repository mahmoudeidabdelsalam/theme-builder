<?php
/**
 * Block Name: Block Gallery

 * This is the template that displays the Gallery.
 */

// create id attribute for specific styling
$id = 'gallery' . $block['id'];
?>
<blockquote id="<?php echo $id ?>">
<?php 
$images = get_field('images');
$size = 'full';
if( $images ) { ?>
<section class="block-gallery">
    <div class="row">
    <?php foreach( $images as $image ): ?>
        <div class="col-md-4 col-12">
        <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
        </div>
        <?php endforeach; ?>
    </div>
<div class="spacer"></div>
</section>
<?php } ?>
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