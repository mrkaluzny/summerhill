@php
$title = get_sub_field('title');
$raw_testimonials = get_sub_field('testimonials');
$testimonials = App::testimonials($raw_testimonials);

@endphp

<section class="testimonials overflow-hidden py-16">
  <div class="container">
    <h2 class="text-center">{{ $title }}</h2>

    <div>
      <span class="arrow arrow--left" id="leftArrow">
        @include('icons.chevron')
      </span>
      <div class="testimonials__track" id="track">

        @foreach ($testimonials as $key => $testimonial)
        <div class="testimonials__track__testimonial @if ($key==0) active @endif">
          @if ($testimonial['testimonial'])
          <div>{!! $testimonial['testimonial'] !!}</div>
          @endif
          @if ($testimonial['author'])
          <span
            class="mt-12 text-blue text-sm font-extrabold font-roboto font-main block text-center">{{ $testimonial['author'] }}</span>
          @endif
        </div>
        @endforeach

      </div>
      <span class="arrow arrow--right" id="rightArrow">
        @include('icons.chevron')
      </span>

    </div>

    <div id="testimonials__dots" class="mt-4 lg:mt-8 mx-auto flex justify-center">
      @foreach ($testimonials as $key => $item)
      <span class="testimonials__dot  {{$key==0 ? 'active' : ''}}" data-key="{{ $key }}"></span>
      @endforeach
    </div>
  </div>
</section>