<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class Create extends Component
{
    public $title;
    public $content;

    public function store(){
        $this->validate([
            'title' => 'required',
            'content' => 'required', 
        ]);

        $post = Post::create([
            'title'     => $this->title,
            'content'   => $this->content
        ]);

        session()->flash('message', 'data berhasil');

        return redirect()->route('posts.index');
    }
    public function render()
    {
        return view('livewire.posts.create');
    }
}
