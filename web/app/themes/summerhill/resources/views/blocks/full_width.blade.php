@php
$content = get_sub_field('content');
$button = get_sub_field('button');
$bg = get_sub_field('background_color');
$width = get_sub_field('width');

$innerClass = $width === 'max-w-lg' ? 'fw fw--narrow' : 'fw fw--wide';

@endphp

<section class="{{ $bg == 'grey-lightest' ? 'my-12' : 'my-0'}} overflow-hidden">
  <div class="container">
    <div class="full-width bg-{{ $bg }} {{ $innerClass }} py-24 relative">
      @if ($content)
      {!! $content !!}
      @endif
      @if ($button)
      <a class="btn btn--secondary mt-8" href="{{ $button['url'] }}"
        target="{{ $button['target'] }}">{{ $button['title'] }}</a>
      @endif
    </div>
  </div>
</section>