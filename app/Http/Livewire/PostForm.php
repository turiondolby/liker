<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostForm extends Component
{
    public $body;

    protected $rules = [
        'body' => 'required'
    ];

    public function storePost()
    {
        $this->validate();

        auth()->user()->posts()->create(['body' => $this->body]);

        $this->body = '';
    }

    public function render()
    {
        return view('livewire.post-form');
    }
}
