<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.user.index', [
            'users' => User::paginate(10)
        ]);
    }
}
