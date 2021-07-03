<form action="" wire:submit.prevent='updateProfile()'>

    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden  text-gray-600">

            <div class="px-6 py-4 bg-white border-b border-gray-600 font-bold uppercase">
                Alterar informações de perfil
            </div>

            <div class="p-6 bg-white border-b border-gray-600">
                <div class="">
                    <label class="block text-sm text-gray-600" for="name">Nome</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" wire:model.lazy='user.name'
                        type="text" required>
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="email">E-mail</label>
                    <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="email" wire:model.lazy='user.email'
                        type="email" required>
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
