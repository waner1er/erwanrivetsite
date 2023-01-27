<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>
    @vite(['resources/sass/style.scss', 'resources/js/front.js'])
    @livewireStyles
</head>
<body class="body front-layout">
<livewire:components.nav-menu/>
<div>
    {{ $slot }}
</div>
@livewireScripts
</body>
</html>
