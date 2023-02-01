<x-front-layout>
    <livewire:components.main-header-component  :title="$category->name"/>

    <div class="container blog-category">
                @foreach($category->posts as $post)
                    <div>
                        <p>{{ $post->content }}</p>
                        <a href="{{ route('blog.show', ['post' => $post->slug]) }}">{{ $post->title }}</a>
                    </div>
                @endforeach
        </div>
    </div>
</x-front-layout>
