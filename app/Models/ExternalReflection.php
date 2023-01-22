<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExternalReflection extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'tag',
        'time',
        'image',
        'link'
    ];
}
