@php
$images = get_sub_field('images');
$title = get_sub_field('title');
$content = get_sub_field('content');

$has_background_color = get_sub_field('has_background_color');
$default_color = get_sub_field('default_color');
$color_picker = get_sub_field('color_picker');
@endphp

<section
  class="images_side_by_side py-8 md:py-16 w-full @if($has_background_color && $default_color) bg-grey-lightest @endif"
  @if($has_background_color && !$default_color) style="background-color: {{ $color_picker }}" @endif>
  <div class="container flex flex-col">
    <div class="images_side_by_side__length--{{ count($images) }} flex flex-col mobile:flex-row justify-between">
      @foreach ($images as $image)
      {!! wp_get_attachment_image($image['image'], "large") !!}
      @endforeach
    </div>

    <div class="flex flex-col md:flex-row mt-8 sm:mt-12 md:mt-16 xl:mt-20">
      <h5
        class="w-full md:w-1/2 md:pr-4 text-h6 md:text-h5 leading-average text-center md:text-left text-black font-souvenir">
        {{ $title }}</h5>
      <div
        class="w-full mt-4 md:mt-0 md:w-1/2 md:pl-4 text-sm md:text-base text-center md:text-left font-robot text-grey-darkest font-normal leading-loose">
        {!!
        $content !!}</div>
    </div>
  </div>

</section>