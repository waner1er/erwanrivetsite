<x-front-layout>
    <livewire:components.main-header-component :title="$page->title" :subtitle="$page->subtitle"
                                               image="{{Storage::url($page->thumbnail)}}" image_show/>
    <div class="page-show container tiptap">
        <div class="page-show__intro">
            {!!  (ucfirst($page->introduction))  !!}
        </div>
        <div class="page-show__separator"></div>
        <div class="page-show__content">
            {!!  ucfirst($page->content ) !!}
        </div>
    </div>


</x-front-layout>
