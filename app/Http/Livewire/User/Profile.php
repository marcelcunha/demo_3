<?php

namespace App\Http\Livewire\User;

use App\Services\ProfileService;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    public $user;

    public function mount()
    {
        $this->user = Auth::user();
    }

    protected function rules()
    {
       return [
            'user.name' => ['required'],
            'user.email'=> ['required', 'email', 'unique:users,email,'.$this->user->id]
        ];
    }

    public function updateProfile()
    {
        $this->validate();

        $this->user->save();
    }


    public function render()
    {
        return view('livewire.user.profile');
    }
}
