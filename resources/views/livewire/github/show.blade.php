<div wire:loading wire::target='user'></div>
@if ($user)
<x-card>
    <x-slot name='header'>
        {{$user['login']}}
    </x-slot>


    <div class="flex flex-col">

        <div class="flex-none sm:flex">
            <div class="flex">
                <div class=" h-32 w-32   sm:mb-0 mb-3">
                    <img src="{{$user['avatar_url']}}" alt="aji" class=" w-32 h-32 object-cover rounded-2xl">
                </div>
                @isset($user['bio'])
                <div class="flex-1 ml-10 h-40 overflow-hidden">
                    {{$user['bio']}}
                </div>
                @endisset
            </div>
            <div class="flex-auto sm:ml-5 justify-evenly">
                <div class="flex items-center justify-between sm:mt-2">
                    <div class="flex items-center">
                        <div class="flex flex-col">

                            <div class="w-full flex-none text-lg text-gray-800 font-bold leading-none">
                                {{$user['name']}}
                            </div>
                            @isset($user['company'])
                            <div class="flex-auto text-gray-500 my-1">
                                <span class="mr-3 ">{{$user['company']}}</span>
                                <span class="mr-3 border-r border-gray-200  max-h-0"></span>
                                <span>{{$user['location']}}</span>
                            </div>
                            @endisset
                        </div>
                    </div>
                </div>

                <div class="flex pt-2  text-sm text-gray-500">
                    <div class="flex-1 inline-flex items-center">
                        <i class="fas fa-user-plus"></i>
                        <p class="ml-2">{{$user['followers']}} Seguidores</p>
                    </div>
                    <div class="flex-1 inline-flex items-center">
                        <i class="fab fa-github"></i>
                        <p class="ml-2">{{$user['public_repos']}} Repositórios</p>
                    </div>
                    <a class="flex-no-shrink bg-green-400 hover:bg-green-500 px-5 ml-4 py-2 text-xs shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-green-300 hover:border-green-500 text-white rounded-full transition ease-in duration-300"
                        href="{{$user['html_url']}}" target='blank'>Visitar Perfil</a>
                </div>
            </div>
        </div>


    </div>


</x-card>
@endif
