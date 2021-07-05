<form action="" wire:submit.prevent='updateProfile()'>

    <x-card>
        <x-slot name="header">
            Alterar informações de perfil
        </x-slot>

        <div class="">
            <label class="block text-sm text-gray-600" for="name">Nome</label>
            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" wire:model.lazy='user.name'
                type="text" required>
        </div>
        <div class="mt-2">
            <label class="block text-sm text-gray-600" for="email">E-mail</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="email" wire:model.lazy='user.email'
                type="email" required>
        </div>
       
        <x-slot name="footer">
            <button class="btn-primary" type="submit">Salvar</button>
        </x-slot>
    </x-card>
</form>
