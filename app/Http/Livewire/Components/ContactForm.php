<?php

namespace App\Http\Livewire\Components;

use App\Models\Message;
use Livewire\Component;

class ContactForm extends Component
{
    public $message;

    protected $rules = [
        'message.name' => 'required',
        'message.email' => 'required|email',
        'message.subject' => 'required',
        'message.message' => 'required',
    ];

    public function submit()
    {
        $this->validate();
        Message::create($this->message);
        $this->reset();
        return back()->with('message', __('custom.message_sent'));
    }

    public function render()
    {
        return view('livewire.components.contact-form');
    }
}
