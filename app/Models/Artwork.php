<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    //
    protected $fillable = [
        'artwork_category_id',
        'thumbnail',
        'title',
        'author_name',
        'slug',
        'content',
        'date'
    ];

    public function artworkCategory()
    {
        return $this->belongsTo(ArtworkCategory::class);
    }
}
