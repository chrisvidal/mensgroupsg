<li class="site-navigation__item">
    @if ($url = is_string($item) ? $item : $item->url)
        {{-- Menu item with URL--}}
        <a href="{{ substr( $url, 0, 7 ) === "mailto:" ? $url : $page->url($url) }}"
            class="a site-navigation__link {{ $page->isActive($url) || $page->isBlogArticle($url) ? 'site-navigation__link--active' : '' }}"
        >{{ $label }}</a>
    @else
        {{-- Menu item without URL--}}
        <p class="site-navigation__item">{{ $label }}</p>
    @endif

    @if (! is_string($item) && $item->children)
        {{-- Recursively handle children --}}
        @include('_nav.menu', ['items' => $item->children, 'level' => ++$level])
    @endif
</li>