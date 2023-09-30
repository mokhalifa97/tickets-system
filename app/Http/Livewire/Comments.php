<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{

    public $comments=[
        [
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam fugit quia exercitationem cum eum, animi tempore adipisci, voluptates voluptatum, harum tempora architecto. Ullam perspiciatis suscipit iure, dicta autem dolores expedita.',
            'name' => 'Mohamed Ezat',
            'time' => '30 min ago'
        ]
    ];

    public $newComment;

    public function addComment(){
        if($this->newComment == ""){
            return;
        }

        array_unshift($this->comments,[
            'body' => $this->newComment,
            'name' => 'zahara Ezat',
            'time' => Carbon::now()->diffForHumans() 
        ]);

        $this->newComment='';
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
