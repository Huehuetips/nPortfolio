<?php

namespace App\Livewire;

use Livewire\Component;

class ThemeSwitcher extends Component
{
    public $darkMode;
    public $isDarkMode;

    public function mount()
    {
        // Inicializa el estado del tema (oscuro o claro)
        $this->darkMode = session('darkMode', false);
    }
    public function toggleTheme()
    {
        $this->darkMode = !$this->darkMode;
        session(['darkMode' => $this->darkMode]);
        // $this->dispatch('dark-mode-toggled', $this->darkMode);
    }

    public function render()
    {
        return view('livewire.theme-switcher');
    }
}