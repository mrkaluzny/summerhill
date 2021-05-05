@php
$size = get_sub_field('size');
$image = get_sub_field('image');
$content = get_sub_field('content');
$button = get_sub_field('button');
@endphp

<section
  class="hero w-full relative flex justify-center items-center {{ $size === 'small' ? 'hero--sub-page p-0' : '' }}">

  {!! wp_get_attachment_image($image, 'full_hd', '', [
  'class' => 'absolute w-full h-full',
  'style' => 'object-fit: cover',
  ]) !!}

  <div class="hero__overlay"></div>

  <div class="z-10 text-center max-w-lg mx-auto">
    @if($content)
    <div class="text-white">{!! $content !!}</div>
    @endif

    @if ($button)
    <a class="btn mt-8" href="{{ $button['url'] }}" target="{{ $button['target'] }}">{{ $button['title'] }}</a>
    @endif
  </div>

</section>