@php
$content = get_sub_field('content');
$image = get_sub_field('image');
$items = get_sub_field('items');
$button = get_sub_field('button');

$proportions = explode('_', get_sub_field('proportions'));
$bg = get_sub_field('background_color');
$is_reversed = get_sub_field('is_reversed');
$contained_img = get_sub_field('contained_image');
@endphp

<section class="image_content {{ $bg }} py-12 md:py-20">
  <div class="container">
    <div class="flex flex-col-reverse {{ $is_reversed ? 'md:flex-row-reverse' : 'md:flex-row'}}">

      <div
        class="flex flex-col justify-center md:{{ $proportions[1] }} {{ $is_reversed ? 'md:pl-8 xl:pl-16' : 'md:pr-8 xl:pr-16'}}">

        <div class="flex flex-col mt-8 md:mt-0">
          {!! $content !!}

          @if ($items)
          <div class="mt-4 flex flex-col">
            @foreach ($items as $item)
            <div class="mt-4 inline-flex items-center">
              <span class="bg-grey-lightest p-3 rounded mr-3 w-12 h-12 text-primary">

                @if (strpos($item['link']['url'], 'tel:') === 0)
                @include('icons.phone')
                @elseif (strpos($item['link']['url'], 'mailto:') === 0)

                @include('icons.email')
                @endif

              </span>
              @if ($item['link']['url'] !== '#')
              <a class="no-underline text-grey-darkest text-lg" href="{{ $item['link']['url'] }}">
                {{ $item['link']['title'] }}
              </a>
              @else
              <span class="no-underline text-grey-darkest text-lg">
                {{ $item['link']['title'] }}
              </span>
              @endif

            </div>
            @endforeach
          </div>
          @endif
        </div>
        @if ($button)
        <a class="btn btn--secondary mt-8" href="{{ $button['url'] }}"
          target="{{ $button['target'] }}">{{ $button['title'] }}</a>
        @endif
      </div>

      <div
        class="w-full md:{{ $proportions[0] }} {{ $is_reversed ? 'md:pr-8 xl:pr-16' : 'md:pl-8 xl:pl-16'}} {{ $contained_img ? 'is-contained' : ''}}">
        {!! wp_get_attachment_image($image, 'size_medium') !!}
      </div>

    </div>
  </div>
</section>