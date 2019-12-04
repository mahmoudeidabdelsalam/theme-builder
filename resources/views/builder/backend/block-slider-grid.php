<?php
/**
 * Block Name: Slider Grid

 * This is the template that displays the slider Grid Top Home.
 */

// create id attribute for specific styling
$id = 'slider_grid' . $block['id'];
$posts = get_field('slider_select_post_type');
?>
<blockquote id="<?php echo $id ?>">
<section class="block-slider">
    <div class="row justify-content-center">
        <div class="col-md-10 col-12">
            <div id="silder" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                      $counter = 0;
                      if ($posts):
                        foreach( $posts as $post):
                          setup_postdata($post);
                              $image_slide = Utilities::global_thumbnails( $post->ID, 'full', false);
                              ?>
                              <div class="carousel-item <?php if ($counter == 0) {echo "active";}?> mb-2">
                                  <img src="<?= $image_slide; ?>" class="img-fluid" alt="<?= the_title(); ?>">
                              </div>
                              <?php
                              $counter++;
                        endforeach;
                        wp_reset_postdata();
                      endif;
                      ?>
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



