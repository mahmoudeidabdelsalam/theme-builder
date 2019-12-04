<section class="block-subscribe" data-aos="fade" data-aos-duration="500">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-12 offset-md-1">
            <h2 class="large font-weight-bold mb-md-5 mb-sm-2"><?php echo get_field('heading_subscribe')?></h2>
            <h3 class="mb-3"><?php echo get_field('description_subscribe')?></h3>
            <!-- Begin Mailchimp Signup Form -->
            <?php dynamic_sidebar('sidebar-subscribe') ?>
            <!--End Mailchimp Signup Form-->
        </div>
    </div>
</div>
<div class="spacer"></div>
</section>