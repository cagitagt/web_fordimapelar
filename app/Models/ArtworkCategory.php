<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtworkCategory extends Model
{
    //
    protected $fillable = [
        'title',
        'slug',
    ];

    public function artwork()
    {
        return $this->hasMany(Artwork::class);
    }
}
