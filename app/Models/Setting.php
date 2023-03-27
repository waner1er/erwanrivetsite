<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'settings_order',
        'active_settings',
        'site_logo',
        'site_about_paragraph',
        'site_about_title',
        'site_title',
        'site_img',
        'site_img_alt',
        'site_description',
        'site_keywords',
        'site_author',
        'site_email',
        'site_phone',
        'site_address',
        'social_media',
    ];

    protected $casts = [
        'social_media' => 'array',
    ];
}
