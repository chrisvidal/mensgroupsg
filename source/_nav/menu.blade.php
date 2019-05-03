@php $level = $level ?? 0 @endphp

<a href="{{ $page->url( '/') }}" class="site-navigation__logo">
    @include('_components.logo')
    <div class="site-navigation__logo__few-and">MEN'S<br>GROUP</div>
    <div class="site-navigation__logo__far" style="transform: translate3d(-100%, 0px, 0px) translate3d(86.6666vw, 0px, 0px);">SINGAPORE</div>
</a>

<div class="site-navigation__menu">
    <ul>
        @foreach ($items as $label => $item)
            @include('_nav.menu-item')
        @endforeach
   </ul>
</div>
