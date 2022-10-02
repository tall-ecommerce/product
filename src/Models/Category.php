<?php

namespace TallEcommerce\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'metadata',
        'sort',
        'description',
        'level',
        'path_in_store',
        'path',
    ];

    protected $casts = [
        'metadata' => 'array',
    ];
}
