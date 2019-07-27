@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->title }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->description }}" />
@endpush

<?php
    $page->layout = "category";
?>

@section('body')
<section class="section intro section--full">
        <div class="section__content">
            <div class="g">
                <div class="g-item g-item--lg">

                    <h1 class="h1">{{ $page->title }}</h1>
                    <p class="blog__total">Total of {{ $page->posts($posts)->count() }} articles</p>

                    <div class="text-2xl border-b border-blue-lighter mb-6 pb-10">
                        @yield('content')
                    </div>
                </div>
                <div class="g-item g-item--lg push-top--large">

                    <div class="g-sub">

                        @foreach ($page->posts($posts) as $post)
                            <div class="g-sub-item">
                                <hr class="border-b push-bottom push-top">
                                @include('_components.post-preview-inline')

                                @if (! $loop->last)
                                    <hr class="w-full border-b mt-2 mb-6">
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        <div class="section__overlay" style="opacity: 0;">
        </div>
    </section>


@stop
