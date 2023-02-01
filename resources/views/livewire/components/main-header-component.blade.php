<div class="main-header">
    <div class="main-header__title">
        <h1 class="main-header__title__h1 font-title">{{$title}}</h1>
        <h2 class="main-header__title__h2 font-title"> {{ $subtitle }}</h2>
    </div>
    @if($image_show)
        <div class="main-header__img">
            <img src="{{ $image }}" alt="header image">
        </div>
    @endif
</div>
