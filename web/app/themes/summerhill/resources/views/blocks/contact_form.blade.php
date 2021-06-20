@php
$shortcode = get_sub_field('shortcode');
@endphp

<section class="contact-form">
  <div class="container relative overflow-hidden">
    {!! do_shortcode(get_sub_field('shortcode')) !!}
    @include('components.FormMessage')
  </div>
</section>
