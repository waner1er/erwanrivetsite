<?php

namespace App\Http\Livewire\Backoffice;

use App\Models\Page;
use http\Message;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Component;
use Livewire\WithFileUploads;

class WelcomebackComponent extends Component
{
    use WithFileUploads;

    public $welcomePage;
    public $title;
    public $slug;
    public $description;
    public $introduction;
    public $thumbnail;
    public $thumbnail_alt;
    public $content;


    public function mount()

    {
        $this->welcomePage = Page::where('slug', 'welcome')->first();
        $this->title = $this->welcomePage->title;
        $this->slug = $this->welcomePage->slug;
        $this->introduction = $this->welcomePage->introduction;
        $this->description = $this->welcomePage->description;
        $this->thumbnail = $this->welcomePage->thumbnail;
        $this->thumbnail_alt = $this->welcomePage->thumbnail_alt;
        $this->content = $this->welcomePage->content;

    }

    public function updatedPhoto()
    {
        $this->validate([
            'thumbnail' => 'image|max:1024',
        ]);
    }

    public $rules = [
        'title' => 'required',
        'slug' => 'required',
        'description' => 'required',
        'thumbnail' => 'required',
        'thumbnail_alt' => 'required',
        'content' => 'required',
    ];

    public function submit()
    {
        $this->validate();
        $this->thumbnail = $this->thumbnail->store('public/thumbnails');
        $this->thumbnail = str_replace('public/thumbnails/', '', $this->thumbnail);
        $this->welcomePage->update([
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'thumbnail' => $this->thumbnail,
            'introduction' => $this->introduction,
            'thumbnail_alt' => $this->thumbnail_alt,
            'content' => $this->content,
        ]);

        session()->flash('message', 'Welcome page updated successfully.');
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.backoffice.welcomeback-component');
    }
}
