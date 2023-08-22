@extends('_layouts.main')

@php
    $page->type = 'page';
@endphp

@section('body')
    @if ($page->cover_image)
        <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-2">
    @endif

    <h1 class="leading-none mb-2">{{ $page->title }}</h1>

    @if($page->date)
    <p class="text-gray-700 text-md md:mt-0"><em>Last Updated: {{ date('F j, Y', $page->date) }}</em></p>
    @endif

    <hr class="border-b my-6">

    <div class="border-b border-blue-200 mb-10 pb-4" v-pre>
        @yield('content')
    </div>
@endsection
