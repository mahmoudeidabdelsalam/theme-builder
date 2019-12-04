<?php
/**
 * Block Name: Block Image With Content

 * This is the template that displays the Block Image With Content.
 */

// create id attribute for specific styling
$id = 'blockimagewithcontent' . $block['id'];
$image = get_field('image');
?>
<blockquote id="<?php echo $id ?>">
<section class="block-image-with-content" data-aos="fade" data-aos-duration="500">
<div class="container-fluid">

  <?php if (get_field('with_history') == 'Yes') {?>
        <div class="row align-items-center <?=(get_field('position_image') == 'left') ? 'flex-row' : 'flex-row-reverse'?>">
      <div class="col-md-6 col-12">
      <div class="image-overlay position-relative d-inline-block w-auto">
        <img src="<?=$image['url']?>" class="img-fluid" alt="<?=$image['name']?>">
          <?php if (get_field('with_history') == 'Yes') {?>
            <div class="overlay position-absolute"></div>
          <?php }?>
          <h2 class="position-absolute large text-white"> <span><?=get_field('start_from');?></span><?php if (get_field('end_in')) {?>-<span><?=get_field('end_in');?></span><?php }?></h2>
        </div>
      </div>
      <div class="col-md-6 col-12">
        <div class="row">
        <?php if (get_field('postion_content') == 'Start') {?>
          <div class="col-md-12 col-12">
              <h2 class="font-weight-bold"><?=get_field('heading')?></h2>
              <?=get_field('description')?>
              <?php if (get_field('link_url')) {?>
              <a class="text-decoration-none text-uppercase small" href="<?=get_field('link_url')?>"><?=get_field('link_title')?><i class="fa fa-chevron-right ml-2"></i></a>
              <?php }?>
          </div>
          <?php } elseif (get_field('postion_content') == 'Center') {?>
          <div class="col-md-10 offset-md-1 col-12">
              <h2 class="font-weight-bold"><?=get_field('heading')?></h2>
              <?=get_field('description')?>
              <?php if (get_field('link_url')) {?>
              <a class="text-decoration-none text-uppercase small font-weight-bold" href="<?=get_field('link_url')?>"><?=get_field('link_title')?><i class="fa fa-chevron-right ml-2"></i></a>
              <?php }?>
          </div>
          <?php }?>
        </div>
      </div>
      </div>

    <?php } else {?>
      <div class="row align-items-center <?=(get_field('position_image') == 'left') ? 'flex-row' : 'flex-row-reverse'?>">
      <div class="col-md-6 col-12">
      <div class="image-overlay position-relative d-inline-block w-auto">
        <img src="<?=$image['url']?>" class="img-fluid" alt="<?=$image['name']?>">
            <?php if (get_field('with_history') == 'Yes') {?>
                <div class="overlay position-absolute"></div>
            <?php }?>
            <p class="<?=(get_field('position_image') == 'left') ? 'text-right' : 'text-left'?> caption text-uppercase mt-2"><?=$image['caption']?></p>
          </div>
        </div>
        <div class="col-md-6 col-12">
        <div class="row">
        <?php if (get_field('postion_content') == 'Start') {?>
          <div class="col-md-12 col-12">
              <h2 class="large"><?=get_field('number')?></h2>
              <h2 class="font-weight-bold"><?=get_field('heading')?></h2>
              <?=get_field('description')?>
              <?php if (get_field('link_url')) {?>
              <a class="text-decoration-none text-uppercase small font-weight-bold" href="<?=get_field('link_url')?>"><?=get_field('link_title')?><i class="fa fa-chevron-right ml-2"></i></a>
              <?php }?>
          </div>
          <?php } elseif (get_field('postion_content') == 'Center') {?>
          <div class="col-md-10 offset-md-1 col-12">
              <h2 class="font-weight-bold"><?=get_field('heading')?></h2>
              <?=get_field('description')?>
              <?php if (get_field('link_url')) {?>
                <?php if (get_field('link_url')) {?>
              <a class="text-decoration-none text-uppercase small font-weight-bold" href="<?=get_field('link_url')?>"><?=get_field('link_title')?><i class="fa fa-chevron-right ml-2"></i></a>
              <?php }?>
             <?php }?>
          </div>
          <?php }?>
        </div>
      </div>
  </div>
  </div>
  <?php }?>

  <div class="spacer"></div>
</section>
</blockquote>
<style>
#<?php echo $id; ?>  h2 {
  font-family: Graphik;
    color: #000000;
    font-size: 16px;
}
#<?php echo $id; ?>  h2.position-absolute {
  top: 45%;
  left: 40%;
}
#<?php echo $id; ?>  h3 {
  font-family: Graphik;
  color: #000000;
  font-size: 16px;
}
#<?php echo $id; ?>  h6 {
  font-family: Graphik;
  color: #000000;
  font-size: 10px;

}
 #<?php echo $id; ?> p {
    font-family: Graphik;
    font-size: 8px;
    display: block;
 }
 #<?php echo $id; ?> p .caption {
  opacity: 0.5;
  letter-spacing: 0.05em;
 }
 #<?php echo $id; ?> a {
  font-size: 12px;
  color: #000;
 }
 #<?php echo $id; ?> .image-overlay img{
  height: 340px;
 }
 #<?php echo $id; ?>  .overlay {
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  background: rgb(0,0,0,.2);
 }
</style>



