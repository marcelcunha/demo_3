<x-card>
    <x-slot name="header">
        Usuários com mais seguidores do GITHUB
    </x-slot>
    <x-loader wire:loading wire:target='fillUsers,previewPage,nextPage, clear'></x-loader>

    <div wire:init='fillUsers' wire:loading.remove class="w-full p-2">
        @isset($users)
        <form wire:submit.prevent='fillUsers()'>

            <div class='flex flex-wrap mb-4 gap-1 items-end'>
                <div class="w-1/4">
                    <label for="language" class="form-label block">Linguagem</label>
                    <input type="text"
                        class="form-input"
                        placeholder="php" wire:model.lazy='language' />
                </div>
                <div class="w-1/4">
                    <label for="locale" class="form-label block">
                        Localidade/País
                    </label>
                    <input type="text"
                        class="form-input"
                        placeholder="germany" wire:model.lazy='locale' />
                </div>
                <div class="w-1/4">
                    <label for="name" class="form-label block">Nome</label>
                    <input type="text"
                        class="form-input"
                        placeholder="amarildo" wire:model.lazy='name' />
                </div>
                <div class='flex flex-row items-end gap-1 w-28'>
                    <button class='btn-secondary' title='Buscar' type='submit'>
                        <i class="fas fa-search"></i>
                    </button>
                    <button class='btn-secondary' title='Limpar' wire:click='clear()'>
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </form>
        <table class="w-full border table-auto">
            <thead>
                <tr class="bg-gray-50 border-b">

                    <th class="p-2 border-r text-lg font-bold text-gray-500">
                        <div class="flex items-center justissety-center">
                            Foto do perfil
                        </div>
                    </th>
                    <th class="p-2 border-r text-lg font-bold text-gray-500">
                        <div class="flex items-center justify-center">
                            Nome de Usuário
                        </div>
                    </th>
                    <th class="p-2 border-r text-lg font-bold text-gray-500">
                        <div class="flex items-center justify-center">
                            ID
                        </div>
                    </th>
                    <th class="p-2 border-r text-lg font-bold text-gray-500">
                        <div class="flex items-center justify-center">
                            Ações
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)

                <tr class="border-b text-sm text-gray-600 ">
                    <td class="p-2 border-r">
                        <img src="{{$user['avatar_url']}}" alt="avatar" class='h-16 w-16'>
                    </td>
                    <td class="p-2 border-r">{{$user['login']}}</td>
                    <td class="p-2 border-r">{{$user['id']}}</td>
                    <td class="text-center">
                        <a class='btn-primary' href="{{route('github.show', $user['login'])}}"
                            title='Visualizar Perfil'>
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    Não há usuários para essa busca!
                </tr>
                @endforelse
            </tbody>
        </table>

        <button wire:click='previewPage()'>
            << Anterior </button> <button wire:click='nextPage()'>
                Próximo >>
        </button>
        @endif
    </div>

</x-card>
