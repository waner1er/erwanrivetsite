<div class="nav-menu__overlay"></div>
<nav class="nav-menu">
    @livewire('components.main-logo')
    <ul class="nav-menu__navigation">
        @foreach($navItems as $navitem)
            @if($navitem->slug !== $isHomePage->slug && $navitem->is_active)
                <li class="nav-menu__navigation__item">
                    <a class="nav-menu__navigation__item__link"
                       href="{{route('pages.show', ['slug' =>$navitem->slug])}}">{{$navitem->title}}</a>
                </li>
            @endif
        @endforeach
    </ul>
    <ul class="nav-menu__contact">
        <li class="nav-menu__contact__item">
            <a class="nav-menu__contact__item__link" href="{{ route('pages.contact') }}">Contact</a>
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
