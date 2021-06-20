@php
$location = get_sub_field('location');
@endphp

<section class="map">
  <div id="map">
    <div class="marker" data-lng="{{ $location['lng'] }}" data-lat="{{ $location['lat'] }}"
      data-icon="{{ get_template_directory_uri() }}"></div>
  </div>
  <div class="map__card">
    <div class="font-heading text-h5 md:text-h4 text-center mb-8">Our Location</div>
    <div class="map__card__content">
      @include('icons.map-pin')
      <p class="text-base leading-loose">
        {{ get_sub_field('map_card') }}
      </p>
    </div>
    <div class="map__card__button">
      <a href="https://www.google.com/maps/dir/?api=1&destination={{ $location['lat'] }},{{ $location['lng'] }}"
        class="btn w-full" target="_blank">Get Directions</a>
    </div>
  </div>
</section>
