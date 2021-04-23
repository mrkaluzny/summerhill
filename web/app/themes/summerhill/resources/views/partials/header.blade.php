<header class="banner">
  <div class="container">

    @php echo get_custom_logo(); @endphp

    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>

{{-- <header class="header sticky z-40 max-w-full">
  @include('icons.header-wave')

  <div class="container flex justify-between items-center py-3 lg:py-5 bg-green-light">
    @php echo get_custom_logo(); @endphp

    <nav
      class="flex w-full md:w-auto flex-col my-auto pt-24 mr-0 ml-auto justify-center items-center absolute md:relative md:flex-row md:mt-0 md:my-0 md:pt-0">
      @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
    <a class="btn relative md:relative ml-auto mr-2 md:mr-0 md:ml-2 lg:ml-4" href="">Min Eskalite</a>

    <button class="hamburger relative flex flex-col items-center justify-around md:hidden">
      <span></span>
      <span></span>
    </button>
  </div>

  <div
    class="header__mobile block md:hidden absolute h-screen w-screen bg-green-light flex justify-center items-center">
    <div class="header__mobile__menu text-center">
      @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </div>
  </div>
</header> --}}