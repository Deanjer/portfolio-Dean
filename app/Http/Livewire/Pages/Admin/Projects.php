<?php

namespace App\Http\Livewire\Pages\Admin;

use Livewire\Component;

class Projects extends Component
{
    public $title;
    public $short;
    public $text;
    public $image;

    public function render()
    {
        return view('livewire.pages.admin.projects');
    }
    public function mount()
    {
        if (!auth()->user()->hasRole('admin')) {
            return redirect()->route('dashboard');
        }
    }
}
