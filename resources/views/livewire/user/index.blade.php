@extends('components.card')

@section('card-body')
@if (session()->has('success'))
<x-alert>
    {{session()->get('success')}}
</x-alert>
@endif

@section('card-header')
<div class="flex justify-between items-center">
    Usuários
    <a class='btn-primary' href="{{route('prospects.create')}}">Novo</a>
</div>
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

            <tr class="bg-gray-100 border-b text-sm text-gray-600 ">
                <td class="p-2 border-r">{{$user->name}}</td>
                <td class="p-2 border-r">{{$user->email}}</td>
                <td class="text-center">
                    <button class="btn-primary my-2"
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
                <button class='btn-danger' wire:click='destroy({{$selected}})' x-on:click="modal=false">Remover</button>
                <button class='btn-secondary' x-on:click="modal=false">Cancelar</button>
            </div>
        </x-slot>
    </x-modal>

    @endisset

</div>

@endsection

@section('card-footer')
{{$users->links()}}
@endsection
