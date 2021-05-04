@php
$heading = get_sub_field('heading');
$raw_testimonials = get_sub_field('testimonials');
$testimonials = App::testimonials($raw_testimonials);

@endphp

<section class="testimonials overflow-hidden w-full">
  <div class="container py-16 text-center">
    <h2 class="text-h2 text-black font-heading text-center">{{ $heading }}</h2>

    <div class="w-full">
      <span class="testimonials__arrow__left absolute cursor-pointer hidden lg:block" id="leftArrow">
        @include('icons.chevron')
      </span>
      <div
        class="testimonials__track relative flex flex-no-wrap items-center lg:bg-grey-lightest md:mt-12 lg:w-2/3 xxl:w-full mx-auto"
        id="track">

        @foreach ($testimonials as $key => $testimonial)
          <div
            class="testimonials__track__testimonial bg-grey-lightest relative lg:absolute lg:bg-transparent min-w-full px-4 md:px-12 lg:px-16 xl:px-24 xxl:px-32 py-12 md:py-24 lg:py-0 mr-20 lg:mr-0  mt-4 md:mt-0 @if ($key==0) active @endif">
            @if ($testimonial['testimonial'])
              <div>{!! $testimonial['testimonial'] !!}</div>
            @endif
            @if ($testimonial['author'])
              <span
                class="mt-12 text-blue text-sm font-extrabold  font-main block text-center">{{ $testimonial['author'] }}</span>
            @endif
          </div>
        @endforeach

      </div>
      <span class="testimonials__arrow__right absolute cursor-pointer hidden lg:block" id="rightArrow">
        @include('icons.chevron')
      </span>

    </div>

    <div id="testimonials__dot" class="mt-4 lg:mt-8 mx-auto inline-flex">
      @foreach ($testimonials as $key => $item)
        <span
          class="testimonials__dot text-xs h-3 w-3 block mx-1 rounded-full border-blue border-1 cursor-pointer @if ($key==0) active @endif" data-key="{{ $key }}"></span>
      @endforeach
    </div>
  </div>
</section>
