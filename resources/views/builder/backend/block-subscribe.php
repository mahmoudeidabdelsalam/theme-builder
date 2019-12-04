<?php
/**
 * Block Name: Block Subscribe

 * This is the template that displays the Block Subscribe.
 */

// create id attribute for specific styling
$id = 'subscribe' . $block['id'];
?>
<blockquote id="<?php echo $id ?>">
<section class="block-subscribe" data-aos="fade" data-aos-duration="500">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-12 offset-md-1">
            <h2 class="large font-weight-bold mb-md-5 mb-sm-2"><?php echo get_field('heading_subscribe')?></h2>
            <h2 class="mb-md-5 mb-sm-"><?php echo get_field('description_subscribe')?></h2>
            <!-- Begin Mailchimp Signup Form -->
            <?php dynamic_sidebar('sidebar-subscribe') ?>
            <!--End Mailchimp Signup Form-->
        </div>
    </div>
</div>
<div class="spacer"></div>
</section>
<section class="block-subscribe">
    <div class="row">
        <div class="col-md-6 col-12 offset-md-1 m-sm-0">
            <h2 class="large mb-3"><?php echo get_field('heading_subscribe') ?></h2>
            <h3 class="mb-3"><?php echo get_field('description_subscribe') ?></h3>
            <!-- Begin Mailchimp Signup Form -->
            <?php dynamic_sidebar('sidebar-subscribe') ?>
            <!--End Mailchimp Signup Form-->
        </div>
    </div>
</section>
</blockquote>
<style>
#<?php echo $id; ?>  h2 {
  font-family: Graphik;
    color: #000000;
    font-size: 16px;
}
#<?php echo $id; ?>  h2.large {
  font-family: Graphik;
    color: #000000;
    font-size: 18px;
}
#<?php echo $id; ?> label {
    font-size: 12px;
}
#<?php echo $id; ?> input.form-control {
    padding: 0;
    border: none;
    border-bottom: 1px solid #000;
    border-radius: 0;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
#<?php echo $id; ?> input.form-control:focus {
    border-bottom: 1px solid #508fcc;
    box-shadow: 0 1px 0 0 #508fcc;
}

#<?php echo $id; ?> .clear {
    bottom: 18px;
    right: 0;
}
</style>


