<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'company',
        'password'
    ];
}
