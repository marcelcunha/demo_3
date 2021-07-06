@section('title', 'Completar Cadastro')

<div class='w-1/3 m-auto'>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <x-logo class="w-auto h-16 mx-auto text-indigo-600" />
        </a>

        <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
            Complete o seu Cadastro
        </h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <form action="" wire:submit.prevent='store()'>
                <div>
                    <label class="block text-sm font-medium text-gray-700 leading-5" for="name">Nome</label>
                    <input class="form-input" id="name" wire:model.lazy='name' type="text" required>
                    <x-error error='name'></x-error>
                </div>

                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700 leading-5" for="email">E-Mail</label>
                    <input class="form-input" id="email" wire:model.lazy='email' type="email" required>
                    <x-error error='email'></x-error>
                </div>

                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700 leading-5" for="password">Senha</label>
                    <input class="form-input" id="password" wire:model.lazy='password' type="password" required>
                    <x-error error='password'></x-error>
                </div>

                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700 leading-5"
                        for="password_confirmation">Confirmar Senha</label>
                    <input class="form-input" id="password_confirmation" wire:model.lazy='password_confirmation'
                        type="password">
                </div>

                <button class=" bg-blue-800 hover:opacity-80 text-white font-bold py-2 w-full rounded-md shadow-sm mt-5"
                    type="submit" wire:loading.attr="disabled">
                    
                    <span wire:loading wire:target='store'>
                        <i class="fas fa-spinner fa-pulse"></i>
                    </span>
                    Salvar
                </button>

            </form>

        </div>
    </div>
</div>
