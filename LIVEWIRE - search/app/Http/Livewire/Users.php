<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{

    
    public $search;

    public $queryString = [
        'search' => ['except' => '']
    ];
    
    public function render()
    {

        return view('livewire.users', [
            'users' => User::when($this->search, function($q){
                $q -> where('name', 'like', '%'.$this->search. '%')->orWhere('email', 'like', '%'.$this->search. '%');
            })->get()
        ]);
    }
}
