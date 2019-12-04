<?php
/**
 * Block Name: Latest News

 * This is the template that displays the Latest News Post Or Projects or Services.
 */

// create id attribute for specific styling
$id = 'latest_news' . $block['id'];

$headline = get_field('headline_latest_new');
$post_type = get_field('select_post_type');
$number = get_field('number_show_article');
  
$args = array(
  'post_type' => $post_type,
  'posts_per_page' => ($number)? $number:'2',
);

$posts = get_posts($args);

?>
<blockquote id="<?php echo $id ?>">
  <section class="block-slider">
    <div class="row justify-content-center">
      <h2 class="col-12"><?= $headline; ?></h2>
      <?php
        $counter = 0;
        if ($posts):
          foreach( $posts as $post):
            setup_postdata($post);
                $image= Utilities::global_thumbnails( $post->ID, 'full', false);
                ?>
                <div class="col-md-4">
                  <div class="card">
                    <img src="<?= $image; ?>" class="card-img-top" alt="<?= $post->post_title; ?>">
                    <div class="card-body">
                      <h5 class="card-title"><?= $post->post_title; ?></h5>
                    </div>
                  </div>
                </div>
                <?php
                $counter++;
          endforeach;
          wp_reset_postdata();
        endif;
        ?>
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
#<?php echo $id; ?> .card {
  background: transparent;
  border: none;
}
#<?php echo $id; ?> .card img {
    min-height: 165px;
    background-color: #ccc;
    border-radius: 3px;
}
</style>



