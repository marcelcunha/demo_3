<form action="" wire:submit.prevent='store()'>

    <div class=" mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden  text-gray-600">

            <div class="px-6 py-4 bg-white border-b border-gray-600 font-bold uppercase">
                Finalizar Cadastro
            </div>

            <div class="p-6 bg-white border-b border-gray-600">
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
            </div>

            <div class="p-6 bg-white border-gray-200 text-right">

                <button
                    class="bg-blue-500 shadow-md text-sm text-white font-bold py-3 md:px-8 px-4 hover:bg-blue-400 rounded"
                    type="submit">Salvar</button>
            </div>
        </div>
    </div>
</form>
