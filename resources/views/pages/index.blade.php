<x-front-layout>
   @foreach($pages as $page)
<div>
    <a href="{{ route('pages.show', $page->slug) }}">{{ $page->title }}</a>
</div>
   @endforeach
</x-front-layout>
