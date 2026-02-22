<div>
    <h2 class="text-2xl font-bold mb-4">Buscador de Obstetras</h2>
    <div class="flex gap-2">
        <input type="text" wire:model.live="search" placeholder="Ingrese COP o Apellidos..."
            class="form-input rounded flex-1">
        <button class="bg-primary text-white px-4 py-2 rounded">Buscar</button>
    </div>
    <div class="mt-4">
        <!-- Resultados -->
        <p class="text-gray-500">Ingrese datos para buscar.</p>
    </div>
</div>