<?php
$headline = get_field('headline_latest_new');
$post_type = get_field('select_post_type');
$number = get_field('number_show_article');
$link_more = get_field('link_more_media');
  
$args = array(
  'post_type' => $post_type,
  'posts_per_page' => ($number)? $number:'2',
);

$posts = get_posts($args);
$post_query = new WP_Query($args);
?>
<section class="block-latest-news">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 offset-md-1 col-12">
        <h2><?= $headline; ?> <?php if($link_more): ?> <a class="more-link font-weight-bold" href="<?= $link_more; ?>"><?php _e('more media', 'builder') ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a><?php endif; ?></h2>
      </div>
      <?php 
      if($post_query->have_posts() ):
        while($post_query->have_posts() ):
          $post_query->the_post();
          $image = Utilities::global_thumbnails( get_the_ID(), 'full', false);
          $permalink = get_the_permalink();
        ?>
        <div class="col-md-4 col-sm-6 col-12" data-aos="zoom-in-right" data-aos-duration="1000">
          <div class="card zoom-effect">
            <a href="<?= $permalink; ?>" class="effect-link">
              <img src="<?= $image; ?>" class="card-img-top effect-img" alt="<?= the_title(); ?>">
            </a>
            <div class="card-body">
              <h5 class="card-title"><a href="<?= $permalink; ?>"><?= the_title() ?></a></h5>
              <time><?= get_post_time('M d, Y'); ?></time>
            </div>
          </div>
        </div>
        <?php 
        endwhile;  
        wp_reset_postdata();
      endif;
      ?>

    </div>
  </div>
  <div class="spacer"></div>
</section>