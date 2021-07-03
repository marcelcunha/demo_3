@extends('components.card')

@section('card-header', 'Usuários')

@section('card-body')

<div class="table w-full p-2">
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
                    <a href="#" class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin">Remove</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('card-footer')
{{$users->links()}}
@endsection
