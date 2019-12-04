<section class="bottom-menu">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9 col-12">
          @if (has_nav_menu('about_navigation'))
          {!! wp_nav_menu(['theme_location' => 'about_navigation', 'container' => false, 'menu_class' => 'list-inline d-flex flex-wrap', 'walker' => new NavWalker()]) !!}
          @endif        
    </div>  
  </div>
  <div class="spacer"></div>
</section>