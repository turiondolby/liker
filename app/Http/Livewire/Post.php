<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $post;

    public function storeLike()
    {
        $like = $this->post->likes()->make();
        $like->user()->associate(auth()->user());

        $like->save();
    }

    public function render()
    {
        return view('livewire.post');
    }
}
