<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GithubService
{
    private string $baseURL;
    private int $perPage = 10;
    private int $totalPages = 50;
    private string $query = '';

    public function __construct()
    {
        $this->baseURL = env('GITHUB_API_URL');
    }

    public function fetchUsersList(int $page = 1): array
    {
        $query = "/search/users?".
        "q=followers:>1000&".
        "s=followers&".
        "type=Users&".
        "per_page={$this->perPage}&".
        "page=$page";

         return Http::get($this->baseURL.$query)->json()['items'];
    }

    public function fetchUser(string $login)
    {
        return Http::get($this->baseURL."/users/$login")->json();
    }

    public function getTotalPages()
    {
        return $this->totalPages;
    }
}
