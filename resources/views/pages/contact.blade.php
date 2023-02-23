<x-front-layout>
{{--    @dd($page)--}}
    <livewire:components.main-header-component :title="$page->title" :subtitle="$page->subtitle"/>

    <livewire:components.contact-form/>

</x-front-layout>
