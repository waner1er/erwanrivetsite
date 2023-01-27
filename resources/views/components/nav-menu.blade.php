<div class="nav-menu__overlay"></div>
<nav class="nav-menu">
    <div class="nav-menu__logo">
        <a href="{{ route('welcome') }}" class="nav-menu__logo__link">
            {{config('app.name')}}
        </a>
    </div>
    <ul class="nav-menu__navigation">
        <li class="nav-menu__navigation__item">
            <a class="nav-menu__navigation__item__link" href="{{route('about-me')}}">About Me</a>
        </li>
        <li class="nav-menu__navigation__item">
            <a class="nav-menu__navigation__item__link" href="{{ route('motivations') }}">Motivations</a>
        </li>
        <li class="nav-menu__navigation__item">
            <a class="nav-menu__navigation__item__link" href="{{ route('languages-and-frameworks') }}">languages and frameworks</a>
        </li>
        <li class="nav-menu__navigation__item">
            <a class="nav-menu__navigation__item__link" href="">Projects</a>
        </li>
        <li class="nav-menu__navigation__item">
            <a class="nav-menu__navigation__item__link" href="">collections</a>
        </li>
    </ul>
    <ul class="nav-menu__contact">
        <li class="nav-menu__contact__item">
            <a class="nav-menu__contact__item__link" href="">Contact</a>
        </li>
    </ul>
    <button class="nav-menu__burger">
        <x-pictos.burger />
        <x-pictos.close />
    </button>
</nav>
