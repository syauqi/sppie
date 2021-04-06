<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_spp', 'id_user', 'nisn', 'name', 'month', 'year', 'total_payment'
    ];
}
