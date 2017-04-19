<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManualChapter extends Model
{
    protected $fillable = [
        'manual_id', 'chapter_id', 'level_depth', 'parent_id', 'position'
    ];
}
