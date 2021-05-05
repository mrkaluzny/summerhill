@php
$content = get_sub_field('content');
$button = get_sub_field('button');

$has_custom_programs = get_sub_field('has_custom_programs');

$bg = get_sub_field('background_color');

if ($has_custom_programs) {
$programs_ids = get_sub_field('programs');
$programs = App::custom_programs($programs_ids);
} else {
$programs = App::default_programs();
}

@endphp


<section class="programs">
  <div class="container">
    <div class="programs__wrapper bg-{{$bg}}">
      <div class="flex flex-col md:pr-24">
        <div>
          {!! $content !!}
        </div>

        @if ($button)
        <a class="btn btn--secondary mt-8" href="{{ $button['url'] }}"
          target="{{ $button['target'] }}">{{ $button['title'] }}</a>
        @endif
      </div>

      <ul class="programs__circles">
        @foreach ($programs as $program)
        <li class="{{ $program['post_id']===get_the_ID() ? 'hidden' : 'block'}}"><a
            style="--bg-color:{{$program['color']}}26; --border-color:{{$program['color']}}7F"
            href=" {{ $program['slug'] }}">{{ $program['name'] }}</a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</section>