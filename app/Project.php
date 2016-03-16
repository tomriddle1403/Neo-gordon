<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Project extends Model
{
    protected $fillable = [
        'background_colour',
        'category_id',
        'client',
        'description',
        'logo_background_enabled',
        'metadata',
        'name',
        'published',
        'sort_order',
        'text_background_enabled',
    ];

    protected $casts = [
        'metadata'                => 'array',
        'published'               => 'bool',
        'logo_background_enabled' => 'bool',
        'text_background_enabled' => 'bool',
    ];

    public function category()
    {
        return  $this->has(Category::class);
    }

}
