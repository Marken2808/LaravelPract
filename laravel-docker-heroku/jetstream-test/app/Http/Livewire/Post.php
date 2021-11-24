<?php

namespace App\Http\Livewire;

use App\Models\Post as PostModel;
use Illuminate\Support\Arr;
use Livewire\Component;

class Post extends Component
{
    public $live_posts;

    public $showPostModal = false;

    public $state = [
        'id' => null,
        'title' => '',
        'body' => '',
    ];

    public function render()
    {
        return view('livewire.post');
    }

    public function savePost()
    {
        
        if ($this->state['id']) {   // set id null to find exist id
            $post = PostModel::find($this->state['id'])
                ->update(Arr::only($this->state, ['title', 'body']));
        } else {
            $this->create = [   // clone state,
                'title' => $this->state['title'],
                'body' => $this->state['body'],
            ];
            $post = PostModel::create($this->create);
        }

        if($post){
            $this->live_posts = PostModel::all();
            $this->resetState();
        }
    }

    public function editPost(PostModel $post)
    {
        $this->showPostModal = true;
        $this->state = [
            'id' => $post->id,
            'title' => $post->title,
            'body' => $post->body,
        ];
    }

    public function resetState()
    {
        $this->showPostModal = false;
        $this->state = [
            'id' => null,
            'title' => '',
            'body' => '',
        ]; 
    }
}
