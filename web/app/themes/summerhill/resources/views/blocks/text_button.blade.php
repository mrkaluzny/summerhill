@php
$heading = get_sub_field('heading');
$subheading = get_sub_field('subheading');
$button = get_sub_field('button');

$is_heading_big = get_sub_field('is_heading_big');
$has_background_color = get_sub_field('has_background_color');
$default_color = get_sub_field('default_color');
$color_picker = get_sub_field('color_picker');
$width = get_sub_field('container_width');

@endphp

<section class="relative w-full flex justify-center items-center">
  <div class="text_button @if ($has_background_color && $default_color) bg-grey-lightest @endif" @if ($has_background_color && !$default_color) style="background-color: {{ $color_picker }}" @endif>
    <div class="text_button__content container text-center w-5/6 xl:{{ $width }}">
      @if ($heading)
        <h2 class="text-black font-heading @if ($is_heading_big) text-h4 sm:text-h4 md:text-h3 lg:text-h2 @else text-lg md:text-h6 lg:text-h5 @endif
          font-medium leading-average">
          {!! $heading !!}
        </h2>
      @endif
      @if ($subheading)
        <h3 class="text-grey-darkest font-main text-sm md:text-base font-normal mt-6 leading-loose">
          {{ $subheading }}
        </h3>
      @endif
      @if ($button)
        <a class="btn2 mt-8" href="{{ $button['url'] }}"
          target="{{ $button['target'] }}">{{ $button['title'] }}</a>
      @endif
    </div>
  </div>
</section>
