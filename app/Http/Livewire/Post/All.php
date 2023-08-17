<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use App\Models\Post;

class All extends Component
{
    public function render()
    {
        $allPosts = Post::all();
        return view('livewire.post.all', compact('allPosts'))->layout('layouts.app');
    }
}
