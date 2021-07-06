@if (session()->has('success'))
<x-alert>
    {{session()->get('success')}}
</x-alert>
@endif

<x-card>

    <x-slot name='header'>
        <div class="flex justify-between items-center">
            Usuários
            <a class='btn-primary' href="{{route('prospects.create')}}">Novo</a>
        </div>
    </x-slot>

    <div class="w-full p-2" x-data="{modal: false, name: undefined}">
        <table class="w-full table-fixed border">
            <thead>
                <tr class="  bg-gray-50 border-b">

                    <th class="w-3/6 p-2 border-r text-lg font-bold text-gray-500">
                        <div class="flex items-center justify-center">
                            Nome
                        </div>
                    </th>
                    <th class="w-3/6 border-r text-lg font-bold text-gray-500">
                        <div class="flex items-center justify-center">
                            E-Mail
                        </div>
                    </th>
                    <th class="w-1/6 p-2 border-r text-lg font-bold text-gray-500">
                        <div class="flex items-center justify-center">
                            Ações
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)

                <tr class=" border-b text-sm text-gray-600 ">
                    <td class="p-2 border-r">{{$user->name}}</td>
                    <td class="p-2 border-r">{{$user->email}}</td>
                    <td class="text-center">
                        <button class="btn-primary my-2" wire:click='updateSelected({{$user}})'
                            x-on:click.prevent="modal=true">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @isset($selected)
        <x-modal>
            <x-slot name="title">
                Remover Usuário
            </x-slot>

            Tem certeza que deseja remover o usuário: {{$selected?->name}}?

            <x-slot name="footer">
                <div class="ml-auto">
                    <button class='btn-danger' wire:click='destroy({{$selected}})'
                        x-on:click="modal=false">Remover</button>
                    <button class='btn-secondary' x-on:click="modal=false">Cancelar</button>
                </div>
            </x-slot>
        </x-modal>
        @endisset

    </div>

    <x-slot name='footer'>
        {{$users->links()}}
    </x-slot>
</x-card>
