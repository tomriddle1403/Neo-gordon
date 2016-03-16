<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Project extends Model
{
    protected $fillable = [
        'name',
        'published',
        'description',
        'client',
        'sort_order',
        'metadata',
        'category_id',
    ];

    public function category()
    {
        return  $this->has(Category::class);
    }

}
