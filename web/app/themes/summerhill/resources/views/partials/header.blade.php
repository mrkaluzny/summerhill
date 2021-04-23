<header class="header bg-white z-40">
  <div class="container-lg flex justify-between items-center py-5">
    @php echo get_custom_logo(); @endphp

    <nav class="header__nav hidden xl:block">
      @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>

    <nav class="header__mobile flex xl:hidden justify-center items-center absolute w-screen h-screen bg-white">
      @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>

    <button class="hamburger outline-none xl:hidden" id="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </button>

  </div>
</header>