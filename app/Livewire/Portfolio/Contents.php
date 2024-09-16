<?php

namespace App\Livewire\Portfolio;

use Livewire\Component;

class Contents extends Component
{
    public $tabs = [];
    public $activeTab = 0;

    public function mount($tabs)
    {
        $this->tabs = $tabs;
    }

    public function setActiveTab($index)
    {
        $this->activeTab = $index;
    }
    public function render()
    {
        return view('livewire.portfolio.contents');
    }
}