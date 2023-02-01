<x-front-layout>
    <livewire:components.main-header-component :title="$post->title" :subtitle="$post->subtitle"
                                     image="{{Storage::url($post->thumbnail)}}" image_show/>
    <section class="page-show container tiptap">
        {!!  $post->introduction  !!}
        <div class="page-show__separator"></div>
        {!!  $post->content  !!}
    </section>


</x-front-layout>
