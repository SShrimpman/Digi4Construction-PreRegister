<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserStand extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table = 'user_stands';

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'profession',
        'company',
        'password'
    ];
}
