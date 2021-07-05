<x-card>
    <x-slot name="header">
        Usuários com mais seguidores do GITHUB
    </x-slot>
    <div wire:loading wire:target='fillUsers()' class="w-12 h-12 border-4 border-blue-600 rounded-full loader"></div>

    <div class="table w-full p-2">
        @isset($users)
        <table class="w-full border">
            <thead>
                <tr class="bg-gray-50 border-b">

                    <th class="p-2 border-r cursor-pointer text-lg font-bold text-gray-500">
                        <div class="flex items-center justify-center">
                            Foto do perfil
                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-lg font-bold text-gray-500">
                        <div class="flex items-center justify-center">
                            Nome de Usuário
                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-lg font-bold text-gray-500">
                        <div class="flex items-center justify-center">
                            Ações
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)

                <tr class="bg-gray-100 border-b text-sm text-gray-600 ">
                    <td class="p-2 border-r">
                        <img src="{{$user['avatar_url']}}" alt="avatar" class='h-16 w-16'>
                    </td>
                    <td class="p-2 border-r">{{$user['login']}}</td>
                    <td class="text-center">
                        <a class='btn-primary' href="{{route('github.show', $user['login'])}}" title='Visualizar Perfil'>
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <button wire:click='previewPage()'><< Anterior</button>
        <button wire:click='nextPage()'>Próximo >></button>
        @endisset
    </div>

</x-card>

@section('styles')
<style>
    @keyframes loader-rotate {
        0% {
            transform: rotate(0);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .loader {
        border-right-color: transparent;
        animation: loader-rotate 1s linear infinite;
    }
</style>
@endsection
