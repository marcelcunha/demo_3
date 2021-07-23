<?php

namespace App\Services;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Http;

class GithubService
{
    protected string $baseURL;
    protected string $query = "/search/users?q=followers:>500";
    protected int $perPage = 10;

    public function __construct()
    {
        $this->baseURL = env('GITHUB_API_URL');
    }

    public function fetchUsersList(int $page = 1, string $locale = '', string $language = '', string $name = '') : LengthAwarePaginator
    {
        $query = $this->getQuery($page, $locale, $language, $name);

        $response = Http::get($this->baseURL . $query)->json();

        return (new PaginatorService(
                $response['total_count'],
                $this->perPage,
                500
            ))
            ->paginate($response['items']);
    }

    public function fetchUser(string $login)
    {
        return Http::get($this->baseURL . "/users/$login")->json();
    }

    protected function getQuery(int $page, string $locale, string $language, string $name)
    {
        $query = $this->query;

        if ($locale != '') {
            $query .= "+location:$locale";
        }
        if ($language != '') {
            $query .= "+language:$language";
        }
        if ($name != '') {
            $query .= "+in:name+$name";
        }

        return $query  .=
            "&per_page={$this->perPage}" .
            "&page={$page}";
    }
}
