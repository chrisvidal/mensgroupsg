---
pagination:
    collection: posts
    perPage: 6
---
@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }} Blog" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="The list of blog posts for {{ $page->siteName }}" />
@endpush

@section('body')

<?php
    $publishedPosts = $posts->filter(function ($value, $key) use ($page) {
            return $value->published == true;
    });
?>
    <section class="section intro section--full">
        <div class="section__content">
            <div class="g">
                <div class="g-item g-item--lg">
                    <h1 class="h1">Blog</h1>
                    <p class="blog__total">Total of {{ $publishedPosts->count() }} posts</p>
                </div>
                <div class="g-item g-item--lg push-top--large">

                    <div class="g-sub">

                        @foreach ($pagination->items as $post)
                        <div class="g-sub-item">
                            <hr class="border-b push-bottom push-top">
                            @include('_components.post-preview-inline')
                        </div>
                        @endforeach

                    </div>
                </div>


                <div class="g-item push-top--large">

                    @if ($pagination->pages->count() > 1)
                        <nav class="flex text-base my-8">
                            @if ($previous = $pagination->previous)
                                <a
                                    href="{{ $previous }}"
                                    title="Previous Page"
                                    class="bg-grey-lighter hover:bg-grey-light rounded mr-3 px-5 py-3"
                                >&LeftArrow;</a>
                            @endif

                            @foreach ($pagination->pages as $pageNumber => $path)
                                <a
                                    href="{{ $path }}"
                                    title="Go to Page {{ $pageNumber }}"
                                    class="bg-grey-lighter hover:bg-grey-light text-blue-darker rounded mr-3 px-5 py-3 {{ $pagination->currentPage == $pageNumber ? 'text-blue-dark' : '' }}"
                                >{{ $pageNumber }}</a>
                            @endforeach

                            @if ($next = $pagination->next)
                                <a
                                    href="{{ $next }}"
                                    title="Next Page"
                                    class="bg-grey-lighter hover:bg-grey-light rounded mr-3 px-5 py-3"
                                >&RightArrow;</a>
                            @endif
                        </nav>
                    @endif

                </div>
            </div>
        </div>
        <div class="section__overlay" style="opacity: 0;">
        </div>
    </section>

@stop