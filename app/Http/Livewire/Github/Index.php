<?php

namespace App\Http\Livewire\Github;

use App\Services\GithubService;
use Livewire\Component;

class Index extends Component
{
    public int $page;
    public int $totalPages;
    public ?array $users = null;
    public string $language = '';
    public string $locale = '';
    public string $name = '';

    public function mount(GithubService $service)
    {
        $this->page = 1;
        $this->totalPages = $service->getTotalPages();
    }

    public function nextPage()
    {
        $this->users = null;

        if ($this->page <= $this->totalPages) {
            $this->page++;
            $this->fillUsers();
        }
    }

    public function previewPage()
    {
        $this->users = null;

        if ($this->page > 1) {
            $this->page--;
            $this->fillUsers();
        }
    }

    public function fillUsers()
    {

        $this->users = (new GithubService)->fetchUsersList(
            $this->page,
            $this->locale,
            $this->language,
            $this->name
        );
    }


    public function clear()
    {
        $this->language = $this->locale = $this->name = '';
        $this->fillUsers();
    }

    public function render()
    {
        return view('livewire.github.index');
    }
}
