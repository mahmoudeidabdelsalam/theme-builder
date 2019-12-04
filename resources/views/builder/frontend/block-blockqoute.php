<section class="block-quote" data-aos="fade" data-aos-duration="500">
<div class="container-fluid">
    <div class="row <?=(get_field('where_to_view_the_quote') == 'Center') ? 'justify-content-center' : ''?>">
        <div class="<?=(get_field('where_to_view_the_quote') == 'Left') ? 'col-md-7 col-12 offset-md-1' : 'col-md-6 col-12'?>">
            <h2><?=get_field('quotation')?></h2>
        </div>
    </div>
</div>
<div class="spacer"></div>
</section>
