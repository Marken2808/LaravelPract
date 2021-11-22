<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $live_posts;

    public $showPostModal = false;

    public $state = [
        // 'id' => null,
        'title' => '',
        'body' => '',
    ];

    public function render()
    {
        return view('livewire.post');
    }
}
