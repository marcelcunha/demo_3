<form action="" wire:submit.prevent='updateProfile()'>

    <x-card>
        <x-slot name="header">
            Alterar informações de perfil
        </x-slot>

        <div class="">
            <label class="block form-label" for="name">Nome</label>
            <input class="form-input" id="name" wire:model.lazy='user.name'
                type="text" required>
        </div>
        <div class="mt-2">
            <label class="block form-label" for="email">E-mail</label>
            <input class="form-input" id="email" wire:model.lazy='user.email'
                type="email" required>
        </div>

        <x-slot name="footer">
            <button class="btn-primary" type="submit">Salvar</button>
        </x-slot>
    </x-card>
</form>
