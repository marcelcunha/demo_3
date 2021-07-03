<?php

namespace App\Services;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function updatePassword(string $password): bool
    {
        $user = Auth::user();

        return $user->update(['password' => Hash::make($password)]);
    }

    public function store($data)
    {
        $data['email_verified_at'] = Carbon::now();
        $data['password'] = Hash::make($data['password']);
        
        return User::create($data);
    }
}
