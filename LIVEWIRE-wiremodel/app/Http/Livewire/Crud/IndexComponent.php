<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;

class IndexComponent extends Component
{
    public $search;
    
    public function render()
    {
        return view('livewire.crud.index-component')->layout('livewire.layouts.base');
    }
}
