<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'image_file', 'sort_order',
    ];

    public function project_page()
    {
        return $this->belongsTo(ProjectPage::class);
    }
}
