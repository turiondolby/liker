<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Events\PostLiked;

class Post extends Component
{
    public $post;

    public function storeLike()
    {
        $like = $this->post->likes()->make();
        $like->user()->associate(auth()->user());

        $like->save();

        broadcast(new PostLiked($this->post));
    }

    public function render()
    {
        return view('livewire.post');
    }
}
