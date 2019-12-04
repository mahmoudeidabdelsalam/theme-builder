<?php
$posts = get_field('slider_select_post_type');
?>
<section class="block-slider">
  <div class="row justify-content-center">
    <div class="col-12">
      <div class="carousel-top cS-hidden" id="slider_top">
        <?php
          if ($posts):
            $array = [];

            foreach( $posts as $post):
              setup_postdata($post);
              $array[] = $post->ID;
            endforeach;
            wp_reset_postdata();
            
            $counter = 0;
            foreach( $posts as $post):
              setup_postdata($post);
              $counter++;

                $currentKey = array_search($post->ID, $array);
                $before = (isset($array[$currentKey - 1])) ? $array[$currentKey - 1] : $array[count($array) - 1];
                $after = (isset($array[$currentKey + 1])) ? $array[$currentKey + 1] : $array[0];

                $image_left = Utilities::global_thumbnails( $before, 'full', false);
                $image_right = Utilities::global_thumbnails( $after, 'full', false);
                
                $image_slide = Utilities::global_thumbnails( $post->ID, 'full', false);
                $term_list = wp_get_post_terms($post->ID, 'country', array("fields" => "names"));
                ?>
                <div class="carousel-slide <?= ($counter == 0)? 'active':''; ?>" style="background-image:url('<?= $image_slide; ?>')">
                  <div class="grid-left grid-slide" style="background-image:url('<?= $image_left; ?>')"></div>
                  <div class="row justify-content-center align-items-end h-100 content-slide">
                    <div class="col-md-7 col-12">
                      <h2 class="headline-term"><?= get_the_title($post->ID); ?></h2>
                      <?php if($term_list): ?>
                        <p class="slide-term"><?= $term_list['0']; ?></p>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="grid-right grid-slide" style="background-image:url('<?= $image_right; ?>')"></div>
                </div>
                <?php
            endforeach;
            wp_reset_postdata();
          endif;

          ?>
      </div>
    </div>
  </div>
  <div class="spacer"></div>
</section>
