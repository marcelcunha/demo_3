<?php

namespace App\Http\Livewire\Github;

use App\Services\GithubService;
use Livewire\Component;

class Show extends Component
{
    public ?array $user;

    public function mount(GithubService $service, string $login)
    {
        $this->user = $service->fetchUser($login);
    }

    public function render()
    {
        return view('livewire.github.show');
    }
}
