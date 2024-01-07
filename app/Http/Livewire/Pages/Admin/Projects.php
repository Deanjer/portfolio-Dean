<?php
// app/Http/Livewire/Pages/Admin/Projects.php

namespace App\Http\Livewire\Pages\Admin;

use Livewire\Component;
use App\Models\Project;
use Livewire\WithFileUploads; // Make sure to include the trait

class Projects extends Component
{
    use WithFileUploads; // Include the WithFileUploads trait

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

    public function saveProject()
    {
        // Validate form fields
        $this->validate([
            'title' => 'required|string',
            'short' => 'required|string',
            'text' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Save the project to the database
        $imagePath = null;
        if ($this->image) {
            $imagePath = $this->image->store('project_images', 'public');
        }

        $project = Project::create([
            'title' => $this->title,
            'short' => $this->short,
            'text' => $this->text,
            'image_path' => $imagePath,
        ]);

        // Handle image upload if provided
        if ($this->image) {
            $imagePath = $this->image->store('project_images', 'public');
            $project->update(['image' => $imagePath]);
        }

        // Display a success message
        session()->flash('success', 'Project saved successfully.');

        // Reset form fields
        $this->reset(['title', 'short', 'text', 'image']);
    }
}
