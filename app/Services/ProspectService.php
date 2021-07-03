<?php

namespace App\Services;

use App\Models\ProspectUser;
use Carbon\Carbon;
use Illuminate\Support\Str;

class ProspectService
{
    public function store(array $data): ProspectUser
    {
        $data['token'] = Str::random(60);
        $data['expires_in'] = Carbon::now()->addHours(8);

        return ProspectUser::create($data);
    }
}
