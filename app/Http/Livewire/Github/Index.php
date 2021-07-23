<?php

namespace App\Http\Livewire\Github;

use App\Services\GithubService;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public string $language = '';
    public string $locale = '';
    public string $name = '';

    /**
     *  Atualiza a lista de usuários,
     * baseado ou não nos parâmetros de consulta
     *
     * @param boolean $search especifica se é uma consulta
     * @return LengthAwarePaginator
     */
    public function fillUsers(bool $search = false): LengthAwarePaginator
    {
        if ($search) {
            $this->resetPage();
        }

        return (new GithubService)->fetchUsersList(
            $this->page,
            $this->locale,
            $this->language,
            $this->name
        );
    }

    /**
     * Limpa os parâmetro da consulta
     *
     * @return void
     */
    public function clear()
    {
        $this->resetPage();
        $this->language = $this->locale = $this->name = '';
    }

    public function render(Request $request)
    {
        return view('livewire.github.index', ['users' => $this->fillUsers()]);
    }
}
