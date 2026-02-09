<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $fillable = [
        'news_category_id',
        'thumbnail',
        'title',
        'author_name',
        'slug',
        'content'
    ];

    public function newsCategory()
    {
        return $this->belongsTo(NewsCategory::class);
    }

    public function banner()
    {
        return $this->hasOne(Banner::class);
    }
}

