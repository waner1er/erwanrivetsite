<x-front-layout >
    <livewire:components.main-header-component :title="$page->title" :subtitle="$page->subtitle"
                                               image="{{Storage::url($page->thumbnail)}}"/>
    <section class="page-show container tiptap">

        {!!  $page->introduction  !!}
        <div class="page-show__separator"></div>
        {!!  $page->content  !!}

    </section>


</x-front-layout>
