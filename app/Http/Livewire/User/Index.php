<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public ?User $selected = null;

    public function destroy(User $user)
    {
        $user->delete();

        $this->selected = null;

        Session::flash('success', 'Usuário removido com sucesso!');
        return redirect()->route('users.index');
    }

    public function updateSelected(User $selected)
    {
        $this->selected = $selected;
    }

    public function render()
    {
        return view('livewire.user.index', [
            'users' => User::paginate(10)
        ]);
    }
}
