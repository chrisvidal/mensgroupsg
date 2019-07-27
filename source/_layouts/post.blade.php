@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->title }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->description }}" />
@endpush

<?php
    $page->layout = "post";
?>

@section('body')

<section class="section intro section--full _text-on-black">
    {{-- <div class="intro__image"></div> --}}
    <div class="section__content">
        <div class="g">
            <div class="g-item g-item--lg push-top--x-large">

                @if ($page->cover_image)
                    <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-2">
                @endif

                <h2 class="h2">{{ $page->title }}</h2>

                <p class="description push-top--large"><small>{{ $page->author }} ~ {{ date('F j, Y', $page->date) }}</small></p>

                @if ($page->categories)
                <small>[
                    @foreach ($page->categories as $i => $category)
                        <a
                            href="{{ '/articles/categories/' . $category }}"
                            title="View articles in {{ $category }}"
                            class="inline-block bg-grey-light hover:bg-blue-lighter leading-loose tracking-wide text-grey-darkest uppercase text-xs font-semibold rounded mr-4 px-3 pt-px"
                        >{{ $category }}</a>
                    @endforeach
                    ]</small>
                @endif

                <div class="image-content__copy push-top--large" v-pre>
                    @yield('content')
                </div>

                {{-- <nav class="flex justify-between text-sm md:text-base">
                    <div>
                        @if ($next = $page->getNext())
                            <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                                &LeftArrow; {{ $next->title }}
                            </a>
                        @endif
                    </div>

                    <div>
                        @if ($previous = $page->getPrevious())
                            <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                                {{ $previous->title }} &RightArrow;
                            </a>
                        @endif
                    </div>
                </nav> --}}

            </div>
        </div>
    </div>
</section>
@endsection
