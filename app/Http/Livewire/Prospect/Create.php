<?php

namespace App\Http\Livewire\Prospect;

use App\Events\ProspectEvent;
use App\Services\ProspectService;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $email;

    protected function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'unique:prospect_users', 'unique:users']
        ];
    }

    public function store(ProspectService $prospectService)
    {
        $this->validate();

        $prospect = $prospectService->store([
            'name' => $this->name,
            'email' => $this->email
        ]);
        event(new ProspectEvent($prospect));
    }

    public function render()
    {
        return view('livewire.prospect.create');
    }
}
