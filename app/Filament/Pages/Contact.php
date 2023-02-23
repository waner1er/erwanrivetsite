<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Actions\Action;
use Filament\Pages\Page;
use Filament\Resources\Form;
use Illuminate\Contracts\View\View;

class Contact extends Page
{

    protected static ?string $navigationIcon = 'heroicon-o-document';

    protected static string $view = 'filament.contact.index';

    protected static ?int $navigationSort = 1;

    public  $contact;

    public function mount()
    {
        $this->contact = \App\Models\Contact::firstOrFail();
    }

    public $rules = [
        'contact.title' => 'required',
        'contact.slug' => 'required|min:2',
        'contact.subtitle' => 'required',
        'contact.introduction' => 'required',
    ];

    public function submit()
    {
        $this->validate();
        $this->contact->save();
        return back()->with('message', 'Contact updated successfully');
    }


}
