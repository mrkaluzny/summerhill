@php
$is_on_subpage = get_sub_field('is_on_subpage');
$image = get_sub_field('image');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$button = get_sub_field('button');
@endphp

<section class="hero w-full @if ($is_on_subpage) hero--sub_page p-0 @endif relative flex justify-center items-center">

  {!! wp_get_attachment_image($image, 'large', '', [
    'class' => 'absolute w-full h-full',
    'alt' => "hero
  image",
    'style' => 'object-fit: cover',
]) !!}

  <div class="hero__overlay w-full h-full bg-black-darkest absolute"></div>

  <div class="hero__content text-center  w-3/4 xxl:w-3/5">
    @if ($title)
      <h1 class="text-white font-heading text-h2 sm:text-h3 md:text-h2 lg:text-h1 font-medium leading-normal">
        {{ $title }}</h1>
    @endif
    @if ($subtitle)
      <h2 class="text-white font-main text-base font-normal mt-6 leading-loose">{{ $subtitle }}</h2>
    @endif
    @if ($button)
      <a class="btn mt-8" href="{{ $button['url'] }}" target="{{ $button['target'] }}">{{ $button['title'] }}</a>
    @endif
  </div>

</section>
