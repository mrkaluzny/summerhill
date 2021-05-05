@php
$introduce_text = get_sub_field('introduce_text');
$cards = get_sub_field('cards');
$button = get_sub_field('button');
@endphp

<section class="cards w-full">
  <div class="container">
    <div class="py-6 md:pt-16 md:pb-10 flex flex-col">
      <div class="mb-12">{!! $introduce_text !!}</div>

      <div class="mt-0 flex flex-col md:flex-row md:justify-between">
        @foreach ($cards as $card)
        <div
          class="cards__card flex flex-col items-center bg-grey-lightest text-center pt-12 pb-8 px-8 sm:pt-16 sm:pb-10 sm:px-16 mt-8 md:mt-0">
          {!! wp_get_attachment_image($card['icon']) !!}
          @if ($card['title'])
          <h5 class="font-heading text-h5 font-normal leading-average text-black md:mt-8">{{ $card['title'] }}</h5>
          @endif
          @if ($card['content'])
          <div
            class="mt-4 @if ($card['title']) md:mt-4 @else md:mt-10 @endif text-black text-sm md:text-base font-main font-normal md:leading-loose leading-medium">
            {!! $card['content'] !!}</div>
          @endif
        </div>
        @endforeach
      </div>

      @if($button)
      <a class="btn btn--secondary mt-6 sm:mt-10 mx-auto" target="{{ $button['target'] }}"
        href="{{ $button['url'] }}">{{ $button['title'] }}</a>
      @endif
    </div>
  </div>
</section>