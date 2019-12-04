<?php
/**
 * Block Name: Block slider

 * This is the template that displays the slider.
 */

// create id attribute for specific styling
$id = 'slider' . $block['id'];
?>
<blockquote id="<?php echo $id ?>">
<section class="block-slider">
    <div class="row justify-content-center">
        <div class="col-md-10 col-12">
            <div id="silder" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                        $counter = 0;
                        if (get_field('source_data') == 'Custom') {
                            if (have_rows('repeat_images')):
                                while (have_rows('repeat_images')): the_row();
                                    $image_slide = get_sub_field('image_slide');
                                    ?>
		                              <div class="carousel-item <?php if ($counter == 0) {echo "active";}?> mb-2">
		                                  <img src="<?php echo $image_slide['url']; ?>" class="img-fluid" alt="<?php echo $image_slide['name']; ?>">
		                              </div>
		                              <?php
                            $counter++;
                            endwhile;
                        endif;
                    } else {
                        $posts = get_field('post_relationship');
                        $counter = 0;
                        if ($posts): ?>
                    <?php foreach ($posts as $post): ?>
                    <div class="carousel-item <?php if ($counter == 0) {echo "active";}?> mb-2">
                        <img src="<?php echo Utilities::global_thumbnails($post->ID, 'full'); ?>" class="img-fluid">
                    </div>
                    <?php
                    $counter++;
                        endforeach;
                        ?>
                    <?php
                    endif;
                    }
                    ?>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <a class="carousel-control-prev position-static d-inline-block text-gray-solid w-auto"
                            href="#silder" role="button" data-slide="prev">
                            <span class="dashicons dashicons-arrow-left-alt2 text-dark" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next position-static d-inline-block text-gray-solid w-auto ml-3"
                            href="#silder" role="button" data-slide="next">
                            <span class="dashicons dashicons-arrow-right-alt2 text-dark" aria-hidden="true"></span>
                        </a>
                    </div>
                    <div class="col-md-6 col-12 text-md-right">
                        <a class="text-decoration-none text-uppercase text-tiny" href="#"><?php _e('our projects', 'builder');?><i class="fa fa-chevron-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</blockquote>
<style>
#<?php echo $id; ?>  p {
    font-size: 10px;
}
#<?php echo $id; ?> a {
    font-size: 10px;
    color: #000;
}
</style>



