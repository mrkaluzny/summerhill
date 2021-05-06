@php
$phone_number = get_field('phone_number', 'options');
$email_address = get_field('email_address', 'options');
$city = get_field('city', 'options');
$place = get_field('place', 'options');
$facebook_link = get_field('facebook_link', 'options');
$twitter_link = get_field('twitter_link', 'options');
$school_name = get_field('school_name', 'options');
@endphp

<footer class="footer bg-blue-dark">
  <div class="container">
    <div class="footer__main">
      <div class="w-full lg:w-1/3 flex flex-col lg:pr-4 z-10">
        <a class="z-40 mx-auto lg:mx-0" href="{{ home_url('/') }}">
          @include('icons.logo-white')
          <div class="sr-only">Summerhill Day School</div>
        </a>
        @if ($phone_number)
        <div class="mt-8 inline-flex items-center mx-auto lg:mx-0">
          <span class="text-white">@include('icons.phone')</span>
          <a class="no-underline text-white font-main text-sm ml-2 font-medium"
            href="tel:{{ $phone_number }}">{{ $phone_number }}</a>
        </div>
        @endif
        @if ($email_address)
        <div class="mt-4 inline-flex items-center mx-auto lg:mx-0 ">
          <span class="text-white">@include('icons.email')</span>
          <a class="no-underline text-white font-main text-sm ml-2 font-medium"
            href="mailto:{{ $email_address }}">{{ $email_address }}</a>
        </div>
        @endif

        <div
          class="font-main opacity-75 text-white font-normal text-base mt-6 leading-loose flex flex-col mx-auto text-center lg:mx-0 lg:text-left z-10">
          @if ($city)
          <span>{{ $city }}</span>
          @endif

          @if ($place)
          <span>{{ $place }}</span>
          @endif
        </div>

        <div class="inline-flex mt-4 mx-auto lg:mx-0">
          @if ($facebook_link)
          <a href="{{ $facebook_link }}">
            @include('icons.facebook')
            <div class="sr-only">Summerhill Day School's Facebook</div>
          </a>
          @endif

          @if ($twitter_link)
          <a class="ml-4" href="{{ $twitter_link }}">
            @include('icons.twitter')
            <div class="sr-only">Summerhill Day School's Twitter</div>
          </a>
          @endif

        </div>

      </div>
      <div class="w-full md:w-4/5 mx-auto lg:w-2/3 flex sm:mt-12 mt-16 md:mt-16 lg:mt-0 z-10">
        @if (has_nav_menu('footer_menu'))
        {!! wp_nav_menu(['theme_location' => 'footer_menu', 'menu_class' => 'nav']) !!}
        @endif
      </div>
    </div>
    <div class="footer__below">
      <span class="text-xs font-medium font-main text-white">{{ date('Y') }} {{ $school_name }} All rights
        reserved.</span>
      <span class="text-xs font-normal font-main text-white opacity-75 mt-1">Designed and developed by <a
          class="no-underline text-white" href="https://cleancommit.io">CleanCommit</a></span>
    </div>

  </div>
  <span class="footer__twig">
    @include('icons.twig')
  </span>
</footer>