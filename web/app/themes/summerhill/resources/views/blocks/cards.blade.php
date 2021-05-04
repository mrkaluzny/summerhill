@php
$introduction_text = get_sub_field('introduction_text');
$cards = get_sub_field('cards');
$button_type = get_sub_field('button_type');
$phone_number = get_sub_field('phone_number');
$email_address = get_sub_field('email_address');
$button_value = get_sub_field('button_value');
$link = get_sub_field('link');
@endphp

<section class="cards w-full">
  <div class="container pt-16 pb-10 @if ($introduction_text) sm:pt-24 sm:pb-16 @else sm:py-16 @endif flex flex-col">
    @if ($introduction_text)
      <h2
        class="text-black font-heading font-medium leading-average text-center text-lg sm:text-h6 md:text-h5 w-full sm:w-3/4 mx-auto">
        {{ $introduction_text }}
      </h2>
    @endif

    <div class="mt-0 @if ($introduction_text) sm:mt-16 md:mt-24 @endif
      flex flex-col md:flex-row md:justify-between">
      @foreach ($cards as $card)
        <div
          class="cards__card flex flex-col items-center bg-grey-lightest text-center pt-12 pb-8 px-8 sm:pt-16 sm:pb-10 sm:px-16 mt-8 md:mt-0">
          {!! wp_get_attachment_image($card['icon']) !!}
          @if ($card['title'])
            <h5 class="font-heading text-h5 font-normal leading-average text-black md:mt-8">{{ $card['title'] }}</h5>
          @endif
          @if ($card['text'])
            <div class="mt-4 @if ($card['title']) md:mt-4 @else md:mt-10 @endif text-black text-sm md:text-base font-main font-normal md:leading-loose leading-medium">
              {!! $card['text'] !!}</div>
          @endif
        </div>
      @endforeach
    </div>

    @if ($button_type === 'call_us')
      <a class="btn2 mt-6 sm:mt-10 mx-auto" href="tel:{{ $phone_number }}">{{ $button_value }}</a>
    @elseif($button_type === 'mail_us')
      <a class="btn2 mt-6 sm:mt-10 mx-auto" href="mailto:{{ $email_address }}">{{ $button_value }}</a>
    @elseif($link)
      <a class="btn2 mt-6 sm:mt-10 mx-auto" href="{{ $link['url'] }}"
        target="{{ $link['target'] }}">{{ $link['title'] }}</a>
    @endif
  </div>
</section>
