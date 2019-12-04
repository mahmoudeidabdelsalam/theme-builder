<?php 
$images = get_field('images');
$size = 'full';
if( $images ) { ?>
<section class="block-gallery">
    <div class="container-fluid">
        <div class="row">
        <?php foreach( $images as $image ): ?>
            <div class="col-md-4 col-12 text-center my-3">
                <div class="effect-img">
                    <img class="effect-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="spacer"></div>
</section>
<?php } ?>
