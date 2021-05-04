@php
$is_on_subpage = get_sub_field('is_on_subpage');
$image = get_sub_field('image');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$button = get_sub_field('button');
@endphp

<section
  class="hero w-full relative flex justify-center items-center {{ $is_on_subpage ? 'hero--sub-page p-0' : '' }}">

  {!! wp_get_attachment_image($image, 'full', '', [
    'class' => 'absolute w-full h-full',
    'style' => 'object-fit: cover',
]) !!}

  <div class="hero__overlay"></div>

  <div class="z-10 text-center max-w-lg mx-auto">
    @if ($title)
      <h1 class="text-white">
        {{ $title }}
      </h1>
    @endif
    @if ($subtitle)
      <h2 class="text-white font-main text-base font-normal mt-6 leading-loose">{{ $subtitle }}</h2>
    @endif
    @if ($button)
      <a class="btn mt-8" href="{{ $button['url'] }}" target="{{ $button['target'] }}">{{ $button['title'] }}</a>
    @endif
  </div>

</section>
