@extends('layouts.app')

@section('content')
@while(have_posts())
@php the_post() @endphp
@include('partials.content-'.get_post_type())

@include('blocks._init')
@include('partials.content-page')
@endwhile
@endsection