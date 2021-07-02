<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GitHubService
{
    private string $baseURL;

    public function __construct()
    {
        $this->baseURL = env('GITHUB_API_URL');
    }

    public function fetchUsersList() : array
    {
        return Http::get($this->baseURL.'/users');
    }
}
