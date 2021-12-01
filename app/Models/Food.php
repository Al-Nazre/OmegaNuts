<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
     protected $table = 'foods';
    protected $fillable = [
        'name',
        'image',
        'group',
        'energy',
        'calcium',
        'vitamin_c',
        'about'
    ];
}
