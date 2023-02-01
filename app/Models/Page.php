<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'ordering_number',
        'title',
        'slug',
        'subtitle',
        'introduction',
        'thumbnail',
        'thumbnail_alt',
        'content',
    ];

    protected $casts = [
        'is_home_page' => 'boolean',
        'updated_at' => 'datetime:Y-m-d H:i:s',
        'created_at' => 'datetime:Y-m-d H:i:s',
    ];
}
