<div class="container">
    {{--    <h1>{{ __('app.contact_form') }}</h1>--}}
    <form wire:submit.prevent="submit">
        <label for="fname">Nom & prénom</label>
        <input type="text" id="name" name="name" wire:model="message.name" placeholder="Votre nom et prénom">
        @error('message.name') <span class="error">{{ $message }}</span> @enderror
        <label for="sujet">Sujet</label>
        <input type="text" id="sujet" name="sujet" wire:model="message.subject" placeholder="L'objet de votre message">
        @error('message.subject') <span class="error">{{ $message }}</span> @enderror

        <label for="email">Email</label>
        <input id="email" type="email" name="email" placeholder="Votre email" wire:model="message.email">
        @error('message.email') <span class="error">{{ $message }}</span> @enderror

        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Votre message" style="height:200px"
                  wire:model="message.message"></textarea>
        @error('message.message') <span class="error">{{ $message }}</span> @enderror
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
</div>
