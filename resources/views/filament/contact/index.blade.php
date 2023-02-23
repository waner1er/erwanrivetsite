<div>
    <h1 class="filament-header-heading text-2xl font-bold tracking-tight mb-4">{{ ucfirst(__('contact')) }}</h1>
    <form wire:submit.prevent="submit">
        {{--    TODO: passer dans un composant les différents champs ou réussir a entrer le <x-filament::inputText>--}}
        {{--       title --}}
        <div class="grid grid-cols-2 gap-3">
            <div class="filament-forms-field-wrapper mb-2">
                <div class="space-y-2">
                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                        <label
                            class="filament-forms-field-wrapper mb-2-label inline-flex items-center space-x-3 rtl:space-x-reverse"
                            for="title">
                            <span class="text-sm font-medium leading-4 text-gray-700">{{ ucfirst(__('title'))}} </span>
                        </label>
                    </div>
                    <div
                        class="filament-forms-text-input-component flex items-center space-x-2 rtl:space-x-reverse group">
                        <div class="flex-1">
                            <label>
                                <input wire:model="contact.title" type="text"
                                       class="block w-full transition duration-75 rounded-lg shadow-sm outline-none focus:border-primary-500
                                focus:ring-1 focus:ring-inset focus:ring-primary-500 disabled:opacity-70 border-gray-300">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            {{--    subtitle  --}}
            <div class="filament-forms-field-wrapper mb-2">
                <div class="space-y-2">
                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                        <label
                            class="filament-forms-field-wrapper mb-2-label inline-flex items-center space-x-3 rtl:space-x-reverse"
                            for="title">
                            <span
                                class="text-sm font-medium leading-4 text-gray-700">{{ ucfirst( __('subtitle')) }}</span>
                        </label>
                    </div>
                    <div
                        class="filament-forms-text-input-component flex items-center space-x-2 rtl:space-x-reverse group">
                        <div class="flex-1">
                            <label>
                                <input wire:model="contact.subtitle" type="text"
                                       class="block w-full transition duration-75 rounded-lg shadow-sm outline-none focus:border-primary-500
                                focus:ring-1 focus:ring-inset focus:ring-primary-500 disabled:opacity-70 border-gray-300">
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            {{--    slug    --}}
            <div class="filament-forms-field-wrapper mb-2">
                <div class="space-y-2">
                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                        <label
                            class="filament-forms-field-wrapper mb-2-label inline-flex items-center space-x-3 rtl:space-x-reverse"
                            for="title">
                            <span class="text-sm font-medium leading-4 text-gray-700">{{ ucfirst(__('slug')) }}</span>
                        </label>
                    </div>
                    <div
                        class="filament-forms-text-input-component flex items-center space-x-2 rtl:space-x-reverse group">
                        <div class="flex-1">
                            <label>
                                <input wire:model="contact.slug" type="text"
                                       class="block w-full transition duration-75 rounded-lg shadow-sm outline-none focus:border-primary-500
                                focus:ring-1 focus:ring-inset focus:ring-primary-500 disabled:opacity-70 border-gray-300">
                            </label>
                        </div>
                    </div>
                    @error('contact.slug') {{ $message }}  @enderror
                </div>
            </div>
            {{--    introduction--}}
            <div class="filament-forms-field-wrapper mb-2">
                <div class="space-y-2">
                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                        <label
                            class="filament-forms-field-wrapper mb-2-label inline-flex items-center space-x-3 rtl:space-x-reverse"
                            for="title">
                            <span
                                class="text-sm font-medium leading-4 text-gray-700">{{ucfirst(__('introduction'))}}</span>
                        </label>
                    </div>
                    <div
                        class="filament-forms-text-input-component flex items-center space-x-2 rtl:space-x-reverse group">
                        <div class="flex-1">
                            <label>
                                <input wire:model="contact.introduction" type="text"
                                       class="block w-full transition duration-75 rounded-lg shadow-sm outline-none focus:border-primary-500
                                focus:ring-1 focus:ring-inset focus:ring-primary-500 disabled:opacity-70 border-gray-300">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-end align-center">
            <button
                class="filament-button filament-button-size-md inline-flex items-center justify-center py-1 gap-1 font-medium rounded-lg border transition-colors outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset min-h-[2.25rem] px-4 text-sm text-white shadow focus:ring-white border-transparent bg-primary-600 hover:bg-primary-500 focus:bg-primary-700 focus:ring-offset-primary-700 filament-page-button-action"
                type="submit">{{ ucfirst(__('save')) }}</button>
        </div>
    </form>

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
</div>
