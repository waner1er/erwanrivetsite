<div class="nav-menu__logo">
    <a href="{{route('pages.index')}}" class="nav-menu__logo__link">
        @if(!null == $img)
{{--            <img src="{{asset('storage/'.$img )}}" alt="Logo" class="nav-menu__logo__img">--}}
{{--            <x-curator-glider :media="$img" class="nav-menu__logo__img"/>--}}
        @else
            Logo
        @endif
    </a>

</div>
