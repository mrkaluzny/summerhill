@php
$heading = get_sub_field('heading');
$raw_testimonials = get_sub_field('testimonials');
$testimonials = App::testimonials($raw_testimonials);

@endphp

<section class="testimonials">
  <div class="container">
    <h2>{{ $heading }}</h2>

    <div class="testimonials__wrapper">
      <span class="testimonials__arrow__left absolute cursor-pointer" id="leftArrow">
        PREV</span>
      <div class="testimonials__track__wrapper">
        <div class="testimonials__track" id="track">
          @foreach ($testimonials as $key => $testimonial)
          <div
            class="testimonials__track__testimonial @if($key == 0) active @endif absolute bg-grey-lightest min-w-full">
            @if($testimonial['testimonial'])
            <div>{!! $testimonial['testimonial'] !!}</div>
            @endif
            @if($testimonial['author'])
            <span>{{ $testimonial['author'] }}</span>
            @endif
          </div>
          @endforeach
        </div>
      </div>

      <span class="testimonials__arrow__right absolute cursor-pointer" id="rightArrow">NEXT</span>
    </div>

    <div class="testimonials__navi">
      @foreach ($testimonials as $key => $item)
      <span>{{ $key }}</span>
      @endforeach
    </div>
  </div>
</section>