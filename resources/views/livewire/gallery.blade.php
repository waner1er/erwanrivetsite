<div class="grid-wrapper">
    @foreach($images as $image)
        <div class="{{ $image->class }}">
                <img src="{{ Storage::url($image->image) }}" alt="{{ $image->name }}">
        </div>
    @endforeach
</div>
