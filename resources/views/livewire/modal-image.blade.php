
<div x-show="mostrarModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
    <div class="max-w-lg w-full p-4 bg-white rounded-lg shadow-md">
      <img src="{{ $imagen }}" class="w-full h-full object-contain">
      <button wire:click="cerrarModal" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Cerrar</button>
    </div>
  </div>