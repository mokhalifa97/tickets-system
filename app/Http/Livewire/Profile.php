<?php

namespace App\Http\Livewire;


use App\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    
    
    public function add(){
        
        return view("add");
    }

    public function render()
    {
        $id=Auth::id();
        $name=User::find($id);
        return view('livewire.profile',['user'=> $name]);
    }
}
