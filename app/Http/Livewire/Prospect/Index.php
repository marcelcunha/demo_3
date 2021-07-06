<?php

namespace App\Http\Livewire\Prospect;

use App\Models\ProspectUser;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Index extends Component
{
    public ?ProspectUser $selected = null;

    public function destroy(ProspectUser $prospect)
    {
        $prospect->delete();

        $this->selected = null;

        Session::flash('success', 'Pré-Usuário removido com sucesso!');
        return redirect()->route('prospects.index');
    }

    public function updateSelected(ProspectUser $selected)
    {
        $this->selected = $selected;
    }

    public function render()
    {
        return view(
            'livewire.prospect.index',
            [
                'users' => ProspectUser::paginate(10)
            ]
        );
    }
}
