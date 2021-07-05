<form action="" wire:submit.prevent='store()'>

    <x-card>
        <x-slot name="header">
            Finalizar Cadastro
        </x-slot>

        <div>
            <label class="block text-sm text-gray-600" for="name">Nome</label>
            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" wire:model.lazy='name'
                type="text" required>
                @include('components.error', ['error'=> 'name'])
        </div>

        <div class="mt-4">
            <label class="block text-sm text-gray-600" for="email">E-Mail</label>
            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="email" wire:model.lazy='email'
                type="email" required>
                 @include('components.error', ['error'=> 'email'])
        </div>

        <div class="mt-4">
            <label class="block text-sm text-gray-600" for="password">Senha</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" wire:model.lazy='password'
                type="password" required>
                 @include('components.error', ['error'=> 'password'])
        </div>

        <div class="mt-4">
            <label class="block text-sm text-gray-600" for="password_confirmation">Confirmar Senha</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password_confirmation" wire:model.lazy='password_confirmation'
                type="password">
        </div>

        <x-slot name="footer">
            <button class="btn-primary" type="submit">Salvar</button>
        </x-slot>
    </x-card>
    
</form>
