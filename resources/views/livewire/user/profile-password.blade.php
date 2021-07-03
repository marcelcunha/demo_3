<form action="" wire:submit.prevent='updatePassword()'>

    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden  text-gray-600">

            <div class="px-6 py-4 bg-white border-b border-gray-600 font-bold uppercase">
                Alterar Sua Senha
            </div>

            <div class="p-6 bg-white border-b border-gray-600">
                <div class="">
                    <label class="block text-sm text-gray-600" for="password">Senha Atual</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="password" wire:model.lazy='password'
                        type="password" required>
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="new_password">Nova Senha</label>
                    <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="new_password" wire:model.lazy='newPassword'
                        type="password" required>
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="password_confirmation">Confirmar Nova Senha</label>
                    <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password_confirmation" wire:model.lazy='passwordConfirmation'
                        type="password" required>
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
