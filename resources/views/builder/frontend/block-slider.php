<section class="block-slider position-relative" data-aos="fade" data-aos-duration="500">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 col-12">
                <div id="silder" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                    <?php
                        if(get_field('source_data') == 'Custom') {
                        $counter = 0;
                        if (have_rows('repeat_images')):
                            while (have_rows('repeat_images')): the_row();
                                $image_slide = get_sub_field('image_slide');
                                ?>
                                    <div class="carousel-item mb-2 <?php if ($counter == 0) {echo "active";}?>">
                                        <figure class="figure w-100 h-100 position-relative" style="background-image: url(<?php echo $image_slide['url']; ?>)">
                                            <figcaption class="figure-caption position-absolute  bg-white bottom left w-100">
                                                <p class="my-2 mx-5 text-uppercase caption d-inline-block"><?php echo $image_slide['caption']; ?></p>
                                            </figcaption>
                                        </figure>
                                    </div>
                                <?php
                                $counter++;
                            endwhile;
                        endif;
                        } else {
                            $posts = get_field('post_relationship');
                            $counter = 0;
                            if( $posts ): ?>
                            <?php foreach( $posts as $post ):?>
                            <div class="carousel-item mb-2 <?php if ($counter == 0) {echo "active";}?>">
                                <figure class="figure w-100 h-100 position-relative" style="background-image: url(<?php echo Utilities::global_thumbnails($post->ID, 'full'); ?>)">
                                    <figcaption class="figure-caption position-absolute  bg-white bottom left w-100">
                                        <p class="my-2 mx-5 text-uppercase caption d-inline-block"><?php echo the_post_thumbnail_caption( $post->ID ) ?></p>
                                    </figcaption>
                                </figure>
                            </div>
                            <?php 
                            $counter ++;
                            endforeach; 
                            ?>
                            <?php 
                            endif;
                            }
                        ?>
                    </div>
                    <div class="row position-absolute w-100 arrow m-0">
                        <div class="col-md-6 col-12 p-0">
                            <a class="carousel-control-prev position-static d-inline-block text-gray-solid w-auto" href="#silder" role="button" data-slide="prev">
                                <span class="fa fa-chevron-left" aria-hidden="true"></span>
                            </a>
                            <a class="carousel-control-next position-static d-inline-block text-gray-solid w-auto ml-3" href="#silder" role="button" data-slide="next">
                                <span class="fa fa-chevron-right" aria-hidden="true"></span>
                            </a>
                            <?php
                            if(get_field('source_data') == 'Custom') {
                            if (have_rows('repeat_images')):
                                while (have_rows('repeat_images')): the_row();
                                ?>
                                <p class="ml-2 text-uppercase caption d-inline-block"><?php echo $image_slide['caption']; ?></p>
                                <?php
                                endwhile;
                            endif;
                        } 
                            ?>
                        </div>
                        <div class="col-md-6 col-12 text-md-right p-0">
                            <a class="text-decoration-none text-uppercase text-tiny font-weight-bold" href="<?= get_post_type_archive_link('project') ?>"><?php _e('our projects','builder');?><i class="fa fa-chevron-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="spacer"></div>
</section>