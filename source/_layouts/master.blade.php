<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->meta_description ?? $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->siteDescription }}" />

        <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        @stack('meta')

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>

    <body class="{{ $page->slug }} {{ $page->layout }} {{ $page->layouttype }}">

        <div id="app">

            <div class="site-container site-container--white site-container--hud-white site-container--hud-logo-white">

                <div class="site-container__content">

                    @yield('body')

                    @include('_components.footer')

                </div>

                <div class="site-container__background-outer">
                    <div class="site-container__background-inner">
                        <div class="site-container__background" style=""></div>
                    </div>
                </div>

                <div class="site-container__marque">
                    {{-- <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 108 216" xml:space="preserve" class="site-container__marque__svg" style="transform: translate3d(-88.8889vw, 0px, 0px); display: none;"><polygon fill="white" points="36,180 0,216 0,144 36,144 "></polygon> <rect fill="white" y="72" width="72" height="36"></rect> <polygon fill="white" points="108,0 72,36 72,72 108,36 "></polygon> <polygon fill="white" points="72,72 36,108 36,144 72,108 "></polygon></svg> --}}
                </div>

                <div class="site-navigation tr-fade-enter-active">
                    @include('_components.logo')
                    @include('_nav.menu-responsive', ['items' => $page->navigation])
                    @include('_nav.menu', ['items' => $page->navigation])
                </div>

            </div>

        </div>


        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')
    </body>
</html>