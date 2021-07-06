<form action="" wire:submit.prevent='updatePassword()'>

    <x-card>
        <x-slot name="header">
            Alterar Sua Senha
        </x-slot>
        <div class="">
            <label class="block form-label" for="password">Senha Atual</label>
            <input class="form-input" id="password" wire:model.lazy='password'
                type="password" required>
        </div>
        <div class="mt-2">
            <label class="block form-label" for="new_password">Nova Senha</label>
            <input class="form-input" id="new_password"
                wire:model.lazy='newPassword' type="password" required>
        </div>
        <div class="mt-2">
            <label class="block form-label" for="password_confirmation">Confirmar Nova Senha</label>
            <input class="form-input" id="password_confirmation"
                wire:model.lazy='passwordConfirmation' type="password" required>
        </div>
        <x-slot name="footer">
            <button class="btn-primary" type="submit">Salvar</button>
        </x-slot>
    </x-card>

</form>
