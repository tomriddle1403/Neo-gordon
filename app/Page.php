<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'content',
        'text_background_enabled',
        'logo_background_enabled',
        'images',
        'background_colour',
        'metadata',
    ];

    protected $casts = [
        'text_background_enabled' => 'boolean',
        'logo_background_enabled' => 'boolean',
        'images' => 'array',
        'metadata' => 'array',
    ];
}
