<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;


class Comments extends Component
{
    use WithPagination;


    public $newComment;

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'newComment' => 'required|max:255',
        ]);
    }

    public function addComment(){
        $this->validate(['newComment' => 'required | max:255']);
        $CreateComment= Comment::create(['body'=> $this->newComment,'user_id'=>1]);
        $this->newComment='';
        session()->flash('message', 'Comment added successfully.'); 

    }

    public function remove($id){
        $comment= Comment::find($id);
        $comment->delete();
        session()->flash('message', 'Comment deleted successfully !'); 

    }

    public function render()
    {
        return view('livewire.comments',['comments'=>Comment::latest()->paginate(2)]);
    }
}
