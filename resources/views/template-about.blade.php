{{--
  Template Name: About Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.top-menu-about')
    @include('partials.content-page')
    @include('partials.bottom-menu-about')
  @endwhile
@endsection
