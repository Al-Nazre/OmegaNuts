<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    use HasFactory;
    protected $table = 'container';
    protected $fillable = ['container_name','container_volume','container_image'];
    protected $cast = [
        'favorite' => 'boolean'
    ];
}
