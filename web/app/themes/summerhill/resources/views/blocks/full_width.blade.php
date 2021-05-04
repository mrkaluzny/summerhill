@php
$content = get_sub_field('content');
$button = get_sub_field('button');
$bg = get_sub_field('background');
$width = get_sub_field('width');

$innerClass = $width === 'max-w-lg' ? 'fw fw--narrow' : 'fw fw--wide';

@endphp

<section class="{{ $bg }} py-24">
  <div class="container">
    <div class="{{ $innerClass }}">
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
