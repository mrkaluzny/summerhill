@php
$heading = get_sub_field('heading');
$subheading = get_sub_field('subheading');
$button = get_sub_field('button');
@endphp

<section class="text_button relative w-screen flex justify-center items-center">
  <div class="text_button__content text-center  w-3/4 xxl:w-2/5">
    <h1 class="text-black font-souvenir text-h4 sm:text-h4 md:text-h3 lg:text-h2 font-medium leading-normal">
      {{ $heading }}</h1>
    <h2 class="text-black font-roboto text-base font-normal mt-6 leading-loose">{{ $subheading }}</h2>
    <a class="btn mt-8" href="{{ $button['url'] }}" target="{{ $button['target'] }}">{{ $button['title'] }}</a>
  </div>
</section>