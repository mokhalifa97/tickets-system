<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{

    public $comments;
    public $newComment;

    public function mount(){
        $initialComment= Comment::latest()->get();
        $this->comments = $initialComment;
    }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'newComment' => 'required|max:255',
        ]);
    }

    public function addComment(){
        $this->validate(['newComment' => 'required | max:255']);
        $CreateComment= Comment::create(['body'=> $this->newComment,'user_id'=>1]);
        $this->comments->prepend($CreateComment);
        $this->newComment='';
    }

    public function remove($id){
        $comment= Comment::find($id);
        $comment->delete();
        $this->comments = $this->comments->except($id);
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
