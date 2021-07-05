<form action="" wire:submit.prevent='store()'>

    <x-card>
        <x-slot name="header">
            Cadastrar Pré Usuário
        </x-slot>

        <div class="">
            <label class="block text-sm text-gray-600" for="name">Nome</label>
            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" wire:model.lazy='name'
                type="text" required>
            @error('name')
            {{$message}}
            @enderror
        </div>
        <div class="mt-2">
            <label class="block text-sm text-gray-600" for="email">E-mail</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="email" wire:model.lazy='email'
                type="email" required>
            @error('email')
            {{$message}}
            @enderror
        </div>

        <x-slot name="footer">
            <button class="btn-primary" type="submit">Salvar</button>
        </x-slot>
    </x-card>

</form>
