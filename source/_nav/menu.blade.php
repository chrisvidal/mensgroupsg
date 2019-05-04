@php $level = $level ?? 0 @endphp


<div class="site-navigation__menu">
    <ul>
        @foreach ($items as $label => $item)
            @include('_nav.menu-item')
        @endforeach
   </ul>
</div>
