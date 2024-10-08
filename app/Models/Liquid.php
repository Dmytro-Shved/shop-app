<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liquid extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'pg_vg_ratio',
        'volume',
        'flavor',
        'price',
        'image',
    ];
}
