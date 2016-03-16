<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectPage extends Model
{
    const LAYOUT_1 = '1';
    const LAYOUT_1_1 = '1-1';
    const LAYOUT_1_2 = '1-2';

    protected $fillable = [
        'layout',
        'sort_order',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }
}
