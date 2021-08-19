<?php

namespace App\Http\Livewire\Partials;

use Livewire\Component;

class Header extends Component
{
    protected $listeners = [
        'refresh-header' => '$refresh'
    ];

    public function render()
    {
        return view('partials.header');
    }
}
