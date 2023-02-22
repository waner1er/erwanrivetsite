<x-front-layout>
    <livewire:components.main-header-component :title="$page->title" :subtitle="$page->subtitle"
                                               image="{{Storage::url($page->thumbnail)}}" image_show/>

    <livewire:components.contact-form/>

</x-front-layout>
