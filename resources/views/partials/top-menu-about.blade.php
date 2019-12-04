<section class="top-menu">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-11 offset-md-1 col-12">
        <div class="dropdown">
            <a  class="dropdown-toggle font-Semibold"   data-toggle="modal" data-target="#menu">
                <?= get_the_title() ?>
              </a>
          </div>
                
      {{-- modal --}}
      <div class="modal fade" id="menu" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-body">
                  @if (has_nav_menu('about_navigation'))
                  {!! wp_nav_menu(['theme_location' => 'about_navigation', 'container' => false, 'menu_class' => 'navbar-nav ml-auto mr-md-5', 'walker' => new NavWalker()]) !!}
                @endif        
              </div>
            </div>
          </div>
        </div>
      {{-- /modal --}}
    </div>  
  </div>
  <div class="spcer-smaall"></div>
</section>