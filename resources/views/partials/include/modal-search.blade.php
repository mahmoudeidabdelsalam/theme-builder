<!-- Popup it self -->
<div id="search" class="white-popup mfp-with-anim mfp-hide search-box">
  <div class="search-header banner">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="logos mr-auto">
          <a class="navbar-brand" href="{{ home_url('/') }}" title="{{ get_bloginfo('name') }}">
            <img class="img-fluid" src="@if(get_field('website_logo', 'option')) {{ the_field('website_logo','option') }} @else {{ get_theme_file_uri().'/dist/images/logo.png' }} @endif" alt="{{ get_bloginfo('name', 'display') }}" title="{{ get_bloginfo('name') }}"/>
            <span class="sr-only"> {{ get_bloginfo('name') }} </span>
          </a>
        </div>
        <div class="nav-right">
            @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => false, 'menu_class' => 'navbar-nav ml-auto mr-md-5', 'walker' => new NavWalker()]) !!}
          @endif
  
          <div class="site-search inline-popups mr-md-5">
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
          </div>
          <a class="navbar-brand logo-created" href="{{ home_url('/') }}" title="{{ get_bloginfo('name') }}">
            <img class="img-fluid" src="@if(get_field('created_website_logo', 'option')) {{ the_field('created_website_logo','option') }} @else {{ get_theme_file_uri().'/dist/images/logo-created.png' }} @endif" alt="{{ get_bloginfo('name', 'display') }}" title="{{ get_bloginfo('name') }}"/>
            <span class="sr-only"> {{ get_bloginfo('name') }} </span>
          </a>
        </div>
      </nav>
    </div>
  </div>
  <div class="search-box slideInUp">
    <main class="main-wrap">
      <div class="container">
        <div class="row justify-content-start">
          <div class="col-md-12 col-sm-12 col-xs-12 m-auto">
            <form class="search-form" action="{{ bloginfo('url') }}">
              <div class="input-group col-12 p-0">
                <input id="autocomplete" class="search-input form-control" name="s" value="{{ get_search_query() }}" type="search" placeholder="{{ _e('type to search...','builder') }}" autocomplete="off" spellcheck="false" maxlength="100">
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>
