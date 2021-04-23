{{-- heading
subheading
button
image --}}
@php
$heading = get_sub_field('heading');
$subheading = get_sub_field('subheading');
$button = get_sub_field('button');
$image = get_sub_field('image');
$is_img_left = get_sub_field('is_img_left');
$image = get_sub_field('image');
$has_background_color = get_sub_field('has_background_color');
$default_color = get_sub_field('default_color');
$color_picker = get_sub_field('color_picker');
@endphp

<section class="image_content relative w-screen  bg-grey-lightest py-20">
  <div class="container flex">

    {!! wp_get_attachment_image($image, "large", "", ["class" => "w-full md:w-1/2","alt"=>"Heading
    image"])
    !!}

    <div class="text_button__content text-center flex flex-col justify-center w-full md:w-1/2 px-12">
      <h1 class="text-black font-souvenir text-h4 sm:text-h4 md:text-h3 lg:text-h2 font-medium leading-normal">
        {{ $heading }}</h1>
      <h2 class="text-black font-roboto text-base font-normal mt-6 leading-loose">{{ $subheading }}</h2>
      <a class="btn mt-8" href="{{ $button['url'] }}" target="{{ $button['target'] }}">{{ $button['title'] }}</a>
    </div>
  </div>
</section>