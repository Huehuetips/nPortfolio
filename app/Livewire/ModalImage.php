<?php

namespace App\Livewire;

use Livewire\Component;

class ModalImage extends Component
{
    public $imagen;
    public $mostrarModal = false;

    // Componente Livewire
    public function render()
    {
        return view('livewire.modal-image');
    }

    public function mostrarImagenAmpliada($imagen)
    {
        $this->imagen = $imagen;
        $this->mostrarModal = true;
    }

    public function mount($imagen)
    {
        $this->imagen = $imagen;
        // $this->listener('mostrarImagenAmpliada', 'mostrarImagenAmpliada');
    }
}
