<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'settings_order',
        'active_settings',
        'site_logo',
        'site_title',
        'site_img',
        'site_img_alt',
        'site_description',
        'site_keywords',
        'site_author',
        'site_email',
        'site_phone',
        'site_address',
        'site_facebook',
        'site_twitter',
        'site_instagram',
        'site_linkedin',

    ];
}
