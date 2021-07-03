<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function updatePassword(string $password): bool
    {
        $user = Auth::user();
        
        return $user->update(['password' => Hash::make($password)]);
    }
}
