<div class="nav-menu__logo">
    <a href="{{route('pages.index')}}" class="nav-menu__logo__link">
        @if($img)
            <x-curator-glider :media="$img" class="nav-menu__logo__img"/>
        @else
            Logo
        @endif
    </a>

</div>
