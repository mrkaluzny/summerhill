<header class="header fixed bg-white z-40 w-full">
  <div class="header__wrapper container-lg sticky flex justify-between items-center py-5">

    <a class="z-40" href="/">@include('icons.logo', ['color' => "#0B7EAF"])</a>

    <nav class="header__nav hidden xl:block">
      @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>

    <nav class="header__mobile flex xl:hidden justify-center items-center absolute w-screen h-screen bg-white pr-8">
      <div class="container">
        @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </div>
    </nav>

    <button class="hamburger outline-none xl:hidden" id="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
</header>