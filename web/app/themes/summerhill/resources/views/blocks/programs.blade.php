@php
$title = get_sub_field('title');
$text = get_sub_field('text');
$button = get_sub_field('button');

$has_custom_programs = get_sub_field('has_custom_programs');

$has_background_color = get_sub_field('has_background_color');
$default_color = get_sub_field('default_color');
$color_picker = get_sub_field('color_picker');

if($has_custom_programs) {
$programs_ids = get_sub_field('programs');
$programs = App::custom_programs($programs_ids);
} else {
$programs = App::default_programs();
}

@endphp


<section class="programs overflow-hidden w-full">
  <div
    class="programs__wrapper flex flex-wrap lg:flex-no-wrap container my-6 sm:my-12 md:mt-16 py-16 md:py-10 lg:py-12 xl:py-16 @if($has_background_color && $default_color) bg-grey-lightest @endif">
    <div class=" w-full lg:w-1/2  xl:pr-16 text-center lg:text-left">
      <h2 class=" text-h3 md:text-h2 text-black font-souvenir leading-normal">
        {{ $title }}
      </h2>
      <div class="mt-4 text-base text-grey-darkest leading-loose font-roboto">{{ $text }}</div>

      @if($button)
      <a class="btn2 mt-8 mx-auto md:mx-0 text-center" href="{{ $button['url'] }}"
        target="{{ $button['target'] }}">{{ $button['title'] }}</a>
      @endif
    </div>

    <div
      class="programs__circles list-reset flex ml-auto w-full justify-between lg:justify-end lg:w-2/5 xl:w-1/2 mt-12 lg:mt-0">
      @foreach ($programs as $program)
      <li class="@if($program['post_id'] === get_the_ID()) active @endif"><a href="{{ $program['slug'] }}"
          class="text-black font-souvenir text-xs mobile:text-sm sm:text-lg md:text-xs lg:text-base leading-normal text-center px-5 flex no-underline absolute flex-col justify-center items-center">{{ $program['name'] }}</a>
      </li>
      @endforeach
    </div>
  </div>
  </div>
</section>