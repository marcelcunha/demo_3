<?php

namespace App\Http\Livewire\User;

use App\Models\ProspectUser;
use App\Providers\Registered;
use App\Services\UserService;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Create extends Component
{
    public ProspectUser $prospect;
    public string $name;
    public string $email;
    public string $password;
    public string $password_confirmation;

    public function mount(ProspectUser $prospect)
    {

        if($prospect->expires_in <= Carbon::now()){
            throw new Exception('O tempo para o cadastro expirou, entre em contato com um administrador para receber um novo email com um link.');
        }

        $this->email = $prospect->email;
        $this->name = $prospect->name;
        $this->password = $this->password_confirmation = '';
    }

    protected function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed'],
            'password_confirmation' => ['required']
        ];
    }

    public function store(UserService $service)
    {
        Auth::logout();

        $this->validate();

        $user = $service->store([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);

        event(new Registered($user, $this->prospect));

        Session::flash('success', 'Seu cadastro foi efetuado, faça login na aplicação');
        redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.user.create')->extends('layouts.auth');;
    }
}
