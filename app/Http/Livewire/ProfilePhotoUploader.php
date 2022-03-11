<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ProfilePhotoUploader extends Component
{
    use WithFileUploads;

    public $photo;

    protected $rules = [
      'photo' => 'image|max:10'
    ];

    public function updatedPhoto()
    {
        $this->resetErrorBag();
    }

    public function storePhoto()
    {
        $this->validate();

        auth()->user()->update([
            'profile_photo' => $this->photo->store('profile-photos', 'public')
        ]);

        $this->photo = null;
    }

    public function render()
    {
        return view('livewire.profile-photo-uploader');
    }
}
