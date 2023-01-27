<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'site-logo',
        'site-title',
        'site-description',
        'site-keywords',
        'site-author',
        'site-email',
        'site-phone',
        'site-address',
        'site-facebook',
        'site-twitter',
        'site-instagram',
        'site-linkedin',

    ];
}
