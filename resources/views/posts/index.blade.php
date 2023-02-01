<x-front-layout>
    <livewire:components.main-header-component title="Categories" subtitle="toutes les categories" image_show image="https://picsum.photos/250" />
        <div class="container blog-category">
        @foreach($categories as $category)
            @if($category->posts->count() > 0)
                <div class="blog-category__cat" data-expand-target>
                    <h2 class="font-title">{{ $category->name }}</h2>
                    <a href="{{route('posts.category', $category->slug)}}" data-expand-link></a>
                    <div class="blog-category__cat__grid">
                        @foreach($category->posts as $post)
                            <div>
                                <a href="{{ route('blog.show', ['post' => $post->slug]) }}">{{ $post->title }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</x-front-layout>
