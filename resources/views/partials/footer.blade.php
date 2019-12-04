<footer>
  <div class="container-fluid">
    <!-- menu footer -->
    <div class="row">
      <!-- menu -->
      <div class="col-md-12">
        @if (has_nav_menu('footer_navigation'))
        {!! wp_nav_menu(['theme_location' => 'footer_navigation' , 'container' => false,'menu_class' => 'p-0', 'walker'
        => new NavWalker()])
        !!}
        @endif
      </div>
      <!-- menu -->
    </div>
  </div>
  <!-- menu footer -->
  <!-- Copyright footer -->
  <div class="bg-black">
    <div class="container-fluid">
      <div class="row d-flex justify-content-between align-items-center footer-copyright" >
        <div class="col-md-6">
          @if (has_nav_menu('copyright_navigation'))
          {!! wp_nav_menu(['theme_location' => 'copyright_navigation' , 'container' => false, 'menu_class' => 'p-0
          m-md-0', 'walker' => new NavWalker()])
          !!}
          @endif
        </div>
        <div class="col-md-6">
          <p class="m-md-0 text-white text-md-right">{{ get_field('copyright', "option") }}</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Copyright footer -->
</footer>