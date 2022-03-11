<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ProfilePhotoUploader extends Component
{
    use WithFileUploads;

    public $photo;

    public function storePhoto()
    {
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
