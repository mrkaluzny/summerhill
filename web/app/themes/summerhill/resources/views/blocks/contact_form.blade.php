@php
$shortcode = get_sub_field('shortcode');
@endphp

<section class="container">
  <div class="contact-form form-wrapper">
    @include('components.FormMessage')
    {!! do_shortcode(get_sub_field('shortcode')) !!}
  </div>
</section>
