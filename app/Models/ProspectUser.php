<?php

namespace App\Models;

use App\Notifications\ProspectNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ProspectUser extends Model
{
    use HasFactory, Notifiable;

    public $fillable = ['name', 'email', 'expires_in', 'token'];

    public function sendNewProspectEmailNotification()
    {
        $this->notify(new ProspectNotification($this));
    }
}
