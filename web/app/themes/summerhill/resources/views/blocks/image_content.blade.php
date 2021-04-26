@php
$heading = get_sub_field('heading');
$heading_size = get_sub_field('heading_size');
$is_heading_bold = get_sub_field('is_heading_bold');
$subheading = get_sub_field('subheading');
$proportions = explode('_', get_sub_field('proportions'));


$image = get_sub_field('image');
$is_img_left = get_sub_field('is_img_left');
$image = get_sub_field('image');

$has_background_color = get_sub_field('has_background_color');
$default_color = get_sub_field('default_color');
$color_picker = get_sub_field('color_picker');

$row_under_text = get_sub_field('row_under_text');
$button = get_sub_field('button');
@endphp

<section class="image_content relative w-screen  @if($has_background_color && $default_color) bg-grey-lightest @endif"
  @if($has_background_color && !$default_color) style="background-color: {{ $color_picker }}" @endif>
  <div class="container flex flex-wrap md:flex-no-wrap w-5/6 md:w-full @if($is_img_left) flex-row-reverse @endif">

    <div
      class="image_content__content text-center md:text-left flex flex-col justify-center w-full mx-auto md:{{ $proportions[1] }} @if($is_img_left) md:pl-12 lg:pl-24 @else md:pr-12 lg:pr-32 @endif">
      <h2
        class="text-black font-souvenir @if($heading_size === 'h5') leading-average @elseif($heading_size === 'h2') leading-regular @else leading-medium @endif @if($is_heading_bold) font-bold @else font-normal @endif text-{{ $heading_size }}">
        {{ $heading }}
      </h2>
      <div class="text-grey-darkest flex flex-col font-roboto text-base font-normal mt-4 leading-loose">
        {!! $subheading !!}
        @if($row_under_text)
        <div class="mt-4 flex flex-col">
          @foreach ($row_under_text as $row)
          <div
            class="image_content__content__additional_row inline-flex items-center justify-center md:justify-start mt-4">
            <span class="bg-grey-lightest p-3 rounded mr-3 w-12 h-12">
              {!! wp_get_attachment_image($row['icon'])!!}
            </span>
            @switch($row['type'])
            @case('phone')
            <a class="no-underline text-grey-darkest text-lg"
              href="tel:{{ $row['phone_number'] }}">{{ $row['phone_number'] }}</a>
            @break
            @case('email')
            <a class="no-underline text-grey-darkest text-lg" href="mailto:{{ $row['email'] }}">{{ $row['email'] }}</a>
            @break
            @case('link')
            <a class="no-underline text-grey-darkest text-lg" href="{{ $row['link']['url'] }}"
              target="{{ $row['link']['target'] }}">{{ $row['link']['title'] }}</a>
            @break
            @case('text')
            <span class="text-grey-darkest text-lg">{{ $row['text'] }}</span>
            @break
            @endswitch
          </div>
          @endforeach
        </div>
        @endif
      </div>
      @if($button)
      <a class="btn2 mt-8 mx-auto md:mx-0" href="{{ $button['url'] }}"
        target="{{ $button['target'] }}">{{ $button['title'] }}</a>
      @endif
    </div>

    <div class="w-full mx-auto mt-8
    md:mt-0 md:{{ $proportions[0] }}">
      {!! wp_get_attachment_image($image, "large", "", ["class" => "w-full h-full", "alt"=>"Heading image"])!!}

    </div>

  </div>
</section>