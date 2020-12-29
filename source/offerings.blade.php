---
extends: _layouts.master
title: Offerings
layout: blog
layouttype: markdown
pagination:
    collection: offerings
    perPage: 100
---
@push('meta')
    <meta property="og:title" content="{{ $page->siteName }} Offerings" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="The list of events for {{ $page->siteName }}" />
@endpush

@section('body')
    <section class="section intro section--full">
        <div class="section__content">
            <div class="g">
                <div class="g-item g-item--lg">
                    <h1 class="h1">Offerings</h1>
                </div>
            </div>
            <div class="g">
                <div class="g-item g-item--lg push-top--x-large">
                @foreach ($pagination->items as $offering)
                    <article class="flex flex-col mb-4">
                        <small class="text-grey-darker font-medium my-2">{{ date('F j, Y', $offering->event_date) }}</small>
                        <p class="description">{!! $offering->description !!}</p>
                        <div class="image-content__copy push-top--large" v-pre>
                            {!! $offering !!}
                        </div>
                        <hr class="border-b push-bottom push-top">
                    </article>
                @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
