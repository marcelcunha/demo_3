<form action="" wire:submit.prevent='store()'>

    <x-card>
        <x-slot name="header">
            Cadastrar Pré Usuário
        </x-slot>

        <div class="">
            <label class="form-label" for="name">Nome</label>
            <input class="form-input" id="name" wire:model.lazy='name' type="text" required>
            <x-error error='name'></x-error>
        </div>
        <div class="mt-2">
            <label class="form-label" for="email">E-mail</label>
            <input class="form-input" id="email" wire:model.lazy='email' type="email" required>
            <x-error error='email'></x-error>
        </div>

        <x-slot name="footer">
            <button class="btn-primary " type="submit" wire:loading.attr="disabled">
                <span wire:loading wire:target='store'>
                    <i class="fas fa-spinner fa-pulse"></i>
                </span>
                Salvar
            </button>
        </x-slot>
    </x-card>

</form>
