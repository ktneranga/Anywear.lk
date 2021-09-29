<?php

namespace App\Http\Livewire\App;

use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        return view('livewire.app.home-component')->layout('layouts.shop');
    }
}
