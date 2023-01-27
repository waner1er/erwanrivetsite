<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Welcome Page') }}
    </h2>
</x-slot>
{{--@dd($welcomePage)--}}
<div class="container mx-auto py-12 grid lg:grid-cols-form-layout gap-4 ">
    <div class="border-2">
        <form action="" wire:submit.prevent="submit">
            <label for="title">Titre</label>
            <input type="text" wire:model="slug" id="title">

            <label for="description">Title</label>
            <input type="text" wire:model="description" id="description">

            <label for="introduction">Introduction</label>
            <input type="text" wire:model="introduction" id="introduction">

            <label for="content">Content</label>
            <textarea wire:model="content" id="content" cols="30" rows="10"></textarea>

            <label for="thumbnail">Thumbnail</label>
            <input type="file" wire:model="thumbnail" id="thumbnail">
            @error('thumbnail') <span class="error">{{ $message }}</span> @enderror


            <label for="thumbnail_alt">Thumbnail</label>
            <input type="text" wire:model="thumbnail_alt" id="thumbnail_alt">



            <button type="submit">Update</button>
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </form>
    </div>
    <div class="border-2">
        {{ $title }}

        @if (!is_string($thumbnail))
            Photo Preview:
            <img src="{{ $thumbnail->temporaryUrl() }}">
        @else
            c'est une string : {{ $thumbnail }}
        @endif
    </div>
</div>
