@php
$shortcode = get_sub_field('shortcode');
@endphp

<section class="contact-form">
  <div class="container">
    @include('components.FormMessage')

    {!! do_shortcode(get_sub_field('shortcode')) !!}

  </div>
</section>
