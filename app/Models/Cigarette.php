<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cigarette extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'strength',
        'puffs',
        'flavor',
        'price',
        'image',
    ];
}
