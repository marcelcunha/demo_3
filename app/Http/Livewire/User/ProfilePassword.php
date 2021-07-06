<?php

namespace App\Http\Livewire\User;

use App\Services\UserService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ProfilePassword extends Component
{
    public $password;
    public $newPassword;
    public $passwordConfirmation;

    protected function rules()
    {
        return [
            'password' => ['required', function($attribute, $value, $fail){
                $password = Auth::user()->password;

                if(!Hash::check($value, $password)){
                    $fail("O campo $attribute não confere com sua senha");
                }
            }],
            'newPassword' => ['required', 'confirmed', 'min:6']
        ];
    }

    public function updatePassword(UserService $service)
    {
        $this->validate();
        $service->updatePassword($this->newPassword);
    }

    public function render()
    {
        return view('livewire.user.profile-password');
    }
}
