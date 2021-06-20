@php
$shortcode = get_field('cf7_shortcode', 'option');
@endphp

<div class="form-addon">
  <button class="form-addon__button">
    <span class="form-addon__button__icon"></span>
  </button>
  <div class="form-addon__form">
    <header class="form-addon__header">
      <h2 class="form-addon__header__title">{{ the_field('instamessage_title', 'option') }}</h2>
      @include('icons.chevron')
    </header>
    <div class="form-wrapper">
      @include('components.FormMessage')
      <p>{{ the_field('instamessage_content', 'option') }}</p>
      @if ($shortcode)
        <div class="form-addon__content">
          {!! do_shortcode($shortcode) !!}
        </div>
      @endif
    </div>
  </div>
</div>
