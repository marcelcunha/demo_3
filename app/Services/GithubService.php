<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GithubService
{
    private string $baseURL;
    private int $perPage = 10;
    private int $totalPages = 50;
    private string $query = "/search/users?q=followers:>500";

    public function __construct()
    {
        $this->baseURL = env('GITHUB_API_URL');
    }

    public function fetchUsersList(int $page = 1, string $locale = '', string $language = '', string $name = ''): array
    {
        $query = $this->getQuery($page, $locale, $language, $name);

        $response = Http::get($this->baseURL . $query)->json();
        $this->setTotalPages($response['total_count']);

        return $response['items'];
    }

    public function fetchUser(string $login)
    {
        return Http::get($this->baseURL . "/users/$login")->json();
    }

    public function getTotalPages()
    {
        return $this->totalPages;
    }

    public function setTotalPages(int $itemsCount)
    {
        $total = $this->perPage * $this->totalPages;

        if ($itemsCount < $total) {
            $this->totalPages = ceil($itemsCount / $this->perPage);
        }
    }

    private function getQuery(int $page, string $locale, string $language, string $name)
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
    
        return $query .=
            "&per_page={$this->perPage}" .
            "&page={$page}";
    }
}
