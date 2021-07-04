@extends('components.card')

@section('card-body')
@if (session()->has('success'))
<x-alert>
    {{session()->get('success')}}
</x-alert>
@endif

@section('card-header')
Usuários
<a href="{{route('prospects.create')}}">Novo</a>
@endsection

<div class="table w-full p-2" x-data="{modal: false, name: undefined}">
    <table class="w-full border">
        <thead>
            <tr class="bg-gray-50 border-b">

                <th class="p-2 border-r cursor-pointer text-lg font-bold text-gray-500">
                    <div class="flex items-center justify-center">
                        Nome
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-lg font-bold text-gray-500">
                    <div class="flex items-center justify-center">
                        E-Mail
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

            <tr class="bg-gray-100 border-b text-sm text-gray-600">
                <td class="p-2 border-r">{{$user->name}}</td>
                <td class="p-2 border-r">{{$user->email}}</td>
                <td class="text-center">
                    <button class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin"
                        wire:click='updateSelected({{$user}})' x-on:click.prevent="modal=true">
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
                <button wire:click='destroy({{$selected}})' x-on:click="modal=false">Remover</button>
                <button x-on:click="modal=false">Cancelar</button>
            </div>
        </x-slot>
    </x-modal>

    @endisset

</div>

@endsection

@section('card-footer')
{{$users->links()}}
@endsection
