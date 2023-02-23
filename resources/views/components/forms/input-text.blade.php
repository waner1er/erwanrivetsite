<div class="filament-forms-field-wrapper">
    <div class="space-y-2">
        <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
            <label class="filament-forms-field-wrapper-label inline-flex items-center space-x-3 rtl:space-x-reverse"
                   for="{{$label}}">
                <span class="text-sm font-medium leading-4 text-gray-700">{{$label}}</span>
            </label>
        </div>
        <div class="filament-forms-text-input-component flex items-center space-x-2 rtl:space-x-reverse group">
            <div class="flex-1">
                <label>
                    <input wire:model="{{ $inputModel }}" type="text"
                           class="block w-full transition duration-75 rounded-lg shadow-sm outline-none focus:border-primary-500
                                focus:ring-1 focus:ring-inset focus:ring-primary-500 disabled:opacity-70 border-gray-300">
                </label>

            </div>
        </div>
    </div>
</div>
