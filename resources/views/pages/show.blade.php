<x-front-layout>
    <livewire:components.main-header-component :title="$page->title" :subtitle="$page->subtitle"
                                               image="{{Storage::url($page->thumbnail)}}" image_show/>
    <section class="page-show container tiptap">
        <div class="page-show__intro">
            {!!  $page->introduction  !!}
        </div>
        <div class="page-show__separator"></div>
        <div class="page-show__content">
            {!!  $page->content  !!}
        </div>

    </section>


</x-front-layout>
