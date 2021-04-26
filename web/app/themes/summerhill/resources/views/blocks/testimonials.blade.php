@php
$heading = get_sub_field('heading');
$raw_testimonials = get_sub_field('testimonials');
$testimonials = App::testimonials($raw_testimonials);

@endphp

<section class="testimonials">
  <div class="container">
    <h2>{{ $heading }}</h2>

    <div class="testimonials__wrapper">
      <span class="testimonials__arrow__left"></span>


      @foreach ($testimonials as $testimonial)
      <div class="testimonials__testimonial bg-grey-lightest">
        @if($testimonial['testimonial'])
        <div>{!! $testimonial['testimonial'] !!}</div>
        @endif
        @if($testimonial['author'])
        <span>{{ $testimonial['author'] }}</span>
        @endif
      </div>
      @endforeach

      <span class="testimonials__arrow__left"></span>
    </div>

    <div class="testimonials__navi">
      @foreach ($testimonials as $key => $item)
      <span>{{ $key }}</span>
      @endforeach
    </div>
  </div>
</section>