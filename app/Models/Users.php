<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'nisn', 'name', 'username', 'email',
        'address', 'phone_number', 'class', 'roles'
    ];
}
