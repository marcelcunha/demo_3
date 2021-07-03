<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProspectUser extends Model
{
    use HasFactory;

    public $fillable = ['name', 'email', 'expires_in', 'token'];
}
