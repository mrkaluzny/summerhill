@php
$images = get_sub_field('images');
$title = get_sub_field('title');
$content = get_sub_field('content');

$bg = get_sub_field('background_color');
$default_color = get_sub_field('default_color');
$color_picker = get_sub_field('color_picker');
@endphp

<section class="images_side_by_side py-8 md:py-16 w-full bg-{{ $bg }}">
  <div class="container">
    <div class="flex flex-col">
      <div class="images_side_by_side__length--{{ count($images) }} flex flex-col mobile:flex-row justify-between">
        @foreach ($images as $image)
        {!! wp_get_attachment_image($image['image'], 'size_medium') !!}
        @endforeach
      </div>

      <div class="flex flex-col md:flex-row mt-8 sm:mt-12 md:mt-16 xl:mt-20">
        <div class="w-full md:w-1/2 md:pr-4 text-black leading-average">
          {!! $title !!}</div>
        <div class="w-full mt-4 md:mt-0 md:w-1/2 md:pl-4 text-grey-darkest  leading-loose">
          {!! $content !!}</div>
      </div>
    </div>
  </div>
</section>