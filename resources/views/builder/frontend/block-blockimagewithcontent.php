<?php
$image = get_field('image');
?>
<section class="block-image-with-content" data-aos="fade" data-aos-duration="500">
<div class="container-fluid">

  <?php if (get_field('with_history') == 'Yes') {?>
    <div class="row align-items-center <?=(get_field('position_image') == 'left') ? 'flex-row' : 'flex-row-reverse'?>">
      <div class="col-md-6 col-12 text-center">
      <div class="image-overlay position-relative d-inline-block w-auto">
        <img src="<?=$image['url']?>" class="img-fluid" alt="<?=$image['name']?>">
          <?php if (get_field('with_history') == 'Yes') {?>
            <div class="overlay position-absolute"></div>
          <?php }?>
          <h2 class="position-absolute large text-white"> <span><?=get_field('start_from');?></span><?php if (get_field('end_in')) {?>-<span><?=get_field('end_in');?></span><?php }?></h2>
        </div>
      </div>
      <div class="<?=(get_field('postion_content') == 'Start') ? 'col-md-6 col-12' : 'col-md-5 col-12'?> <?=(get_field('position_image') == 'left') ? 'mr-auto' : 'ml-auto'?>">
        <h2 class="font-weight-bold"><?=get_field('heading')?></h2>
        <?=get_field('description')?>
        <?php if (get_field('link_url')) {?>
        <a class="text-decoration-none text-uppercase small font-Semibold" href="<?=get_field('link_url')?>"><?=get_field('link_title')?><i class="fa fa-chevron-right ml-2"></i></a>
        <?php }?>
      </div>
      </div>
    <?php } else {?>
      <div class="row align-items-center <?=(get_field('position_image') == 'left') ? 'flex-row' : 'flex-row-reverse'?>">
      <div class="col-md-6 col-12 text-center">
      <div class="image-overlay position-relative d-inline-block w-auto">
        <img src="<?=$image['url']?>" class="img-fluid" alt="<?=$image['name']?>">
            <?php if (get_field('with_history') == 'Yes') {?>
                <div class="overlay position-absolute"></div>
            <?php }?>
            <p class="<?=(get_field('position_image') == 'left') ? 'text-right' : 'text-left'?> caption text-uppercase mt-2"><?=$image['caption']?></p>
          </div>
        </div>
        <div class="<?=(get_field('postion_content') == 'Start') ? 'col-md-6 col-12' : 'col-md-5 col-12'?> <?=(get_field('position_image') == 'left') ? 'mr-auto' : 'ml-auto'?>">
          <h2 class="large"><?=get_field('number')?></h2>
          <h2 class="font-weight-bold"><?=get_field('heading')?></h2>
          <?=get_field('description')?>
          <?php if (get_field('link_url')) {?>
          <a class="text-decoration-none text-uppercase small font-Semibold" href="<?=get_field('link_url')?>"><?=get_field('link_title')?><i class="fa fa-chevron-right ml-2"></i></a>
          <?php }?>
        </div>
      </div>
  </div>
  </div>
  <?php }?>

  <div class="spacer"></div>
</section>