<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="icon" type="image/x-icon" href="{{ $settings->site_img }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $settings->site_description }}"/>
    <meta name="author" content="{{ $settings->site_author }}"/>
    <meta name="robots" content="index, follow"/>
    <meta name="googlebot" content="index, follow"/>

    <title>{{ $settings->site_title ?? config('app.name') }}</title>
    @vite(['resources/sass/style.scss', 'resources/js/front.js'])
    @livewireStyles
</head>
<body class="body front-layout">
<main id="main">
    {{--<livewire:components.switch-button/>--}}
    <livewire:components.nav-menu/>
    <div>
        {{ $slot }}
    </div>
</main>
<livewire:components.footer-component/>
@livewireScripts
</body>
</html>
