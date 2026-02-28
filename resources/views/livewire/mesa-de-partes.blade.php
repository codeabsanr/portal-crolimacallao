<div>
    <h2 class="text-2xl font-bold mb-4">Mesa de Partes Virtual</h2>
    <form wire:submit="save" class="space-y-4 max-w-lg">
        @csrf
        <div>
            <label class="block mb-1">Nombre Completo</label>
            <input type="text" wire:model="name" class="form-input w-full rounded" required>
        </div>
        <div>
            <label class="block mb-1">Asunto</label>
            <input type="text" wire:model="subject" class="form-input w-full rounded" required>
        </div>
        <div>
            <label class="block mb-1">Documento Adjunto</label>
            <input type="file" wire:model="file" class="form-input w-full rounded" required>
        </div>
        <button type="submit" class="bg-primary text-white px-4 py-2 rounded font-bold hover:bg-primary-dark">Enviar
            Solicitud</button>
    </form>
</div>

