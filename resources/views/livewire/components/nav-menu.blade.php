<div class="nav-menu__overlay"></div>
<nav class="nav-menu">
    <div class="nav-menu__logo">
        <a href="{{route('pages.show', ['slug' =>$isHomePage->slug])}}" class="nav-menu__logo__link">
            {{$logo ?? config('app.name')}}
        </a>
    </div>
    <ul class="nav-menu__navigation">
        @foreach($navItems as $navitem)
            @if($navitem->slug !== $isHomePage->slug)
                <li class="nav-menu__navigation__item">
                    <a class="nav-menu__navigation__item__link"
                       href="{{route('pages.show', ['slug' =>$navitem->slug])}}">{{$navitem->title}}</a>
                    {{--                <a class="nav-menu__navigation__item__link" href="{{route('about-me')}}">About Me</a>--}}
                </li>
            @endif
        @endforeach
    </ul>
    <ul class="nav-menu__contact">
        <li class="nav-menu__contact__item">
            <a class="nav-menu__contact__item__link" href="">Contact</a>
        </li>
        <li class="nav-menu__contact__item">
            <a class="nav-menu__contact__item__link" href="{{ route('posts.index') }}">Blog</a>
        </li>

    </ul>
    <button class="nav-menu__burger">
        <x-pictos.burger/>
        <x-pictos.close/>
    </button>
</nav>
