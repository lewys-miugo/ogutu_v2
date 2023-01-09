<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternalPublication extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'title',
        'image',
        'content'
    ];
}
