<div>
    <h2 class="text-2xl font-bold mb-4">Buscador Normativo</h2>
    <div class="flex flex-col md:flex-row gap-4 mb-6">
        <input type="text" wire:model.live="query" placeholder="Buscar por título o número..."
            class="form-input rounded flex-1">
        <select wire:model.live="category" class="form-select rounded md:w-48">
            <option value="">Todas las categorías</option>
            <option value="ley">Leyes</option>
            <option value="estatuto">Estatutos</option>
            <option value="resolucion">Resoluciones</option>
        </select>
        <button class="bg-primary text-white px-6 py-2 rounded">Filtrar</button>
    </div>
    <div class="space-y-4">
        <!-- Resultados -->
        <p class="text-gray-500 italic">No se encontraron normativas que coincidan con la búsqueda.</p>
    </div>
</div>

